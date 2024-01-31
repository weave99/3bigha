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
                   <h4>Preview Property Details</h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->










<!--=========== START PAGE CONTENT======================================================================-->

            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Tell us about your property </div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
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
                            <div class="ibox-body">
                            <div class="row">

                            <?php 
                            /*
                            `post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`, 
                            `property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, `plot_lenght`, `plot_lenght_unit`,
                            `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, `prossession_by`, `layout_sketch_map`,
                            `property_image_1`, `property_image_2`, `property_video`, `property_location_link`, `property_current_location`, `property_ownership`, 
                            `property_approved_by`, `expected_price`, `price_per_unit`, `all_inclusive_price_yn`, `tax_govt_charges_yn`, `price_negotiable_yn`, 
                            `about_property`, `maintenance_staff_yn`, `water_storage_yn`, `running_water_facility_yn`, `rain_water_harvesting_yn`,
                            `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`, `overlooking_pool_yn`,
                            `overlooking_club_yn`, `overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, `property_gated_society_name`, 
                            `property_facing`, `corner_property_yn`, `suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`,
                            `no_of_installment`, `installment_amount_month`, `reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, 
                            `others_terms_conditions`, `hot_offer`, `under_construction_yn`, `sold_out_yn`, `submit_status`
                             SELECT * FROM `users_post_property_details` WHERE 1*/
                            $post_property_id=$_REQUEST['post_property_id'];
                            $sql="SELECT * FROM users_post_property_details WHERE post_property_id=$post_property_id";
                            $query=mysqli_query($conn,$sql);
                            if($f=mysqli_fetch_array($query)) 
                            {

                                $user_id=$f['user_id'];

                                $user_sql="SELECT * FROM users WHERE user_id='$user_id'";
                                $user_query=mysqli_query($conn,$user_sql);
                                if($fetch=mysqli_fetch_array($user_query))
                                {
                                    $full_name=$fetch['full_name'];
                            ?>




                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>Your Property Post On <?php echo $f['post_date'];?></h4>
                                        <p class="pt-2">I / We, <?php echo $full_name;?>, want to list property to : <b> <?php echo $f['property_list'];?></b></p>

                                        <p class="pt-2">Property Type : <b> <?php echo $f['property_type'];?> </b></p>     


                                        <h5 class="pt-2">Property Profile</h5>
                                        <p>Plot Nos. : <b>  <?php echo $f['plot_no'];?></b> </p>    
                                        <p>Plot Area : <b> <?php echo $f['plot_area'];?> </b>   &nbsp;Unit : <b> <?php echo $f['plot_area_unit'];?></b></p>
                                        <h5 class="text-justify">Property Dimension </h5>
                                        <p>Length of Plot : <b> <?php echo $f['plot_lenght'];?> </b>&nbsp;Unit : <b> <?php echo $f['plot_lenght_unit'];?></b></p>
                                        <p>Breadth of Plot : <b> <?php echo $f['plot_breadth'];?> </b>&nbsp;Unit : <b> <?php echo $f['plot_breadth_unit'];?></b></p>

                                        <p>Is there a boundary / guard wall around the property?</p>
                                        <p><b><?php if($f['boundry_yn']=='1'){ echo "Yes";}?></b></p>



                                        <p>Nos. of open sides : <b> <?php echo $f['no_open_side'];?></b></p>

                                        <p>Any construction done on this property? <br>
                                        <b><?php if($f['any_construction_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>

                                        <p>Possession by : <b><?php echo $f['prossession_by'];?></b></p>



                                        <h5>You can upload only the property Images.</h5>
                                        <p>Layout / Sketch Map : <b><a class="text-primary" href="../user_dashboard/upload_property_documents/<?php echo $f['layout_sketch_map'];?>" target=_blank> Click To Open</a></b></p>
                                        <p>Image of the Particular Property :<b> <img src="../user_dashboard/upload_property_images/<?php echo $f['property_image_1'];?>" width="200px" alt=""> </b></p>
                                        <p>Image of the Particular Property :<b>  <img src="../user_dashboard/upload_property_images/<?php echo $f['property_image_2'];?>" width="200px" alt=""> </b></p>
                                        <p>Videography of the Property :<b> <a class="text-primary" href="../user_dashboard/upload_property_videos/<?php echo $f['property_video'];?>" target=_blank> Click To Open</a></b></p>

                                        <p>Link of the Location of your property <br>
                                        <b><?php echo $f['property_location_link'];?></b>
                                        </p>
                                        
                                        <p>Your current location<br>
                                        <b><?php echo $f['property_current_location'];?></b>
                                        </p>
                                        <h5>Other Features</h5>
                                        <p>Ownership : <b> <?php echo $f['property_ownership'];?></b></p>
                                        <p>Which authority is the property approved by?<br>
                                        <b><?php echo $f['property_approved_by'];?></b>
                                        </p>



                                        <h5>Amenities</h5>
                                        <p>Maintenance Staff : <b><?php if($f['maintenance_staff_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Water Storage : <b> <?php if($f['water_storage_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Running Water facility : <b> <?php if($f['running_water_facility_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Rain water harvesting : <b> <?php if($f['rain_water_harvesting_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Feng Shui / Vaastu Complaint : <b> <?php if($f['feng_shui_vaastu_complaint_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Proper Drainage System : <b> <?php if($f['proper_drainage_system_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Solar Power Plant : <b> <?php if($f['solar_power_plant_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Solar Street light : <b> <?php if($f['solar_street_light_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>



                                        <h5>Overlooking</h5>
                                        <p>Pool : <b> <?php if($f['overlooking_pool_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b></p>
                                        <p>Club : <b> <?php if($f['overlooking_club_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b></p>
                                        <p>Park / Garden : <b> <?php if($f['overlooking_park_garden_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Main Road : <b> <?php if($f['overlooking_main_road_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b></p>


                                        <h5>Other Facilities</h5>
                                        <p>Is the property in a gated society ?<br>
                                        <b><?php if($f['property_gated_society_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b><br>
                                        <b><?php echo $f['property_gated_society_name'];?></b>
                                        </p>
                                        <p>Corner Property : <b><?php if($f['corner_property_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>



                                    

                                    </div>
                                    <div class="col-lg-6">
                                        <h4>Basic Details</h4>
                                        <h6 class="pb-2">Location Details </h6> 
                                        <p>State : <b>  <?php echo $f['property_state'];?></b> </p>
                                        <p>District : <b>  <?php echo $f['property_district'];?></b> </p>        
                                        <p>City : <b>  <?php echo $f['property_city'];?></b> </p>
                                        <p>Locality : <b>  <?php echo $f['property_locality'];?></b> </p> 
                                        <p>Sub Locality : <b>  <?php echo $f['property_sub_locality'];?></b> </p>             
                                        <p>Apartment / Society : <b>  <?php echo $f['apartment_socity'];?></b> </p>        
                                        



                                        <h5 class="pt-4">Price Details</h5>
                                        <p>Expected Price : <b> <?php echo $f['expected_price'];?></b></p>
                                        <p>Price per sq. ft. / mtr. : <b> <?php echo $f['price_per_unit'];?></b></p>
                                        <p>All inclusive Price : <b><?php if($f['all_inclusive_price_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>
                                        <p>Tax & Govt. charges excluded :<b> <?php if($f['tax_govt_charges_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b></p>
                                        <p>Price Negotiable :<b> <?php if($f['price_negotiable_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b></p>
                                        <h5>What makes your property unique?</h5>
                                        <p class="text-justify"><?php echo $f['about_property'];?></p>
                                    
                                                            



                                        <h5>Suggest a property feature</h5>
                                        <p> <?php echo $f['suggest_property_feature'];?></p>


                                        <h5>Best Deal</h5>
                                        <p><?php echo $f['best_deal'];?></p>


                                        <h5>Direct EMI </h5>
                                        <h6>Percentage of Down Payment :<b><?php echo $f['down_payment_percentage'];?></b></h6>

                                        <h6>Rate of Interest : <b> <?php echo $f['rate_interest'];?> </b></h6>
                                        <h6>Maximum number of EMI(s) : <b> <?php echo $f['no_of_installment'];?></b></h6>
                                        <h6>Installment Amount Month : <b> <?php echo $f['installment_amount_month'];?></b></h6>

                                        <p class="pt-4">Will you provide registration of the property after making the down payment? <br>
                                            <b><?php if($f['reg_after_downpayment_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b>
                                        </p>
                                        <p>
                                        If you provide registration who will keep the original deed?<br>

                                            <b><?php if($f['reg_original_deed_yn']*1==1){ echo "Party";}else{ echo "You";} ?> </b>
                                        </p>

                                        <p>Is there the need of any third party as guarantor? <br> <b> <?php if($f['third_party_gurantor_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></p>

                                        <h5>Hot Offer</h5>
                                        <p><?php echo $f['hot_offer'];?></p>



                                        <h5>Terms and Conditions</h5>
                                        <p><?php echo $f['others_terms_conditions'];?></p>


                                        <h5>Under Construction : <b> <?php if($f['under_construction_yn']*1==1){ echo "YES";}else{ echo "NO";} ?> </b></h5>

                                        <h5>Sold out : <b> <?php if($f['sold_out_yn']*1==1){ echo "YES";}else{ echo "NO";} ?></b></h5>




                                        <h5 class="pt-4">Location Advantage (highlight the nearby landmarks) : </h5>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <b>Landmarks (mention the names)</b>
                                            </div>
                                            <div class="col-lg-4">
                                                <b>Distance from the property (km / mtr) </b>
                                            </div>
                                        </div>
                                        
                                                <?php
                                                $arr = array(
                                                    "users_post_metro_details",
                                                    "users_post_school_details",
                                                    "users_post_hospital_details",
                                                    "users_post_railway_details",
                                                    "users_post_airport_details",
                                                    "users_post_mall_details",
                                                    "users_post_highway_details",
                                                    "users_post_religious_establishment_details",
                                                    "users_post_others_details"
                                                );
                                                $i=0;
                                                while($i<count($arr))
                                                {
                                                    $table1=$arr[$i];
                                                    $i++;
                                                $q1="SELECT * FROM  $table1 WHERE post_property_id=$post_property_id  order by id";
                                                $query1=mysqli_query($conn,$q1);
                                                while($f1=mysqli_fetch_array($query1)){  ?>


                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <?php echo $f1[2];?>
                                                </div>
                                                <div class="col-lg-4">
                                                <?php echo $f1[3];?>
                                                </div>
                                            </div>

                                            <?php
                                                }
                                                }
                                                ?>





                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                   
                                        <h5>Details of facing road(s) / Width of facing road : </h5>
                                            <div class="row">
                                            
                                                <div class="col-lg-3">
                                                    <b>Property facing</b>
                                                </div>
                                                <div class="col-lg-3">
                                                    <b>Details of facing road(s)</b>
                                                </div>
                                                <div class="col-lg-2">
                                                    <b>Width of facing road</b>
                                                </div>
                                                <div class="col-lg-1">
                                                    <b>Unit </b>
                                                </div>
                                                <div class="col-lg-3">
                                                    <b>Condition of the road(s)	</b>
                                                </div>

                                        </div>



                                        <?php
                                        //`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `` SELECT * FROM `users_post_road_details` WHERE 1
                                        $q2="SELECT * FROM  users_post_road_details WHERE post_property_id=$post_property_id  order by id";
                                        $query2=mysqli_query($conn,$q2);
                                        while($f2=mysqli_fetch_array($query2)){ ?>

                                        <div class="row">
                                            <div class="col-lg-3">
                                            <?php echo $f2['property_facing'];?>
                                            </div>
                                            <div class="col-lg-3">
                                            <?php echo $f2['direction_road'];?>
                                            </div>
                                            <div class="col-lg-2">
                                            <?php echo $f2['facing_road'];?>
                                            </div>
                                            <div class="col-lg-1">
                                                <?php echo $f2['facing_road_unit'];?>
                                            </div>
                                            <div class="col-lg-3">
                                                <?php echo $f2['facing_road_condition'];?>
                                            </div>
                                        </div>

                                        <?php
                                        }
                                        ?>

                                  
                                    </div>
                                </div>
                            </div>






                            <?php
                                }
                            }
                            ?>


                              


                            </div>

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