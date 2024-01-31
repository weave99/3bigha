<?php
include_once("db/conn.php");
session_start();
$post_property_id=$_REQUEST['post_property_id'];
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
    <script>
        function GoogleMapsURLToEmbedURL(GoogleMapsURL)
        {
            var GoogleMapsURL=GoogleMapsURL.replace("?q=", "/@")+",14z";
        var coords = /\@([0-9\.\,\-a-zA-Z]*)/.exec(GoogleMapsURL);
            if(coords!=null)
            {
                var coordsArray = coords[1].split(',');
            x="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20000!2d"+coordsArray[1]+"!3d"+coordsArray[0]+"!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1486486434098";
            
            document.getElementById("p").innerHTML ="<iframe src='"+x+"'></iframe>";
            
            }
            
        }
    </script>
</head>
<body>


<!--Header -->
<?php  include ("website_header.php"); ?>
<!--Header -->
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
    `others_terms_conditions`, `hot_offer`, `under_construction_yn`, `sold_out_yn`,`submit_status`, 
    `under_review`, `live_status`, `reject_status` SELECT * FROM `users_post_property_details` WHERE 1*/

    $sql3="SELECT * FROM users_post_property_details WHERE post_property_id=$post_property_id";
    $query3=mysqli_query($conn,$sql3);
    if($fetch=mysqli_fetch_array($query3)) 
    {
        $post_date= $fetch['post_date'] ;
        $property_list= $fetch['property_list'] ;
        $property_type= $fetch['property_type'] ;
        $property_state= $fetch['property_state'] ;
        $property_district= $fetch['property_district'] ;
        $property_city= $fetch['property_city'] ;
        $property_locality= $fetch['property_locality'] ;
        $property_sub_locality= $fetch['property_sub_locality'] ;
        $apartment_socity= $fetch['apartment_socity'] ;
        $plot_no= $fetch['plot_no'] ;
        $plot_area= $fetch['plot_area'] ;
        $plot_area_unit= $fetch['plot_area_unit'] ;
        $plot_lenght= $fetch['plot_lenght'] ; 
        $plot_lenght_unit= $fetch['plot_lenght_unit'] ; 
        $plot_breadth= $fetch['plot_breadth'] ; 
        $plot_breadth_unit= $fetch['plot_breadth_unit'] ; 
        $boundry_yn= $fetch['boundry_yn'] ; 
        $no_open_side= $fetch['no_open_side'] ; 
        $any_construction_yn= $fetch['any_construction_yn'] ; 
        $prossession_by= $fetch['prossession_by'] ; 
        $layout_sketch_map= $fetch['layout_sketch_map'] ; 
        $property_image_1= $fetch['property_image_1'] ; 
        $property_image_2= $fetch['property_image_2'] ; 
        $property_video= $fetch['property_video'] ; 
        $property_location_link= $fetch['property_location_link'] ; 
        $property_current_location= $fetch['property_current_location'] ; 
        $property_ownership= $fetch['property_ownership'] ; 
        $property_approved_by= $fetch['property_approved_by'] ; 
        $expected_price= $fetch['expected_price'] ; 
        $price_per_unit= $fetch['price_per_unit'] ; 
        $all_inclusive_price_yn= $fetch['all_inclusive_price_yn'] ; 
        $tax_govt_charges_yn= $fetch['tax_govt_charges_yn'] ; 
        $price_negotiable_yn= $fetch['price_negotiable_yn'] ; 
        $about_property= $fetch['about_property'] ; 
        $maintenance_staff_yn= $fetch['maintenance_staff_yn'] ; 
        $water_storage_yn= $fetch['water_storage_yn'] ; 
        $running_water_facility_yn= $fetch['running_water_facility_yn'] ; 
        $rain_water_harvesting_yn= $fetch['rain_water_harvesting_yn'] ; 
        $feng_shui_vaastu_complaint_yn= $fetch['feng_shui_vaastu_complaint_yn'] ; 
        $proper_drainage_system_yn= $fetch['proper_drainage_system_yn'] ; 
        $solar_power_plant_yn= $fetch['solar_power_plant_yn'] ; 
        $solar_street_light_yn= $fetch['solar_street_light_yn'] ; 
        $overlooking_pool_yn= $fetch['overlooking_pool_yn'] ; 
        $overlooking_club_yn= $fetch['overlooking_club_yn'] ; 
        $overlooking_park_garden_yn= $fetch['overlooking_park_garden_yn'] ; 
        $overlooking_main_road_yn= $fetch['overlooking_main_road_yn'] ; 
        $property_gated_society_yn= $fetch['property_gated_society_yn'] ; 
        $property_gated_society_name= $fetch['property_gated_society_name'] ; 
        $property_facing= $fetch['property_facing'] ; 
        $corner_property_yn= $fetch['corner_property_yn'] ; 
        $suggest_property_feature= $fetch['suggest_property_feature'] ; 
        $best_deal= $fetch['best_deal'] ; 
        $down_payment_percentage= $fetch['down_payment_percentage'] ; 
        $rate_interest= $fetch['rate_interest'] ; 
        $no_of_installment= $fetch['no_of_installment'] ; 
        $installment_amount_month= $fetch['installment_amount_month'] ; 
        $reg_after_downpayment_yn= $fetch['reg_after_downpayment_yn'] ; 
        $reg_original_deed_yn= $fetch['reg_original_deed_yn'] ; 
        $third_party_gurantor_yn= $fetch['third_party_gurantor_yn'] ; 
        $others_terms_conditions= $fetch['others_terms_conditions'] ; 
        $hot_offer= $fetch['hot_offer'] ; 
        $under_construction_yn= $fetch['under_construction_yn'] ; 
        $sold_out_yn= $fetch['sold_out_yn'] ; 


    ?>







    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Property Detail</h1>
                <ul class="breadcrumbs">
                    
                    <li class="text-white">Property Detail </li>
                    <li class="active"><?php echo $property_type;?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->










    <!-- Properties details page start -->

    <div class="properties-details-page mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                        <div class="heading-properties-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="informeson">
                                        <h1>Property Type : <?php echo $property_type;?><span>₹<?php echo $expected_price;?></h1>
                                        <div>
                                            <div class="float-left">
                                                <ul class="clearfix">
                                                <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Area <?php echo $plot_area;?> <?php echo $plot_area_unit;?></li>    
                                                    <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Length <?php echo $plot_lenght;?> <?php echo $plot_lenght_unit;?></li>                                            
                                                    <li><i class="flaticon-bath"></i> Breadth <?php echo $plot_breadth; ?> <?php echo $plot_breadth_unit; ?></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="float-right">
                                                <p>PRICE PER UNIT : ₹<?php echo $price_per_unit; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="user_dashboard/upload_property_images/<?php echo $property_image_1;?>" width="100%" class="img-fluid" alt="properties-photo">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="1">
                                            <img src="user_dashboard/upload_property_images/<?php echo $property_image_2;?>" width="100%" class="img-fluid" alt="properties-photo">
                                        </div>
                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators sp-2 smail-properties list-inline nav nav-justified ">
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                                <img src="user_dashboard/upload_property_images/<?php echo $property_image_1;?>" class="img-fluid" alt="properties-photo-smale">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                                <img src="user_dashboard/upload_property_images/<?php echo $property_image_2;?>" class="img-fluid" alt="properties-photo-smale">
                                            </a>
                                        </li>
                                    </ul>                                
                            </div>
                            <div class="col-lg-6">
                                <!-- Property description start -->
                                <div class="property-description mb-20">
                                    <h3 class="heading-3">Property Description</h3>
                                    <!-- about_property -->
                                    <p class="text-justify">
                                        <?php echo $about_property;?>
                                    </p>
                                    <!-- suggest_property_feature -->                                    
                                    <h3 class="heading-3">Property Featured</h3>
                                    <p class="text-justify">
                                        <?php echo $suggest_property_feature;?>
                                    </p>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 slider">
                    <!-- Property details start -->
                    <div class="property-details mb-45">
                        <h3 class="heading-3">Property Details</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <strong>Property list:</strong><?php echo $property_list; ?>
                                    </li>
                                    <li>
                                        <strong>Property Type:</strong> <?php echo $property_type; ?>
                                    </li>
                                    <li>
                                        <strong>State: </strong> <?php echo $property_state; ?>
                                    </li>
                                    <li>
                                        <strong>District:</strong> <?php echo $property_district; ?>
                                    </li>
                                    <li>
                                        <strong>City:</strong> <?php echo $property_city; ?>
                                    </li>
                                    <li>
                                        <strong>Locality :</strong> <?php echo $property_locality; ?>
                                    </li>
                                    <li>
                                        <strong>Sub Locality: </strong> <?php echo $property_sub_locality; ?>
                                    </li>
                                    <li>
                                        <strong>Apartment / Society:</strong>  <?php echo $apartment_socity; ?>
                                    </li>

                                    <li>
                                        <strong>Location of property (click here )</strong><br> <a class="text-primary" href="<?php echo $property_location_link; ?>" target="_blank"><?php echo $property_location_link; ?></a>
                                    </li>
                                    <li>
                                        <strong>Property Live Location (click here )</strong><br> <a class="text-primary" href="<?php echo $property_current_location; ?>" target="_blank"><?php echo $property_current_location; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                
                                    <li>
                                        <strong>Property Plot No:</strong> <?php echo $plot_no; ?>
                                    </li>
                                    <li>
                                        <strong>Property Plot Area:</strong> <?php echo $plot_area; ?>  <?php echo $plot_area_unit; ?>
                                    </li>
                                    <li>
                                        <strong>Length of Plot: </strong> <?php echo $plot_lenght; ?>  <?php echo $plot_lenght_unit; ?>
                                    </li>
                                    <li>
                                        <strong>Breadth of Plot: </strong> <?php echo $plot_breadth; ?>  <?php echo $plot_breadth_unit; ?>
                                    </li>
                                    <li>
                                        <strong>Property Boundry:</strong> <?php if($boundry_yn=='1'){ echo "Yes";}else{ echo "No";}?>
                                    </li>
                                    <li>
                                        <strong>Nos. of Open Sides :</strong> <?php echo $no_open_side;?>
                                    </li>
                                    <li>
                                        <strong>Construction Status : </strong> <?php if($under_construction_yn=='1'){ echo "Under Construction";}else{ echo "Ready To Move";}?>
                                    </li>
                                    <li>
                                        <strong>Possession By :</strong>  <?php echo $prossession_by;?>
                                    </li>
                                    <li>
                                        <strong>Ownership :</strong>  <?php echo $property_ownership;?>
                                    </li>
                                    <li>
                                        <strong>Property Approved By :</strong>  <?php echo $property_approved_by;?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>                                    
                                    <li>
                                        <strong>Expected Price:</strong> ₹<?php echo $expected_price; ?>
                                    </li>

                                    <li>
                                        <strong>Price Per Unit:</strong> ₹<?php echo $price_per_unit; ?>
                                    </li>
                                    <li>
                                        <strong>All inclusive Price :</strong>  <?php if($all_inclusive_price_yn=='1'){ echo "Yes";}else{ echo "No";}?>
                                    </li>
                                    <li>
                                        <strong>Tax & Govt. charges excluded:</strong> <?php if($tax_govt_charges_yn=='1'){ echo "Yes";}else{ echo "No";}?>
                                    </li>
                                    <li>
                                        <strong>Price Negotiable:</strong>  <?php if($price_negotiable_yn=='1'){ echo "Yes";}else{ echo "No";}?>
                                    </li>

                                    <h3 class="heading-3 pt-3">Direct EMI</h3>
                                    <li>
                                        <strong>Percentage of Down Payment: </strong> <?php echo $down_payment_percentage; ?>
                                    </li>
                                    <li>
                                        <strong>Rate of Interest: </strong> <?php echo $rate_interest; ?>
                                    </li>
                                    <li>
                                        <strong>Maximum number of EMI(s): </strong> <?php echo $no_of_installment; ?>
                                    </li>
                                    <li>
                                        <strong>Installment Amount Month: </strong> <?php echo $installment_amount_month; ?>
                                    </li>
                                    <li>
                                        <strong>Registration of the Property After Making the Down Payment: </strong> <?php if($reg_after_downpayment_yn=='1'){ echo "Yes";}else{ echo "No";}?>
                                    </li>
                                    <li>
                                        <strong>Registration Who Will Keep the Original Deed: </strong> <?php if($reg_original_deed_yn=='1'){ echo "Party";}else{ echo "You";}?>
                                    </li>
                                    <li>
                                        <strong>Is there the need of any third party as guarantor: </strong> <?php if($third_party_gurantor_yn=='1'){ echo "Yes";}else{ echo "No";}?>
                                    </li>

                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Amenities box start -->
                    <div class="amenities-box af mb-45">
                        <h3 class="heading-3">Amenities</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <ul>

                                    <li>
                                        <span>
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
                                        </span>

                                    </li>
                                    <li>
                                        <span>
                                            <?php if($water_storage_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Water Storage
                                        </span>
                                    </li>
                                    

                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <span>
                                            <?php if($running_water_facility_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Running Water facility
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <?php if($rain_water_harvesting_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Rain water harvesting
                                        </span>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <span>
                                            <?php if($feng_shui_vaastu_complaint_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Feng Shui / Vaastu Complaint
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <?php if($proper_drainage_system_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Proper Drainage System
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <span>
                                            <?php if($solar_power_plant_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Solar Power Plant 
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <?php if($solar_street_light_yn=='1')
                                            {?> 
                                            <i class="flaticon-draw-check-mark"></i>
                                            <?php
                                            }else
                                            {?>
                                                <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                            <?php
                                            }?>
                                            Solar Street light
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Features opions start -->
                    <div class="features-opions af mb-45">
                        <h3 class="heading-3">Overlooking</h3>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <?php if($overlooking_pool_yn=='1')
                                        {?> 
                                        <i class="flaticon-draw-check-mark"></i>
                                        <?php
                                        }else
                                        {?>
                                            <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                        <?php
                                        }?>
                                        Pool
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <?php if($overlooking_club_yn=='1')
                                        {?> 
                                        <i class="flaticon-draw-check-mark"></i>
                                        <?php
                                        }else
                                        {?>
                                            <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                        <?php
                                        }?>
                                        Club
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <?php if($overlooking_park_garden_yn=='1')
                                        {?> 
                                        <i class="flaticon-draw-check-mark"></i>
                                        <?php
                                        }else
                                        {?>
                                            <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                        <?php
                                        }?>
                                        Park / Garden
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <ul>
                                    <li>
                                        <?php if($overlooking_main_road_yn=='1')
                                        {?> 
                                        <i class="flaticon-draw-check-mark"></i>
                                        <?php
                                        }else
                                        {?>
                                            <i style="padding-top:2px;"><svg xmlns="http://www.w3.org/2000/svg" style="fill:red;" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></i>
                                        <?php
                                        }?>
                                        Main Road
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Floor plans start -->
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <h3 class="heading-3">Other Facilities</h3>
                            <ul>
                                <li>
                                    <p> Is the property in a gated society : <?php if($property_gated_society_yn=='1'){ echo "Yes";}else{ echo "No";}?><br><?php echo $property_gated_society_name;?></p>
                               
                                </li>

                                <li>
                                    <p>Property facing :   <?php echo $property_facing;?></p>
                                    
                                </li>
                                <li>
                                    <p>Corner Property :   <?php if($corner_property_yn=='1'){ echo "Yes";}else{ echo "No";}?></p>
                                    
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <h3 class="heading-3">Details of facing road(s) / Width of facing road : </h3>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h6><b>Direction of facing road(s)</b></h6>
                                            </div>
                                            <div class="col-lg-3">
                                                <h6><b>Width of facing road</b></h6>
                                            </div>
                                            <div class="col-lg-2">
                                                <h6><b>Unit </b></h6>
                                            </div>
                                            <div class="col-lg-3">
                                                <h6><b>Condition of the road(s)</b></h6>
                                            </div>
                                        </div>


                                        <?php
                                        //`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `` SELECT * FROM `users_post_road_details` WHERE 1
                                        $q2="SELECT * FROM  users_post_road_details WHERE post_property_id=$post_property_id  order by id";
                                        $query2=mysqli_query($conn,$q2);
                                        while($f2=mysqli_fetch_array($query2)){ ?>

                                        <div class="row border">
                                            <div class="col-lg-4">
                                                <?php echo $f2['direction_road'];?>
                                            </div>
                                            <div class="col-lg-3">
                                                <?php echo $f2['facing_road'];?>
                                            </div>
                                            <div class="col-lg-2">
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
                        
                        <div class="col-lg-12">
                        <h3 class="heading-3">Location Advantage (highlight the nearby landmarks) : </h3>
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


                            <div class="row border">
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

                        <div class="col-lg-6 mt-5">
                            <h3 class="heading-3">Layout / Sketch Map </h3>
                            <iframe src="user_dashboard/upload_property_documents/<?php echo $layout_sketch_map;?>#toolbar=0&navpanes=0" style="width: 100%;  height:360px;border: none;"></iframe>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <h3 class="heading-3">Property Video </h3>
                            <video width="100%" height="360px" controls>
                                <source src="user_dashboard/upload_property_videos/<?php echo $property_video;?>" type="video/mp4">
                                <source src="user_dashboard/upload_property_videos/<?php echo $property_video;?>" type="video/ogg">
                            </video>
                        </div>
                    </div>


                    <!-- Section Location start -->
                    <div class="section-location mb-60 pt-5">
                        <h3 class="heading-3">Property Location </h3>
                        <div id="p">
                        <script>var x=GoogleMapsURLToEmbedURL("<?php echo $property_current_location;?>");</script>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
                        
    <!-- Properties details page start -->













    <?php
    }
    ?>

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