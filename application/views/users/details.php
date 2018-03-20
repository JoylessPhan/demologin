
  <div id="" class="">
    <div class="modal_style_image">
      <!-- <?php if ($result['user_gender'] =='0') {
        echo '<img src="<?php base_url() ?>" alt="Avata male">';
      } else {
        echo '<img src="<?php base_url() ?>asset/images/user_famale.jpeg" alt="Avata">';
      } ?> -->
      <img src="<?php base_url() ?>asset/images/user.png" alt="Avata">
    </div>
    <form action="" method="post" id="userDetailForm">
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
        <input type="int" class="form-control" id="userDetailId" name="userId" value="<?php echo $result['user_id']; ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
        <input type="text" class="form-control" id="userDetailName" name="userName" value="<?php echo $result['user_name']; ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
        <input type="text" class="form-control" id="userDetailFullName" name="userFullName" value="<?php echo $result['user_full_name']; ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-transgender"></i></span>
        <input type="text" class="form-control" id="userDetailGender" name="userGender"
          value="<?php if ($result['user_gender'] == 0) { echo 'Male';} else { echo 'Female';} ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
        <input type="text" class="form-control" id="userDetailAddress" name="userAddress" value="<?php echo $result['user_address']; ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
        <input type="email" class="form-control" id="userDetailEmail" name="userEmail" value="<?php echo $result['user_email']; ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-sliders"></i></span>
        <input type="text" class="form-control" id="userDetailLevel" name="userLevel"
          value="<?php if ($result['user_level'] == 0) { echo 'Member';} else { echo 'Admin';} ?>" disabled/>
      </div>
      <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        <input type="text" class="form-control" id="userDetailRegDate" name="userRegisterDate" value="<?php echo $result['user_regdate']; ?>" disabled/>
      </div>
    </form>
  </div>
