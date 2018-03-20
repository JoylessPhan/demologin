<?php $this->load->view('users/header'); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ">
                Welcome: <?php echo $this->session->userdata('user_full_name'); ?>
            </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Loggout</a></li>
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="">List Admin</a></li>
                            <li><a href="">List Member</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <?php $edit = $this->session->flashdata('editSuccess');
                    if($edit !='') { echo '<p class="alert alert-success">'.$edit.'</p>'; } else { echo '';} ?>
                    <?php $create = $this->session->flashdata('createSuccess');
                    if($create !='') { echo '<p class="alert alert-success">'.$create.'</p>'; } else { echo '';} ?>
                    <?php $remove = $this->session->flashdata('removeSuccess');
                    if($remove !='') { echo '<p class="alert alert-success">'.$remove.'</p>'; } else { echo '';} ?>
                    <?php $permiss = $this->session->flashdata('permission');
                    if($permiss !='') { echo '<p class="alert alert-danger">'.$permiss.'</p>'; } else { echo '';} ?>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="fa fa-bar-chart-o fa-fw"></div> List Users
                        <!-- <div class="pull-left sidebar-search col-sm-4">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </div> -->
                        <div class="pull-right">
                            <div class="btn-group">
                                <?php $permission = $this->session->userdata('user_level');
                                    if ($permission == 1): ?>
                                        <a href="<?php base_url() ?>user/create" title="Thêm mới.">
                                            <button type="button" class="btn btn-success btn-xs" data-toggle=""> Create</button>
                                        </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Full name</th>
                                                <!-- <th>Avata</th> -->
                                                <th>Gender</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $stt=1;
                                            foreach ($result as $value) { ?>
                                            <tr>
                                                <td class="td_middle"><?php echo $stt++; ?></td>
                                                <td><?php echo $value['user_full_name']; ?></td>
                                                <!-- <td><?php echo $value['user_avata']; ?></td> -->
                                                <td><?php if ($value['user_gender']==0) { echo 'Male';} else { echo 'Female';} ?></td>
                                                <td><?php echo $value['user_address']; ?></td>
                                                <td><?php echo $value['user_email']; ?></td>
                                                <td><?php if($value['user_level'] ==1){ echo "Admin";} else { echo "Member"; } ?></td>
                                                <td class="td_middle">
                                                    <button href="<?php echo base_url()?>user/details/<?php echo $value['user_id'] ?>" class="btn btn-info btn-sm show_detail" >Details</button>
                                                    <?php
                                                        $userId     = $this->input->post('user_id');
                                                        $userSessId = $this->session->userdata('user_id');
                                                        $permission = $this->session->userdata('user_level');
                                                          if ($permission == 1) { ?>
                                                            <a href="<?php echo base_url()?>user/edit/<?php echo $value['user_id'] ?>" title="Edit"><button class="btn btn-warning btn-sm">Edit</button></a>
                                                            <button href="#" data-id="<?php echo $value['user_id'] ?>" class="btn btn-danger btn-sm btn_delete" > Delete</button>
                                                    <?php } ?>

                                                    <!-- data-toggle="modal" data-target="#deleteUser"  -->
                                                </td>
                                           </tr>
                                        <?php }; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-lg-8">
                                <div id="morris-bar-chart"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                        <button class="btn btn-basic"><?php echo 'All User: ' . count($result); ?></button>
                        <!-- Details user -->
                        <div class="modal fade" id="detailsUser" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times fa-red" aria-hidden="true"></i></button>
                                        <h4 class="modal-title modal_style_title">Details Infomation </h4>
                                    </div>
                                    <div class="modal-body detail_content">
                                        <!-- Load content to view/detail -->
                                    </div>
                                    <!-- <div class="modal-footer"> -->
                                        <!-- <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.end details user -->

                        <!-- Edit user -->
                        <div class="modal fade" id="editUser" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title modal_style_title">Edit Infomation </h4>
                                    </div>
                                    <div class="modal-body edit_content">
                                        <!-- Load content to view/detail -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.end edit user -->

                        <!-- Delete user -->
                        <div class="modal fade" id="deleteUser" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title modal_style_title">Are you sure for delete this user </h4>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="<?php echo base_url() ?>user/removeUser/" method="post">
                                            <input type="hidden" name="userId" class="user_id_delete">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.end delete user -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

<?php $this->load->view('users/footer'); ?>

<script type="text/javascript" >

</script>