
<style>
/*Dashboard scroll customise post services*/
#service_scroll{
  overflow-y: scroll; 
    height: 300px !important;  
    
}    
/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
#service_scroll::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
#service_scroll::-webkit-scrollbar-thumb {
  background: #2379bd; 
}

/* Handle on hover */
#service_scroll::-webkit-scrollbar-thumb:hover {
  background: #2379bd; 
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
     /*`user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`, `location_office`, 
     `current_location`, `working_days`, `opening_time`, `close_time`, `business_desc`, `service_state`, `service_district`
     , `service_city`, `line_of_activity`, `awarded`, `mobile_no`, `email`, `account_type`, `sub_type`, `verify_otp`, 
     `login_time`SELECT * FROM `users`*/
    $qre=mysqli_query($conn,"SELECT * FROM users where user_id='$session_user_id'");
    if($fetch=mysqli_fetch_array($qre))
    {
        $header_full_name=substr($fetch['full_name'],0,strpos($fetch['full_name'], ' '));
        $user_id=$fetch['user_id'];
        $header_account_type=$fetch['account_type'];
        $header_sub_type=$fetch['sub_type'];
        if($header_sub_type=="")
            $header_sub_type=$header_account_type;
        $header_profile_picture=$fetch['profile_picture'];
    }
    ?>
  <!-- START HEADER-->
        <header class="header">
            <div class="page-brand" style="background-color:#00a7f3;">
                <a class="link" href="index.html">
                    <span class="brand">Dashboard
                        <span class="brand-tip"></span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li class="header-name">
                        <h3><b>3 BIGHA</b></h3>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">

                <!-- START Notification TOOLBAR--> 
                <!--<li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>-->



                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <?php
                               if($header_profile_picture!="")
                                 {?>
                                      <img src="users_image/<?php echo $header_profile_picture;?>" />
                                 <?php 
                                 }
                                  else { ?>
                                          <img src="dashboard-source/assets/img/admin-avatar.png" />
                                    <?php
                                  }
                                  ?>
                            <span></span><?php echo $header_full_name;?>
                            
                            <i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-cog"></i>Settings</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="../user_logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar" style="background-color:#2379bd; position:fixed;">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                            <?php
                               if($header_profile_picture!="")
                                 {?>
                                    <div>
                                      <img src="users_image/<?php echo $header_profile_picture;?>" class="rounded-circle" width="45px"/>
                                      </div>
                                 <?php 
                                 }
                                  else { ?>
                                    <div>
                                        <img src="dashboard-source/assets/img/admin-avatar.png" width="45px" />
                                    </div>
                                <?php
                                }
                                ?>

                    <div class="admin-info">
                        <div class="font-strong"><?php echo $header_full_name;?></div><small><?php echo $header_sub_type;?></small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a  href="dashboard.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a  href="update_profile.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Update Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"class="text-light"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label"><?php echo $header_account_type;?></span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="users_view_upload_property.php"><?php echo $header_sub_type;?></a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a  href="../users_post_property_details.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Post Property</span>
                        </a>
                    </li>
                    <li>
                        <?php
                                   $post_service="default.php";
                                   if(strcasecmp($header_sub_type,'Broker')==0)
                                   $post_service="urep_broker.php";
                                
                                   else if(strcasecmp($header_sub_type,'Agent')==0)
                                   $post_service="urep_agent.php";
                                
                                   else if(strcasecmp($header_sub_type,'Owner')==0)
                                   $post_service="urep_owner.php";

                                   else if(strcasecmp($header_sub_type,'Builder / Promoter')==0)
                                   $post_service="urep_builder_promoter.php";


                                   else if(strcasecmp($header_sub_type,'Dealer')==0)
                                   $post_service="ubms_dealer.php";





                                   else if(strcasecmp($header_sub_type,'Architect')==0)
                                   $post_service="ubms_architect.php";

                                   else if(strcasecmp($header_sub_type,'Civil Engineer')==0)
                                   $post_service="ubms_civil_engineer.php";

                                   else if(strcasecmp($header_sub_type,'Meson / Laborers')==0)
                                   $post_service="ubms_meson_laborers.php";

                                   else if(strcasecmp($header_sub_type,'Carpenter')==0)
                                   $post_service="ubms_carpenter.php";

                                   else if(strcasecmp($header_sub_type,'Electrician')==0)
                                   $post_service="ubms_electrician.php";

                                   else if(strcasecmp($header_sub_type,'Plumber')==0)
                                   $post_service="ubms_plumber.php";

                                   else if(strcasecmp($header_sub_type,'Painter')==0)
                                   $post_service="ubms_painter.php";

                                   else if(strcasecmp($header_sub_type,'Interior Designer')==0)
                                   $post_service="ubms_interior_designer.php";

                                   else if(strcasecmp($header_sub_type,'Exterior Designer')==0)
                                   $post_service="ubms_exterior_designer.php";

                                   else if(strcasecmp($header_sub_type,'Tile Settar')==0)
                                   $post_service="ubms_tile_settar.php";

                                   else if(strcasecmp($header_sub_type,'Insulator')==0)
                                   $post_service="ubms_insulator.php";

                                   else if(strcasecmp($header_sub_type,'Framing Contractor')==0)
                                   $post_service="ubms_framing_contractor.php";

                                   else if(strcasecmp($header_sub_type,'Roofer')==0)
                                   $post_service="ubms_roofer.php";

                                   else if(strcasecmp($header_sub_type,'Cabinet Maker')==0)
                                   $post_service="ubms_cabinet_maker.php";

                                   else if(strcasecmp($header_sub_type,'Plasterer')==0)
                                   $post_service="ubms_plasterer.php";

                                   else if(strcasecmp($header_sub_type,'General Contractor')==0)
                                   $post_service="ubms_general_contractor.php";

                                   else if(strcasecmp($header_sub_type,'Advocate / Solicitor')==0)
                                   $post_service="uls_lawyer.php";

                                   else if(strcasecmp($header_sub_type,'Surveyor / Amin')==0)
                                   $post_service="uls_surveyor.php";

                                   else if(strcasecmp($header_sub_type,'Valuer')==0)
                                   $post_service="uls_valuer.php";

                                   else if(strcasecmp($header_sub_type,'Others')==0)
                                   $post_service="ubms_others.php";
                                   else if(strcasecmp($header_sub_type,'Building Material Supplier')==0)
                                   $post_service="ubm_supplier.php";
                            ?>

                        <a  href="<?php echo $post_service;?>" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Post Your Service</span>
                        </a>
                    </li>
                    <li>
                        <a  href="uers_services.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Equipments Rental Service</span>
                        </a>
                    </li>
                    <li>
                        <a  href="ubm_supplier.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Building Material Supplier</span>
                        </a>
                    </li>


                            <li> 
                            <a href="javascript:;"class="text-light"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Post Others Services</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse" id="service_scroll">
                                    <li>
                                        <a href="uls_lawyer.php">Advocate / Solicitor</a>
                                    </li>
                                    <li>
                                        <a href="ubms_architect.php">Architect</a>
                                    </li>
                                    <li>
                                        <a href="ubms_cabinet_maker.php">Cabinet Maker</a>
                                    </li>
                                    <li>
                                        <a href="ubms_carpenter.php">Carpenter</a>
                                    </li>
                                    <li>
                                        <a href="ubms_civil_engineer.php">Civil Engineer</a>
                                    </li>
                                    <li>
                                        <a href="ubms_electrician.php">Electrician</a>
                                    </li>
                                    
                                    <li>
                                        <a href="ubms_exterior_designer.php">Exterior Designer</a>
                                    </li>
                                    <li>
                                        <a href="ubms_framing_contractor.php">Framing Contractor</a>
                                    </li>
                                    <li>
                                        <a href="ubms_general_contractor.php">General Contractor</a>
                                    </li>
                                    <li>
                                        <a href="ubms_insulator.php">Insulator</a>
                                    </li>
                                    <li>
                                        <a href="ubms_interior_designer.php">Interior Designer</a>
                                    </li>
                                    <li>
                                        <a href="ubms_meson_laborers.php">Meson / Laborers</a>
                                    </li>
                                    <li>
                                        <a href="ubms_painter.php">Painter</a>
                                    </li>
                                    <li>
                                        <a href="ubms_plasterer.php">Plasterer</a>
                                    </li>
                                    <li>
                                        <a href="ubms_plumber.php">Plumber</a>
                                    </li>
                                    <li>
                                        <a href="ubms_roofer.php">Roofer</a>
                                    </li>
                                    <li>
                                        <a href="uls_surveyor.php">Surveyor / Amin</a>
                                    </li>
                                    <li>
                                        <a href="ubms_tile_settar.php">Tile Settar</a>
                                    </li>
                                    <li>
                                        <a href="uls_valuer.php">Valuer</a>
                                    </li>
                                </ul>
                            </li>

<!--
                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Building Making</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="architech_engineers.php">Architect / Engineer</a>
                                    </li>
                                    <li>
                                        <a href="">Electrician</a>
                                    </li>
                                    <li>
                                        <a href="">Carpenter</a>
                                    </li>
                                    <li>
                                        <a href="">Plumber</a>
                                    </li>
                                    <li>
                                        <a href="">Painter</a>
                                    </li>
                                    <li>
                                        <a href="">Interior Designer</a>
                                    </li>
                                    <li>
                                        <a href="">Exterior Designer</a>
                                    </li>
                                    <li>
                                        <a href="">Tile Setter</a>
                                    </li>
                                    <li>
                                        <a href="">Insulator</a>
                                    </li>
                                    <li>
                                        <a href="">Framing Contractor</a>
                                    </li>
                                    <li>
                                        <a href="">Roofer</a>
                                    </li>
                                    <li>
                                        <a href="">Cabinet Maker</a>
                                    </li>
                                    <li>
                                        <a href="">Plasterer</a>
                                    </li>
                                    <li>
                                        <a href="">General Contractor</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="rental_services.php">
                                    <span class="nav-label">Rental Services</span>
                                </a>
                            </li>

                            <li>
                                <a href="building_material_supplier.php">
                                    <span class="nav-label">Building Material Supplier</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:;">
                                    <span class="nav-label">Legal Services</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="">Lawyer</a>
                                    </li>
                                    <li>
                                        <a href="">Surveyor</a>
                                    </li>
                                    <li>
                                        <a href="">Valuer</a>
                                    </li>
                                </ul>
                            </li>
                            

                        </ul>
                    </li>
-->
                    <li>
                        <a href="../user_logout.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-sign-out"></i>
                            <span class="nav-label">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->