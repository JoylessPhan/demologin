<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller { 

	function __construct() { 
		parent::__construct();
		$this->load->model('user_model');
	}

	function index() { 
		if ($this->user_model->checkLoggedIn() == TRUE) {
			// if ($this->session->userdata('user_level') ==1) {
				$data['result'] = $this->user_model->getUserList();
				// abc
			// }
			// else {
				// $data['result'] = $this->user_model->getUserRow();
			// }
			$data['titlePage'] = '.: Home Page :.';
			$this->load->view('users/index', $data);
		}
		else {
			redirect('login');
		}
	} // end index.

	function editUser($userId) { 
		if ($this->user_model->checkLoggedIn() == TRUE) {
			$this->form_validation->set_rules('userName', 'Name', 'required|min_length[2]');
			$this->form_validation->set_rules('userFullName', 'Full name', 'required|min_length[4]');
			$this->form_validation->set_rules('userAddress', 'Address', 'required');
			$this->form_validation->set_rules('userEmail', 'User email', 'required|valid_email|callback_checkEmail');
			$this->form_validation->set_rules('userLevel', 'User level', 'required');
			if ($this->form_validation->run()) {
				$permission = $this->input->post('userLevel');
				if ($permission == '1') {
					if ($this->input->post()) {
						$userName 		= $this->input->post('userName');
						$userFullName 	= $this->input->post('userFullName');
						$userGender 	= $this->input->post('userGender');
						$userAddress 	= $this->input->post('userAddress');
						$userEmail 		= $this->input->post('userEmail');
						$userLevel 		= $this->input->post('userLevel');
						$data = array(
							'user_name' 	=> $userName,
							'user_full_name'=> $userFullName,
							'user_gender' 	=> $userGender,
							'user_address' 	=> $userAddress,
							'user_email' 	=> $userEmail,
							'user_level' 	=> $userLevel,
						);
						$this->user_model->updateUser($data, $userId);
						$this->session->set_flashdata('editSuccess', 'Edit success!');
						redirect('users');
					}
				} // permission.
				else {
					$this->session->set_flashdata('permission', 'No permission!');
				}
			}
			$data['result'] = $this->user_model->getUserById($userId);
			$data['titlePage'] = '.: Edit Page :.';
			$this->load->view('users/edit', $data);
		}
		else {
			redirect('login');
		}

	} // end editUsers.

	function removeUser() { 
		if ($this->input->post()) {
			$this->user_model->deleteUser($this->input->post('userId'));
			$this->session->set_flashdata('removeSuccess', 'Delete success!');
			redirect('users');
		}
	} // end

	function createUser() { 
		$this->form_validation->set_rules('userName', 'Name', 'required|min_length[2]');
		$this->form_validation->set_rules('userFullName', 'Full name', 'required|min_length[4]');
		$this->form_validation->set_rules('userAddress', 'Address', 'required');
		$this->form_validation->set_rules('userEmail', 'User email', 'required|valid_email|callback_checkEmail');
		$this->form_validation->set_rules('userPassword', 'User password', 'required|min_length[4]');
		$this->form_validation->set_rules('userPasswordNew', 'User password new', 'required|matches[userPassword]');
		$this->form_validation->set_rules('userLevel', 'User level', 'required');
		if ($this->form_validation->run()) {
			if ($this->input->post()) {
				$userName 		= $this->input->post('userName');
				$userFullName 	= $this->input->post('userFullName');
				$userGender 	= $this->input->post('userGender');
				$userAddress 	= $this->input->post('userAddress');
				$userEmail 		= $this->input->post('userEmail');
				$userPassword 	= $this->input->post('userPassword');
				$userLevel 		= $this->input->post('userLevel');
				$data = array(
					'user_name' 	=> $userName,
					'user_full_name'=> $userFullName,
					'user_gender' 	=> $userGender,
					'user_address' 	=> $userAddress,
					'user_email' 	=> $userEmail,
					'user_password' => hash($userPassword),
					'user_level' 	=> $userLevel,
				);
				$this->user_model->insertUser($data);
				$this->session->set_flashdata('createSuccess', 'Create success!');
				redirect('users');
			}
		}
		$data['titlePage'] = '.: Create Page :.';
		$this->load->view('users/create', $data);
	} // end

	function checkEmail($userEmail) {
		$userId = $this->input->post('userId');
		if ($this->user_model->checkExistsEmail($userEmail, $userId) == FALSE) {
			$this->form_validation->set_message('checkEmail', 'Your Email has been registed, please try again!');
			return FALSE;
		}
		else {
			return TRUE;
		}
	} // end

	function login() {
		if ($this->user_model->checkLoggedIn() == FALSE) {
			if (!isset($_COOKIE['userEmail']) && !isset($_COOKIE['userPassword'])) {
				// Xu li kiem tra phan cookie de login vao.
				$this->form_validation->set_rules('userEmail', 'User email', 'required|valid_email');
				$this->form_validation->set_rules('userPassword', 'User password', 'required|min_length[4]');
				if ($this->form_validation->run()) {
					if ($this->input->post()) {
						$this->checkCookie();
					}
				}
				$data['titlePage'] = '.: Login Page :.';
				$this->load->view('users/login', $data);
			}else {
				$this->checkCookie();
			}
		} else {
			redirect('users');
		}
		
	} // end

	function checkCookie() {
		if ($this->user_model->checkLoggedIn() == FALSE) {
			$userEmail 		= $this->input->post('userEmail');
			$userPassword 	= $this->input->post('userPassword');
			$userPassword 	= MD5($userPassword);
		}
		else {
			$userEmail 		= $_COOKIE['userEmail'];
			$userPassword 	= $_COOKIE['userPassword'];
		}
		if ($this->user_model->checkLogin($userEmail, $userPassword)) {
			if ($this->input->post('rememberMe')) {
				setcookie('userEmail',$userEmail, time() + (3600));
				setcookie('userPassword',$userPassword, time() + (3600));
			}
			$this->session->set_flashdata('loginSuccess','Login success!s');
			redirect('users');
		}
		else {
			$this->session->set_flashdata('loginError', 'Invalid Username and Password');
		}
	} // end

	function logout() {
		$this->session->sess_destroy();
		if(isset($_COOKIE['userEmail']) && isset($_COOKIE['userPassword'])):
        	setcookie('userEmail', '', time() - (3600));
        	setcookie('userPassword', '', time() - (3600));
    	endif;
		redirect('login');
	} // end

	function detailsUser($userId) {
		if ($this->user_model->checkLoggedIn() == TRUE) {
			$data['result'] = $this->user_model->getUserById($userId);
			$this->load->view('users/details', $data);
		}
		else {
			redirect('login');
		}
	}

}
