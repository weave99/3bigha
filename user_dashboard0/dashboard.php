<?php
include_once("../db/conn.php");
require_once("../db/user_sequre.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="dashboard-source/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dashboard-source/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="dashboard-source/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="dashboard-source/assets/css/main.min.css" rel="stylesheet" />
    <link href="dashboard-source/assets/css/dashboard.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

<!-- Nav header side =========================================-->
            <?php include 'dashboard_header.php'; ?>
<!-- Nav header side =========================================-->


<!--=====================================-->
        <div class="content-wrapper">
<!--=====================================-->






<!--=========== Start Indigator Bar===============================-->
            <div class="row pt-2 text-center" style="background-color:#00a7f3; color:#fff; font-width:700;">
                <div class="col-lg-12">
                   <h4> DASHBOARD </h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->









<!--=========== START PAGE CONTENT======================================================================-->
<?php 
      //`user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`, `location_office`, 
      //`current_location`, `working_days`, `opening_time`, `close_time`, `business_desc`, `service_state`, 
      //`service_district`, `service_city`, `line_of_activity`, `awarded`, `mobile_no`, `email`, `account_type`, 
      //`real_estate_type`, `building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * 
      //FROM `users` WHERE 1
    $qre=mysqli_query($conn,"SELECT * FROM users where user_id=$session_user_id");
    if($fetch=mysqli_fetch_array($qre))
    {
    ?>

            <div class="page-content fade-in-up">
                <div class="row">
                    <!--
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="user_image/testimonial-2.jpg"/>
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">Jon</h5>
                                <div class="m-b-20 text-muted">Employee</div>
                            </div>
                        </div>
                    </div>
                    -->

                    
                    <div class="col-lg-12 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                            <?php
                                    if (isset($_GET["msg"])) {
                                    $msg = $_GET["msg"];
                                    
                                    echo'
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>'. $msg . '</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                    ?>
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                    <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user"></i> Personal Details</h5>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row m-b-5">
                                                    <div class="col-lg-2">

                                                    <?php
                                                        $profile_picture=$fetch['profile_picture'];
                                                    if($profile_picture!="")
                                                    {?>
                                                         <img class="rounded-circle" src="users_image/<?php echo $profile_picture; ?>" width="100%" alt="">
                                                         <?php 
                                                    }
                                                    else { ?>
                                                        <img src="dashboard-source/assets/img/admin-avatar.png" width="100%" alt="">
                                                    
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div>
                                                            <div class="h4 mt-4"><b> Name : <?php echo $fetch['full_name']; ?></b></div>
                                                            <div class="h5">Email : <?php echo $fetch['email']; ?></div>
                                                            <div class="h5">Mobile No. : <?php echo $fetch['mobile_no']; ?></div>
                                                            <div class="h5">Account Type : <?php echo $fetch['account_type']." / ".$fetch['sub_type']; ?></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-4">
                                                    <ul class="list-group list-group-full list-group-divider">
                                                        <li class="list-group-item"><b>Business Name :</b>  <?php echo $fetch['business_name']; ?></li>
                                                        <li class="list-group-item"><b>State :</b> <?php echo $fetch['state']; ?></li>
                                                        <li class="list-group-item"><b>District :</b> <?php echo $fetch['district']; ?></li>
                                                        <li class="list-group-item"><b>City :</b> <?php echo $fetch['city']; ?> </li>
                                                        <li class="list-group-item"><b>Location of the Office / House :</b> <?php echo $fetch['location_office']; ?></li>
                                                        <li class="list-group-item"><b>Current Location :</b> <?php echo $fetch['current_location']; ?></li>
                                                        <li class="list-group-item"><b>Working Days :</b> <?php echo $fetch['working_days']; ?></li>
                                                        <li class="list-group-item"><b>Opening Time :</b> <?php echo $fetch['opening_time']; ?></li>
                                                        <li class="list-group-item"><b>Close Time :</b> <?php echo $fetch['close_time']; ?></li>
                                                        <li class="list-group-item"><b>Business Description :</b> <?php echo $fetch['business_desc']; ?></li>

                                                    
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mt-4">
                                                    <ul class="list-group list-group-full list-group-divider">
                                                        <li class="list-group-item"><h4><b>Service</b></h4> </li>
                                                        <li class="list-group-item"><b>State :</b> <?php echo $fetch['service_state']; ?></li>
                                                        <li class="list-group-item"><b>District :</b> <?php echo $fetch['service_district']; ?></li>
                                                        <li class="list-group-item"><b>City :</b> <?php echo $fetch['service_city']; ?></li>
                                                        <li class="list-group-item"><b>Exprience in the line of activity :</b> <?php echo $fetch['line_of_activity']; ?></li>
                                                        <li class="list-group-item"><b>Have you ever been awarded ? :</b> <?php echo $fetch['awarded']; ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php 
    }
    ?>





<!--=========== End PAGE CONTENT======================================================================-->








<!-- Nav header side =========================================-->
        <?php include 'dashboard_footer.php'; ?>
<!-- Nav header side =========================================-->
<!--=====================================-->
        </div>
    </div>
<!--=====================================-->

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="dashboard-source/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="dashboard-source/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="dashboard-source/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="dashboard-source/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
</body>

</html>