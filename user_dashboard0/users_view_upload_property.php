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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
                   <h4>Property Submission</h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->

<!--=========== START PAGE CONTENT======================================================================-->




<div class="page-content fade-in-up">

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <a href="live_property.php">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">
                        <?php 
                        //`order_id`, `trans_no`, `trans_date`, `amount`, `user_id`, `txn_status`, `clnt_txn_ref`, `shipping_name`, `shipping_street`, `shipping_city`, `shipping_state_country`, `shipping_pin_code`, `shipping_mobile`, `shipping_email` 
                        //SELECT * FROM `customer_order` WHERE 1
                        $live_property_sql = "SELECT * FROM users_post_property_details where live_status='1' AND user_id=$session_user_id";
                        $live_property_result = mysqli_query($conn, $live_property_sql); 
                        // Return the number of rows in result set
                        $live_property_rowcount = mysqli_num_rows( $live_property_result );
                        //	Display result
                        printf("%d\n", $live_property_rowcount);
                        ?>
                    </h2>
                    <div class="m-b-5">LIVE PROPERTY</div><i class="widget-stat-icon"><img src="dashboard-source/assets/img/world-upload.svg" width="50%" alt=""></i> 
                </div>
            </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <a href="rejected_property.php">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">
                        <?php 
                        //`order_id`, `trans_no`, `trans_date`, `amount`, `user_id`, `txn_status`, `clnt_txn_ref`, `shipping_name`, `shipping_street`, `shipping_city`, `shipping_state_country`, `shipping_pin_code`, `shipping_mobile`, `shipping_email` 
                        //SELECT * FROM `customer_order` WHERE 1
                        $reject_status_sql = "SELECT * FROM users_post_property_details where reject_status='1' AND user_id=$session_user_id";
                        $reject_status_result = mysqli_query($conn, $reject_status_sql); 
                        // Return the number of rows in result set
                        $reject_status_rowcount = mysqli_num_rows( $reject_status_result );
                        //	Display result
                        printf("%d\n", $reject_status_rowcount);
                        ?>
                    </h2>
                    <div class="m-b-5">REJECTED PROPERTY</div><i class="widget-stat-icon"><img src="dashboard-source/assets/img/download.svg" width="50%" alt=""></i> 
                    
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="under_review_property.php">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">
                        <?php 
                        //`order_id`, `trans_no`, `trans_date`, `amount`, `user_id`, `txn_status`, `clnt_txn_ref`, `shipping_name`, `shipping_street`, `shipping_city`, `shipping_state_country`, `shipping_pin_code`, `shipping_mobile`, `shipping_email` 
                        //SELECT * FROM `customer_order` WHERE 1
                        $under_review_sql = "SELECT * FROM users_post_property_details where under_review='0' and user_id='$session_user_id' ";
                        $under_review_result = mysqli_query($conn, $under_review_sql); 
                        // Return the number of rows in result set
                        $under_review_rowcount = mysqli_num_rows( $under_review_result );
                        //	Display result
                        printf("%d\n", $under_review_rowcount);
                        ?>
                    </h2>
                    <div class="m-b-5">UNDER REVIEW</div><i class="widget-stat-icon"><img src="dashboard-source/assets/img/download.svg" width="50%" alt=""></i> 
                    
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Under Review Property</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="91px">Post Date</th>
                                <th>User</th>
                                <th>Property List</th>
                                <th>Prperty Type</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        //`post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, 
                        //`property_city`, `property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, 
                        //`plot_lenght`, `plot_lenght_unity`, `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, 
                        //`prossession_by`, `layout_sketch_map`, `property_image_1`, `property_image_2`, `property_video`, `property_location_link`,
                        //`property_current_location`, `property_ownership`, `property_approved_by`, `expected_price`, `price_per_unit`, 
                        //`all_inclusive_price_yn`, `tax_govt_charges_yn`, `price_negotiable_yn`, `about_property`, `maintenance_staff_yn`, 
                        //`water_storage_yn`, `running_water_facility_yn`, `rain_water_harvesting_yn`, `feng_shui_vaastu_complaint_yn`, 
                        //`proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`, `overlooking_pool_yn`, `overlooking_club_yn`, 
                        //`overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, `property_gated_society_name`, 
                        //`property_facing`, `corner_property_yn`, `suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`, 
                        //`no_of_installment`, `installment_amount_month`, `reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, 
                        //`others_terms_conditions`, `hot_offer`, `under_construction_yn`, `sold_out_yn`, `submit_status`, `under_review` 
                        //SELECT * FROM `users_post_property_details` WHERE 1
                        $post_property_sql="SELECT * FROM users_post_property_details where under_review='0' and user_id='$session_user_id' order by post_date desc";
                        $post_property_query=mysqli_query($conn,$post_property_sql);
                        while($post_property_details=mysqli_fetch_array($post_property_query)) 
                        { 
                            $under_review=$post_property_details['under_review'];
                            $live_status=$post_property_details['live_status'];
                            $reject_status=$post_property_details['reject_status'];
                            //`user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`, `location_office`, `current_location`, 
                            //`working_days`, `opening_time`, `close_time`, `business_desc`, `service_state`, `service_district`, `service_city`, `line_of_activity`, 
                            //`awarded`, `mobile_no`, `email`, `account_type`, `sub_type`, `verify_otp`, `login_time` SELECT * FROM `users` WHERE 1

                            $user_id=$post_property_details['user_id'];
                            $user_sql="SELECT * FROM users where user_id=$user_id";
                            $user_query=mysqli_query($conn,$user_sql);
                                $full_name="";
                                $mobile_no="";
                                $email_id="";
                            if($user_details=mysqli_fetch_array($user_query)) 
                               {
                                $full_name=$user_details['full_name'];
                                $mobile_no=$user_details['mobile_no'];
                                $email=$user_details['email'];
                               }
                        ?>


                            <tr>
                            <td><?php echo $post_property_details['post_date'];?></td>
                            <td><?php echo $full_name;?></td>
                                <td>
                                    <?php echo $post_property_details['property_list'];?>
                                </td>
                                <td>
                                    <?php echo $post_property_details['property_type'];?>
                                </td>
                                
                                <td><?php echo $mobile_no;?></td>
                                <td><?php echo $email;?></td>
                                <td>
                                <?php
                                    if($post_property_details['under_review']==0){
                                    ?>
                                    <span class="badge badge-default">Under Review</span>
                                    <?php
                                    }
                                ?>
                                </td>
                                <td class="d-flex">
                                    <a href="users_view_property_details.php?post_property_id=<?php echo $post_property_details['post_property_id'];?>">
                                        <button type="button" class="btn text-white bg-warning">Check Property</button>                                       
                                    </a>&nbsp;
                                    <a href="users_update_property_details.php?xedit=1&post_property_id=<?php echo $post_property_details['post_property_id'];?>">
                                        <button type="button" class="btn text-white bg-success">Update</button>                                       
                                    </a>
                                </td>
                                
                            </tr>

                        <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



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
    <!-- Custom JS Script -->
    <script src="dashboard-source/assets/js/app.js"></script>
    <script>
            //  Geo Location Btn fetch
    function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }}
    function showPosition(position) {
        document.getElementById("current_location").value="https://www.google.com/maps?q=" + position.coords.latitude + "," + position.coords.longitude;
    }

    </script>
</body>

</html>