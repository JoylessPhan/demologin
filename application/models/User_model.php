<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model { 

	public $table = 'users';

	function __construct() { 
		parent::__construct();
	}

	// Get row
	function getUserRow() { 
		$query = $this->db->get($this->table)->row_array();
		return $query;
	} // end

	// Get all list
	function getUserList() { 
		$query = $this->db->get($this->table)->result_array();
		return $query;
	} // end

	function getUserById($userId) { 
		$this->db->where('user_id', $userId);
		$query = $this->db->get($this->table)->row_array();
		return $query;
	} // end

	function updateUser($data, $userId) { 
		$this->db->where('user_id', $userId);
		$query = $this->db->update($this->table, $data);
		return $query;
	} // end

	function deleteUser($userId) { 
		$this->db->where('user_id', $userId);
		$query = $this->db->delete($this->table);
		return $query;
	} // end

	function insertUser($data) { 
		$query = $this->db->insert($this->table, $data);
		return $query;
	} // end

	// function checkExistsName($userName) { 
	// 	$where = array('user_name', $userName);
	// 	$this->db->where($where);
	// 	$query = $this->db->get($this->table);
	// 	if ($query->num_rows() > 0) {
	// 		return FALSE;
	// 	}
	// 	else {
	// 		return TRUE;
	// 	}
	// } // end.

	function checkExistsEmail($userEmail, $userId) {
		$where = array('user_email'=>$userEmail, 'user_id !='=>$userId);
		$this->db->where($where);
		$query = $this->db->get($this->table);
		if ($query->num_rows() > 0) {
			return FALSE;
		}
		else {
			return TRUE;
		}
	} // end

	function checkLogin($userEmail, $userPassword) { 
		$where = array('user_email'=>$userEmail, 'user_password'=>$userPassword);
		$this->db->where($where);
		$query 	= $this->db->get($this->table);
		$result = $query->row_array();
		if ($query->num_rows() > 0) {
			$sessionData = array(
				'user_id'  			=> $result['user_id'],
				'user_name'  		=> $result['user_name'],
				'user_full_name'  	=> $result['user_full_name'],
				'user_email' 		=> $result['user_email'],
				'user_level' 		=> $result['user_level'],
			);
			$checkSess = $this->session->set_userdata($sessionData);
			return TRUE;
		}
		else {
			return FALSE;
		}
	} // end

	function checkLoggedIn() {
		if ($this->session->has_userdata('user_name')) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	} // end

	function countAll() {
		return $this->db->count_all($this->table);
	}


}
