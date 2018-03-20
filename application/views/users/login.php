<?php $this->load->view('users/header'); ?>
	<div id="form_login" class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
		<h4>Login info</h4>
		<form action="<?php echo base_url() ?>login" method="post" name="userForm">
			<?php $loginErr = $this->session->flashdata('loginError');
                if($loginErr !='') { echo '<p class="alert alert-danger">'.$loginErr.'</p>'; } else { echo '';} ?>
			<?php $loggout = $this->session->flashdata('loggoutSuccess');
                if($loggout !='') { echo '<p class="alert alert-success">'.$loggout.'</p>'; } else { echo '';} ?>
            <?php $create = $this->session->flashdata('createSuccess');
                if($create !='') { echo '<p class="alert alert-success">'.$create.'</p>'; } else { echo '';} ?>

			<span class="text-danger"><?php echo form_error('userEmail'); ?></span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" id="email" name="userEmail" placeholder="Address email" value="<?php echo set_value('userEmail'); ?>" required/>
			</div>

		  	<span class="text-danger"><?php echo form_error('userPassword'); ?></span>
			<div class="form-group input-group">
		    	<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
		    	<input type="password" class="form-control" id="passWord" name="userPassword" placeholder="Password" value="<?php echo set_value('userPassword'); ?>" required/>
		  	</div>
		  	<div class="checkbox">
		    	<label>
		    		<input type="checkbox" name="rememberMe">Remember me
		    	</label>
		  	</div>
		  	<button type="submit" class="btn btn-primary" name="loginAction">Login</button>
		  	<!-- <a href="<?php echo base_url() ?>user/create" title="Creare" class="btn btn-success btn_style_right">Create user</a> -->
		</form>
	</div>
	<!-- /.formLogin -->

<?php $this->load->view('users/footer'); ?>