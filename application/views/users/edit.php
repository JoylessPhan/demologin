<?php $this->load->view('users/header'); ?>

	<!-- formLogin -->
	<div id="form_edit" class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
		<h4 class="modal_style_title">Edit infomation user</h4>
	    <div class="modal_style_image">
	      <img src="/asset/images/user.png" alt="Avata">
	    </div>
	    <form action="" method="post" id="userDetailForm">
	      <div class="form-group input-group">
	        <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
	        <input type="int" class="form-control" id="userDetailId" name="userId" value="<?php echo $result['user_id']; ?>" />
	      </div>
			<span class="text-danger"><?php echo form_error('userName'); ?></span>
	    	<div class="form-group input-group">
	    		<span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
	        	<input type="text" class="form-control" id="userDetailName" name="userName" value="<?php echo $result['user_name']; ?>" />
	    	</div>
	    	<span class="text-danger"><?php echo form_error('userFullName'); ?></span>
	    	<div class="form-group input-group">
	        	<span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
	        	<input type="text" class="form-control" id="userDetailFullName" name="userFullName" value="<?php echo $result['user_full_name']; ?>" />
	    	</div>
	    	<span class="text-danger"><?php echo form_error('userGender'); ?></span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
				<div class="form-control">
				Male
					<input type="radio" name="userGender" <?php if ($result['user_gender'] == '0') echo 'checked'; ?> value="0">
				&nbsp;
				Female
					<input type="radio" name="userGender" <?php if ($result['user_gender'] == '1') echo 'checked'; ?> value="1">
				</div>
			</div>
			<span class="text-danger"><?php echo form_error('userAddress'); ?></span>
	    	<div class="form-group input-group">
	        	<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<select name="userAddress" class="formSelect" required>
		    		<option <?php if ($result['user_address'] == 'An Giang') echo 'selected'; ?> value="An Giang" > An Giang</option>
		    		<option <?php if ($result['user_address'] == 'Bà Rịa - Vũng Tàu') echo 'selected'; ?> value="Bà Rịa - Vũng Tàu"> Bà Rịa - Vũng Tàu</option>
		    		<option <?php if ($result['user_address'] == 'Bắc Giang') echo 'selected'; ?> value="Bắc Giang">Bắc Giang</option>
		    		<option <?php if ($result['user_address'] == 'Bắc Kạn') echo 'selected'; ?> value="Bắc Kạn">Bắc Kạn</option>
		    		<option <?php if ($result['user_address'] == 'Bạc Liêu') echo 'selected'; ?> value="Bạc Liêu">Bạc Liêu</option>
		    		<option <?php if ($result['user_address'] == 'Bắc Ninh') echo 'selected'; ?> value="Bắc Ninh">Bắc Ninh</option>
		    		<option <?php if ($result['user_address'] == 'Bến Tre') echo 'selected'; ?> value="Bến Tre">Bến Tre</option>
		    		<option <?php if ($result['user_address'] == 'Bình Định') echo 'selected'; ?> value="Bình Định">Bình Định</option>
		    		<option <?php if ($result['user_address'] == 'Bình Dương') echo 'selected'; ?> value="Bình Dương">Bình Dương</option>
		    		<option <?php if ($result['user_address'] == 'Bình Phước') echo 'selected'; ?> value="Bình Phước">Bình Phước</option>
		    		<option <?php if ($result['user_address'] == 'Bình Thuận') echo 'selected'; ?> value="Bình Thuận">Bình Thuận</option>
		    		<option <?php if ($result['user_address'] == 'Cà Mau') echo 'selected'; ?> value="Cà Mau">Cà Mau</option>
		    		<option <?php if ($result['user_address'] == 'Đắk Lắk') echo 'selected'; ?> value="Đắk Lắk">Đắk Lắk</option>
		    		<option <?php if ($result['user_address'] == 'Đắk Nông') echo 'selected'; ?> value="Đắk Nông">Đắk Nông</option>
		    		<option <?php if ($result['user_address'] == 'Điện Biên') echo 'selected'; ?> value="Điện Biên">Điện Biên</option>
		    		<option <?php if ($result['user_address'] == 'Đồng Nai') echo 'selected'; ?> value="Đồng Nai">Đồng Nai</option>
		    		<option <?php if ($result['user_address'] == 'Đồng Tháp') echo 'selected'; ?> value="Đồng Tháp">Đồng Tháp</option>
		    		<option <?php if ($result['user_address'] == 'Gia Lai') echo 'selected'; ?> value="Gia Lai">Gia Lai</option>
		    		<option  <?php if ($result['user_address'] == 'Hà Giang') echo 'selected'; ?>value="Hà Giang">Hà Giang</option>
		    		<option <?php if ($result['user_address'] == 'Hà Nam') echo 'selected'; ?> value="Hà Nam">Hà Nam</option>
		    		<option <?php if ($result['user_address'] == 'Hà Tĩnh') echo 'selected'; ?> value="Hà Tĩnh">Hà Tĩnh</option>
		    		<option <?php if ($result['user_address'] == 'Hải Dương') echo 'selected'; ?> value="Hải Dương">Hải Dương</option>
		    		<option <?php if ($result['user_address'] == 'Hậu Giang') echo 'selected'; ?> value="Hậu Giang">Hậu Giang</option>
		    		<option <?php if ($result['user_address'] == 'Hòa Bình') echo 'selected'; ?> value="Hòa Bình">Hòa Bình</option>
		    		<option <?php if ($result['user_address'] == 'Hưng Yên') echo 'selected'; ?> value="Hưng Yên">Hưng Yên</option>
		    		<option <?php if ($result['user_address'] == 'Khánh Hòa') echo 'selected'; ?> value="Khánh Hòa">Khánh Hòa</option>
		    		<option <?php if ($result['user_address'] == 'Kiên Giang') echo 'selected'; ?> value="Kiên Giang">Kiên Giang</option>
		    		<option <?php if ($result['user_address'] == 'Kon Tum') echo 'selected'; ?> value="Kon Tum">Kon Tum</option>
		    		<option <?php if ($result['user_address'] == 'Lai Châu') echo 'selected'; ?> value="Lai Châu">Lai Châu</option>
		    		<option <?php if ($result['user_address'] == 'Lâm Đồng') echo 'selected'; ?> value="Lâm Đồng">Lâm Đồng</option>
		    		<option <?php if ($result['user_address'] == 'Lạng Sơn') echo 'selected'; ?> value="Lạng Sơn">Lạng Sơn</option>
		    		<option <?php if ($result['user_address'] == 'Lào Cai') echo 'selected'; ?> value="Lào Cai">Lào Cai</option>
		    		<option <?php if ($result['user_address'] == 'Long An') echo 'selected'; ?> value="Long An">Long An</option>
		    		<option <?php if ($result['user_address'] == 'Nam Định') echo 'selected'; ?> value="Nam Định">Nam Định</option>
		    		<option <?php if ($result['user_address'] == 'Nghệ An') echo 'selected'; ?> value="Nghệ An">Nghệ An</option>
		    		<option <?php if ($result['user_address'] == 'Ninh Bình') echo 'selected'; ?> value="Ninh Bình">Ninh Bình</option>
		    		<option <?php if ($result['user_address'] == 'Ninh Thuận') echo 'selected'; ?> value="Ninh Thuận">Ninh Thuận</option>
		    		<option <?php if ($result['user_address'] == 'Phú Thọ') echo 'selected'; ?> value="Phú Thọ">Phú Thọ</option>
		    		<option <?php if ($result['user_address'] == 'Quảng Bình') echo 'selected'; ?> value="Quảng Bình">Quảng Bình</option>
		    		<option <?php if ($result['user_address'] == 'Quảng Nam') echo 'selected'; ?> value="Quảng Nam">Quảng Nam</option>
		    		<option <?php if ($result['user_address'] == 'Quảng Ngãi') echo 'selected'; ?> value="Quảng Ngãi">Quảng Ngãi</option>
		    		<option <?php if ($result['user_address'] == 'Quảng Ninh') echo 'selected'; ?> value="Quảng Ninh">Quảng Ninh</option>
		    		<option <?php if ($result['user_address'] == 'Quảng Trị') echo 'selected'; ?> value="Quảng Trị">Quảng Trị</option>
		    		<option <?php if ($result['user_address'] == 'Sóc Trăng') echo 'selected'; ?> value="Sóc Trăng">Sóc Trăng</option>
		    		<option <?php if ($result['user_address'] == 'Sơn La') echo 'selected'; ?> value="Sơn La">Sơn La</option>
		    		<option <?php if ($result['user_address'] == 'Tây Ninh') echo 'selected'; ?> value="Tây Ninh">Tây Ninh</option>
		    		<option <?php if ($result['user_address'] == 'Thái Bình') echo 'selected'; ?> value="Thái Bình">Thái Bình</option>
		    		<option <?php if ($result['user_address'] == 'Thái Bình') echo 'selected'; ?> value="Thái Nguyên">Thái Nguyên</option>
		    		<option <?php if ($result['user_address'] == 'Thanh Hóa') echo 'selected'; ?> value="Thanh Hóa">Thanh Hóa</option>
		    		<option <?php if ($result['user_address'] == 'Thừa Thiên Huế') echo 'selected'; ?> value="Thừa Thiên Huế">Thừa Thiên Huế</option>
		    		<option <?php if ($result['user_address'] == 'Tiền Giang') echo 'selected'; ?> value="Tiền Giang">Tiền Giang</option>
		    		<option <?php if ($result['user_address'] == 'Trà Vinh') echo 'selected'; ?> value="Trà Vinh">Trà Vinh</option>
		    		<option <?php if ($result['user_address'] == 'Tuyên Quang') echo 'selected'; ?> value="Tuyên Quang">Tuyên Quang</option>
		    		<option <?php if ($result['user_address'] == 'Vĩnh Long') echo 'selected'; ?> value="Vĩnh Long">Vĩnh Long</option>
		    		<option <?php if ($result['user_address'] == 'Vĩnh Phúc') echo 'selected'; ?> value="Vĩnh Phúc">Vĩnh Phúc</option>
		    		<option <?php if ($result['user_address'] == 'Yên Bái') echo 'selected'; ?> value="Yên Bái">Yên Bái</option>
		    		<option <?php if ($result['user_address'] == 'Phú Yên') echo 'selected'; ?> value="Phú Yên">Phú Yên</option>
		    		<option <?php if ($result['user_address'] == 'Cần Thơ') echo 'selected'; ?> value="Cần Thơ">Cần Thơ</option>
		    		<option <?php if ($result['user_address'] == 'Đà Nẵng') echo 'selected'; ?> value="Đà Nẵng">Đà Nẵng</option>
		    		<option <?php if ($result['user_address'] == 'Hải Phòng') echo 'selected'; ?> value="Hải Phòng">Hải Phòng</option>
		    		<option <?php if ($result['user_address'] == 'Hà Nội') echo 'selected'; ?> value="Hà Nội">Hà Nội</option>
		    		<option <?php if ($result['user_address'] == 'TP HCM') echo 'selected'; ?> value="TP HCM">TP HCM</option>
		    	</select>
	    	</div>
	    	<span class="text-danger"><?php echo form_error('userEmail'); ?></span>
	    	<div class="form-group input-group">
	        	<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
	        	<input type="email" class="form-control" id="userDetailEmail" name="userEmail" value="<?php echo $result['user_email']; ?>" />
	    	</div>
	    	<span class="text-danger"><?php echo form_error('userLevel'); ?></span>
	    	<div class="form-group input-group">
	        	<span class="input-group-addon"><i class="fa fa-sliders"></i></span>
				<select name="userLevel" class="formSelect">
		    		<option <?php if ($result['user_level'] == '1') echo 'selected'; ?> value="1"> Admin</option>
		    		<option <?php if ($result['user_level'] == '0') echo 'selected'; ?> value="0"> Member</option>
		    	</select>
	    	</div>
	      <!-- <div class="form-group input-group">
	        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	        <input type="text" class="form-control" id="userDetailRegDate" name="userRegisterDate" value="<?php echo $result['user_regdate']; ?>" />
	      </div> -->
			<button type="submit" class="btn btn-success" name="updateAction">Edit</button>
		  	<a href="<?php echo base_url() ?>users" title="Login" class="btn btn-default btn_style_right">Back</a>
	    </form>

	</div>
	<!-- /.formLogin -->

<?php $this->load->view('users/footer') ?>