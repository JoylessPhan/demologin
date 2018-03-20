<?php $this->load->view('users/header'); ?>
	<!-- formLogin -->
	<div id="form_create" class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
		<h4 class="modal_style_title">Create Infomation User</h4>
		<form action="" method="post" id="userForm">
			<span class="text-danger"><?php echo form_error('userName'); ?></span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
				<input type="text" class="form-control" id="userName" name="userName" placeholder="Name" value="<?php echo set_value('userName'); ?>" required/>
			</div>
			<span class="text-danger"><?php echo form_error('userFullName'); ?>
			</span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
				<input type="text" class="form-control" id="userFullName" name="userFullName" placeholder="Full name" value="<?php echo set_value('userFullName'); ?>" required/>
			</div>
			<span class="text-danger"><?php echo form_error('userGender'); ?>
			</span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-transgender"></i></span>
				<div class="form-control">
				Male
					<input type="radio" checked="checked" name="userGender" value="0">
				</label>&nbsp;
				Female
					<input type="radio" name="userGender" value="1">
				</div>
			</div>
			<span class="text-danger"><?php echo form_error('userAddress'); ?></span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<!-- <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Address" value="<?php echo set_value('userEmail'); ?>" /> -->
				<select name="userAddress" class="formSelect" required>
					<option value="">-- City Selected --</option>
		    		<option value="An Giang" > An Giang</option>
		    		<option value="Bà Rịa - Vũng Tàu"> Bà Rịa - Vũng Tàu</option>
		    		<option value="Bắc Giang">Bắc Giang</option>
		    		<option value="Bắc Kạn">Bắc Kạn</option>
		    		<option value="Bạc Liêu">Bạc Liêu</option>
		    		<option value="Bắc Ninh">Bắc Ninh</option>
		    		<option value="Bến Tre">Bến Tre</option>
		    		<option value="Bình Định">Bình Định</option>
		    		<option value="Bình Dương">Bình Dương</option>
		    		<option value="Bình Phước">Bình Phước</option>
		    		<option value="Bình Thuận">Bình Thuận</option>
		    		<option value="Cà Mau">Cà Mau</option>
		    		<option value="Đắk Lắk">Đắk Lắk</option>
		    		<option value="Đắk Nông">Đắk Nông</option>
		    		<option value="Điện Biên">Điện Biên</option>
		    		<option value="Đồng Nai">Đồng Nai</option>
		    		<option value="Đồng Tháp">Đồng Tháp</option>
		    		<option value="Gia Lai">Gia Lai</option>
		    		<option value="Hà Giang">Hà Giang</option>
		    		<option value="Hà Nam">Hà Nam</option>
		    		<option value="Hà Tĩnh">Hà Tĩnh</option>
		    		<option value="Hải Dương">Hải Dương</option>
		    		<option value="Hậu Giang">Hậu Giang</option>
		    		<option value="Hòa Bình">Hòa Bình</option>
		    		<option value="Hưng Yên">Hưng Yên</option>
		    		<option value="Khánh Hòa">Khánh Hòa</option>
		    		<option value="Kiên Giang">Kiên Giang</option>
		    		<option value="Kon Tum">Kon Tum</option>
		    		<option value="Lai Châu">Lai Châu</option>
		    		<option value="Lâm Đồng">Lâm Đồng</option>
		    		<option value="Lạng Sơn">Lạng Sơn</option>
		    		<option value="Lào Cai">Lào Cai</option>
		    		<option value="Long An">Long An</option>
		    		<option value="Nam Định">Nam Định</option>
		    		<option value="Nghệ An">Nghệ An</option>
		    		<option value="Ninh Bình">Ninh Bình</option>
		    		<option value="Ninh Thuận">Ninh Thuận</option>
		    		<option value="Phú Thọ">Phú Thọ</option>
		    		<option value="Quảng Bình">Quảng Bình</option>
		    		<option value="Quảng Nam">Quảng Nam</option>
		    		<option value="Quảng Ngãi">Quảng Ngãi</option>
		    		<option value="Quảng Ninh">Quảng Ninh</option>
		    		<option value="Quảng Trị">Quảng Trị</option>
		    		<option value="Sóc Trăng">Sóc Trăng</option>
		    		<option value="Sơn La">Sơn La</option>
		    		<option value="Tây Ninh">Tây Ninh</option>
		    		<option value="Thái Bình">Thái Bình</option>
		    		<option value="Thái Nguyên">Thái Nguyên</option>
		    		<option value="Thanh Hóa">Thanh Hóa</option>
		    		<option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
		    		<option value="Tiền Giang">Tiền Giang</option>
		    		<option value="Trà Vinh">Trà Vinh</option>
		    		<option value="Tuyên Quang">Tuyên Quang</option>
		    		<option value="Vĩnh Long">Vĩnh Long</option>
		    		<option value="Vĩnh Phúc">Vĩnh Phúc</option>
		    		<option value="Yên Bái">Yên Bái</option>
		    		<option value="Phú Yên">Phú Yên</option>
		    		<option value="Cần Thơ">Cần Thơ</option>
		    		<option value="Đà Nẵng">Đà Nẵng</option>
		    		<option value="Hải Phòng">Hải Phòng</option>
		    		<option value="Hà Nội">Hà Nội</option>
		    		<option value="TP HCM">TP HCM</option>
		    	</select>
			</div>
			<span class="text-danger"><?php echo form_error('userEmail'); ?></span>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
				<input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" value="<?php echo set_value('userEmail'); ?>" required/>
			</div>
			<span class="text-danger"><?php echo form_error('userPassword'); ?></span>
			<div class="form-group input-group">
		    	<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
		    	<input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password" value="<?php echo set_value('userPassword') ?>" required/>
		  	</div>
		  	<span class="text-danger"><?php echo form_error('userPasswordNew'); ?></span>
			<div class="form-group input-group">
		    	<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
		    	<input type="password" class="form-control" id="userPasswordNew" name="userPasswordNew" placeholder="Re password" value="<?php echo set_value('userPasswordNew') ?>" required/>
		  	</div>
		  	<span class="text-danger"><?php echo form_error('userLevel'); ?></span>
			<div class="form-group input-group">
		    	<span class="input-group-addon"><i class="fa fa-sliders"></i></span>
		    	<!-- <div class="form-control"> -->
			    	<select name="userLevel" class="formSelect">
			    		<!-- <option value="">-- Select --</option> -->
			    		<option value="1" > Admin </option>
			    		<option value="0" selected="selected"> Member </option>
			    	</select>
			    <!-- </div> -->
		  	</div>
		  	<button type="submit" class="btn btn-success" name="registerAction">Create</button>
		  	<a href="<?php echo base_url() ?>users" title="Login" class="btn btn-default btn_style_right">Back</a>
		</form>
	</div>
	<!-- /.formLogin -->
<?php $this->load->view('users/footer') ?>