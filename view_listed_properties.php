<?php
include_once("db/conn.php");
session_start();
                /*
                `post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`, 
                `property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, `plot_lenght`, `plot_lenght_unity`,
                `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, `prossession_by`, `layout_sketch_map`,
                `property_image_1`, `property_image_2`, `property_video`, `property_location_link`, `property_current_location`, `property_ownership`, 
                `property_approved_by`, `expected_price`, `price_per_unit`, `all_inclusive_price_yn`, `tax_govt_charges_yn`, `price_negotiable_yn`, 
                `about_property`, `maintenance_staff_yn`, `water_storage_yn`, `running_water_facility_yn`, `rain_water_harvesting_yn`,
                `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`, `overlooking_pool_yn`,
                `overlooking_club_yn`, `overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, `property_gated_society_name`, 
                `property_facing`, `corner_property_yn`, `suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`,
                `no_of_installment`, `installment_amount_month`, `reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, 
                `others_terms_conditions`, `hot_offer`, `under_construction_yn`, `sold_out_yn`,`submit_status`, 
                `under_review`, `live_status`, `reject_status` SELECT * FROM `users_post_property_details` WHERE 1*/

$property_type=$_REQUEST['property_type'] ;
                
$sql3="SELECT * FROM users_post_property_details WHERE live_status=1  and property_type='$property_type'";

?>
<!DOCTYPE html>
<html>

<head>
    <title>3 BIGHA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <!--<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body>


<!--Header -->
<?php  include ("website_header.php"); ?>
<!--Header -->
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Find Propertys</h1>
        </div>
    </div>
</div>
<!-- Sub banner end -->


<!-- properties list rightside start -->
<div class="properties-list-rightside mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="sidebar mrb">
                    <!-- Search area start -->
                    <div class="widget search-area">
                        <h5 class="sidebar-title">Advanced Search</h5>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="area">
                                            <option>Area From</option>
                                            <option>1500</option>
                                            <option>1200</option>
                                            <option>900</option>
                                            <option>600</option>
                                            <option>300</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="Status">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="Location">
                                            <option>Location</option>
                                            <option>United Kingdom</option>
                                            <option>American Samoa</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
                                            <option>Delaware</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="types">
                                            <option>Property Types</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Land</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-30">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Area</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="Sq ft" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Price</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <button class="btn- btn-4 btn-block">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- features brand start -->
                    <div class="widget features-brand">
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <h5 class="sidebar-title">Features</h5>
                                    <div class="form-group mb-0">
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="audi">
                                            <label class="form-check-label" for="audi">
                                                Air Condition
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="honda">
                                            <label class="form-check-label" for="honda">
                                                Free Parking
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="volkswagen">
                                            <label class="form-check-label" for="volkswagen">
                                                Swimming Pool
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="lamborghini">
                                            <label class="form-check-label" for="lamborghini">
                                                Laundry Room
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme">
                                            <input class="form-check-input" type="checkbox" value="" id="bmw">
                                            <label class="form-check-label" for="bmw">
                                                Central Heating
                                            </label>
                                        </div>
                                        <div class="form-check checkbox-theme mb-0">
                                            <input class="form-check-input" type="checkbox" value="" id="toyota">
                                            <label class="form-check-label" for="toyota">
                                                Window Covering
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="#">Apartments<span>(12)</span></a></li>
                            <li><a href="#">Houses<span>(8)</span></a></li>
                            <li><a href="#">Family Houses<span>(23)</span></a></li>
                            <li><a href="#">Offices<span>(5)</span></a></li>
                            <li><a href="#">Villas<span>(63)</span></a></li>
                            <li><a href="#">Other<span>(7)</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="option-bar">
                    <div class="row clearfix">
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5 col-3">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-caret-right icon-design"></i>
                                    <i class="fa fa-th-list"></i>
                                </span>
                                <span class="heading">Properties List</span>
                            </h4>
                        </div>
                    </div>
                </div>


                <?php 
                /*
                `post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`, 
                `property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, `plot_lenght`, `plot_lenght_unity`,
                `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, `prossession_by`, `layout_sketch_map`,
                `property_image_1`, `property_image_2`, `property_video`, `property_location_link`, `property_current_location`, `property_ownership`, 
                `property_approved_by`, `expected_price`, `price_per_unit`, `all_inclusive_price_yn`, `tax_govt_charges_yn`, `price_negotiable_yn`, 
                `about_property`, `maintenance_staff_yn`, `water_storage_yn`, `running_water_facility_yn`, `rain_water_harvesting_yn`,
                `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`, `overlooking_pool_yn`,
                `overlooking_club_yn`, `overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, `property_gated_society_name`, 
                `property_facing`, `corner_property_yn`, `suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`,
                `no_of_installment`, `installment_amount_month`, `reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, 
                `others_terms_conditions`, `hot_offer`, `under_construction_yn`, `sold_out_yn`,`submit_status`, 
                `under_review`, `live_status`, `reject_status` SELECT * FROM `users_post_property_details` WHERE 1*/

                //$sql3="SELECT * FROM users_post_property_details WHERE live_status=1 order by post_property_id DESC";
                $query3=mysqli_query($conn,$sql3);
                $num=mysqli_num_rows($query3);
                if($num>0)
                {?>

                <div class="subtitle">
                    <?php echo $num;?> Result Found
                </div>

                <?php
                    while($prd=mysqli_fetch_array($query3)) 
                    {
                    $post_property_id=$prd['post_property_id'];
                    $post_date=$prd['post_date'];
                    $property_list=$prd['property_list'];
                    $property_type=$prd['property_type'];
                    $property_image_1=$prd['property_image_1'];
                    $property_image_2=$prd['property_image_2'];
                    $property_video=$prd['property_video'];
                    $property_state=$prd['property_state'];
                    $property_district=$prd['property_district'];
                    $property_city=$prd['property_city'];
                    $property_locality=$prd['property_locality'];
                    $property_location_link=$prd['property_location_link'];
                    $about_property=$prd['about_property'];
                    $plot_area=$prd['plot_area'];
                    $plot_area_unit=$prd['plot_area_unit'];
                    $expected_price=$prd['expected_price'];

                    $maintenance_staff_yn= $prd['maintenance_staff_yn'] ; 
                    $water_storage_yn= $prd['water_storage_yn'] ; 
                    $running_water_facility_yn= $prd['running_water_facility_yn'] ; 
                    $rain_water_harvesting_yn= $prd['rain_water_harvesting_yn'] ; 
                    $feng_shui_vaastu_complaint_yn= $prd['feng_shui_vaastu_complaint_yn'] ; 
                    $proper_drainage_system_yn= $prd['proper_drainage_system_yn'] ; 
                    $solar_power_plant_yn= $prd['solar_power_plant_yn'] ; 
                    $solar_street_light_yn= $prd['solar_street_light_yn'] ; 
                    $overlooking_pool_yn= $prd['overlooking_pool_yn'] ; 
                    $overlooking_club_yn= $prd['overlooking_club_yn'] ; 
                    $overlooking_park_garden_yn= $prd['overlooking_park_garden_yn'] ; 
                    $overlooking_main_road_yn= $prd['overlooking_main_road_yn'] ; 
                    

                ?>

                <div class="property-box-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="search_listed_properties_details.php?post_property_id=<?php echo $post_property_id;?>" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="tag-for">For <?php echo $property_list; ?></div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            ₹ <?php echo $expected_price;?>
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="user_dashboard/upload_property_images/<?php echo $property_image_1;?>" alt="property-box-1" class="img-fluid">
                                </a>
                                <div class="property-overlay">
                                    <a href="search_listed_properties_details.php?post_property_id=<?php echo $post_property_id;?>" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="overlay-link property-video" data-toggle="modal" data-target="#exampleModal<?php echo $post_property_id;?>">
                                    <i class="fa fa-video-camera"></i>
                                    </button>

                                    <div class="property-magnify-gallery">
                                        <a href="user_dashboard/upload_property_images/<?php echo $property_image_1;?>" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="user_dashboard/upload_property_images/<?php echo $property_image_2;?>" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 align-self-center col-pad">
                            <div class="detail">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="search_listed_properties_details.php?post_property_id=<?php echo $post_property_id;?>">Property Type : <?php echo $property_type; ?></a>
                                </h1>
                                <!-- Location -->
                                <div class="location">
                                    <a href="<?php echo $property_location_link;?>">
                                        <i class="fa fa-map-marker"></i><?php echo $property_state; ?>, <?php echo $property_district; ?>, <?php echo $property_city; ?>, <?php echo $property_locality; ?>
                                    </a>
                                </div>
                                <!-- What makes your property unique? -->
                                <p><?php echo $about_property;?></p>
                                <!--  Property Profile -->
                               
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i><b> Plot Area :</b>   <?php echo $plot_area;?> <?php echo $plot_area_unit;?>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>








                <!-- Property Video Modal  -->
                <div class="modal property-modal fade" id="exampleModal<?php echo $post_property_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Property Type : <?php echo $property_type; ?>
                                </h5>
                                <p>
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> <?php echo $property_state; ?>, <?php echo $property_district; ?>, <?php echo $property_city; ?>, <?php echo $property_locality; ?>
                                </p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6 modal-left">
                                        <div class="modal-left-content">
                                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <div style="margin-top:25%;">
                                                        <video class="modalIframe" width="100%" height="500px" controls>
                                                            <source src="user_dashboard/upload_property_videos/<?php echo $property_video; ?>" type="video/mp4">
                                                            <source src="user_dashboard/upload_property_videos/<?php echo $property_video; ?>" type="video/ogg">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="user_dashboard/upload_property_images/<?php echo $property_image_1;?>" alt="property image 1">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="user_dashboard/upload_property_images/<?php echo $property_image_2;?>" alt="property nimage 2">
                                                    </div>
                                                </div>
                                                
                                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 modal-right">
                                        <div class="modal-right-content">
                                            <section>
                                                <h3>Amenities</h3>
                                                <ul class="bullets">
                                                    <li>
                                                    <?php if($maintenance_staff_yn=='1')
                                                    {?> 
                                                    <i class="flaticon-draw-check-mark"></i>
                                                    <?php
                                                    }else
                                                    {?>
                                                        <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                                    <?php
                                                    }?>
                                                    Maintenance Staff

                                                    </li>
                                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                                    <li><i class="flaticon-parking"></i> Parking</li>
                                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h3>Overlooking</h3>
                                                <ul class="bullets bullets2">
                                                    <li> Area</li>
                                                    <li>Condition</li>
                                                    <li>2 Year</li>
                                                    <li>Price</li>
                                                    <li>2500 Sq Ft:3400</li>
                                                    <li>New</li>
                                                    <li>2018</li>
                                                    <li>$178,000</li>
                                                </ul>
                                            </section>
                                            <!--
                                            <div class="ratings-2">
                                                <span class="ratings-box">4.5/5</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>( 7 Reviews )</span>
                                            </div>
                    -->
                                            <a href="search_listed_properties_details.php?post_property_id=<?php echo $post_property_id;?>" class="btn btn-show btn-theme">Show Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- properties list rightside start -->

<!-- Footer-->
<?php  include ("website_footer.php"); ?>
<!-- Footer-->













<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<!--<script src="assets/js/bootstrap.min.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="assets/js/jquery.selectBox.js"></script>
<script src="assets/js/rangeslider.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/dropzone.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/leaflet-providers.js"></script>
<script src="assets/js/leaflet.markercluster.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/maps.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

</html>