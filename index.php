<?php
include_once("db/conn.php");
session_start();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
    <link type="text/css" rel="stylesheet" href="assets/css/impotant_text.css">  <!-- Not Connect use test-->

    
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->

    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/body_load_modal.css">

    <link type="text/css" rel="stylesheet" href="assets/css/megamenu.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">


    <style>
        #buy, #rent, #pg, #project, #lease{
            display: none;
        }
       </style>
</head>
<body>




<!--Header -->
<?php include ('website_header.php');?>
<!--Header -->

<!-- Banner start -->


<div class="banner">
    <img class="banner_img d-block" src="assets/img/banner/img-8.jpg" width="100%"  alt="banner">
</div>


<!-- banner end -->
<div class="" style="margin-top: -60px;z-index: 99999;";>
    <div class="col-lg-9 rounded bg-white" style="position: relative; left: 50%; transform: translate(-50%,0);box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">

            <div class="p-3" style="width: 100%;position: relative; height:auto;">
                <div class="tab-box">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-lease-tab" data-toggle="pill" href="#pills-lease" role="tab" aria-controls="pills-lease" aria-selected="false">Lease</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-pg-tab" data-toggle="pill" href="#pills-pg" role="tab" aria-controls="pills-pg" aria-selected="false">PG</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" id="pills-projects-tab" data-toggle="pill" href="#pills-projects" role="tab" aria-controls="pills-projects" aria-selected="false">Project</a>
                        </li>
    -->
                    </ul>
                    <div class="tab-content pt-1" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="search-area search-area-6">
                                <div class="search-area-inner">
                                    <div class="search-contents">

                                        <form action="search_listed_properties.php" method="post" id="form_buy">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <div class="search-fields" id="property_btn">
                                                            <button type="button" onclick="buy()">
                                                                Types  <i class="bi bi-chevron-down"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <!-- Search Data Field -->
                                                        <input type="text" name="search_data" class="search-fields fc2 pl-3" placeholder="Enter locality / landmark / City / District / Project Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                <!-- Location search Button -->
                                                        <input type="hidden" name="current_location" id="current_location" value="">
                                                         
                                                        <button type="submit" name="location_search" id="location_search" onClick="getLocation();"  class="search-button btn"  style="border:none;">
                                                            <i class="fa-solid fa-location-crosshairs" style="font-size:22px;color:#3f56ff;"></i>
                                                        </button>
                                                   
                                                        <div id="location_search_hover">
                                                            <img src="assets/img/icons/nearMeTag.png" width="100%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 ">
                                                    <div class="form-group fg2">
                                                         <!-- search Button -->
                                                        <button type="submit" name="search_buy" class="search-button btn btn-md btn-color text-white">Search</button>                                                        
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6" style="z-index: 9999;" id="buy">
                                              
                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <table>
                                                                    <th width="200px">
                                                                        <button type="button" id="buy_sub_drop" onclick="buy_properties_section();">
                                                                            Properties  <i class="bi bi-chevron-down"></i>
                                                                        </button>                                                                            
                                                                    </th>
                                                                    <th>
                                                                        <button type="button" id="buy_sub_drop_2" onclick="buy_building_material_section();">
                                                                            Building Material  <i class="bi bi-chevron-down"></i>
                                                                        </button>
                                                                    </th>
                                                                </table>                                                          

                                                             
                                                                 

                                                               
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div id="buy_properties_section">
                                                                <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-5 border">
                                                                        <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Land / Plot</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Residential
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Commercial
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Agricultural
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Industrial                                                            
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Others
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>House(s)</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent / Builder Floor"> Independent / Builder Floor
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent House / Villa"> Independent House / Villa
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Farm House"> Farm House
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Bunglow"> Bunglow
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Office Space"> Office Space
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Shop"> Shop
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="House Others"> Others
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-lg-2 border">
                                                                        <div class="text-left text-dark">
                                                                            <h6 class="pt-3"><b>Budget</b></h6>
                                                                            <div class="pt-2">
                                                                                
                                                                                <input type="radio" name="your_budget" value="5000000"> 0 – 50 Lack
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="your_budget" value="10000000"> 50 – 100 Lack
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="your_budget" value="50000000"> 100 – 500 Lack
                                                                            </div>                                                                
                                                                        </div>

                                                                        <div class="text-left text-dark">
                                                                            <h6 class="pt-3"><b>Bedroom</b></h6>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="1"> 1 RK/BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="2"> 2BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="3"> 3BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="4"> 4BHK
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 border">
                                                                        <div class="text-left text-dark">
                                                                            <h6 class="pt-3"><b>Construction Status</b></h6>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="under_construction_yn" value="1"> Under Construction
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="under_construction_yn" value="0"> Ready to move
                                                                            </div>
                                                                            <h6 class="pt-3"><b>Label</b></h6>
                                                                            <div class="pt-2">
                                                                                <input type="checkbox"  name="best_deal" value="Best Deal"> Best Deal
                                                                            </div>

                                                                            <div class="pt-2">
                                                                                <input type="checkbox"  name="hot_offer" value="Hot Offer"> Hot Offer
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 border">
                                                                        <div class="text-left text-dark">
                                                                            <h6 class="pt-3"><b>Posted by</b></h6>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="posted_by" value="Owner"> Owner
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="posted_by" value="Builder"> Builder
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="posted_by" value="Dealer"> Dealer
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="posted_by" value="Agent"> Agent
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio"  name="posted_by" value="Broker"> Broker
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                               
                                                                </div>
                                                            </div>

                                                            <div id="buy_building_material_section">
                                                                <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-6 border">
                                                                        <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 border">
                                                                        <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
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



                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="search-area search-area-6">
                                <div class="search-area-inner">
                                    <div class="search-contents">



                                    <form action="search_listed_properties.php" method="post" id="form_rent">
                                            
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <div class="search-fields" id="property_btn">
                                                            <button type="button" onclick="rent()">
                                                                Types  <i class="bi bi-chevron-down"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <!-- Search Data Field -->
                                                        <input type="text" name="search_data" class="search-fields fc2 pl-3" placeholder="Enter locality / landmark / City / District / Project Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                <!-- Location search Button -->
                                                        <input type="hidden" name="current_location" id="current_location" value="">
                                                         
                                                        <button type="submit" name="location_search" id="location_search" onClick="getLocation();"  class="search-button btn"  style="border:none;">
                                                            <i class="fa-solid fa-location-crosshairs" style="font-size:22px;color:#3f56ff;"></i>
                                                        </button>
                                                   
                                                        <div id="location_search_hover">
                                                            <img src="assets/img/icons/nearMeTag.png" width="100%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 ">
                                                    <div class="form-group fg2">
                                                         <!-- search Button -->
                                                        <button type="submit" name="search_rent" class="search-button btn btn-md btn-color text-white">Search</button>                                                        
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6" style="z-index: 9999;" id="rent">
                                              
                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <table>
                                                                    <th width="200px">
                                                                        <button type="button" id="rent_sub_drop" onclick="rent_properties_section();">
                                                                            Properties  <i class="bi bi-chevron-down"></i>
                                                                        </button>                                                                            
                                                                    </th>
                                                                    <th>
                                                                        <button type="button" id="rent_sub_drop_2" onclick="rent_tools_and_equments_section();">
                                                                            Tools and Equments  <i class="bi bi-chevron-down"></i>
                                                                        </button>
                                                                    </th>
                                                                </table>                                                          

                                                             
                                                                 

                                                               
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div id="rent_properties_section">
                                                            <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-6 border">
                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Land / Plot</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Residential
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Commercial
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Agricultural
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Industrial                                                            
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Others
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-8">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>House(s)</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent / Builder Floor"> Independent / Builder Floor
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent House / Villa"> Independent House / Villa
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Farm House"> Farm House
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Bunglow"> Bunglow
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Office Space"> Office Space
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Shop"> Shop
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="House Others"> Others
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-lg-2 border">
                                                                        <div class="text-left text-dark">
                                                                            <h6 class="pt-3"><b>Bedroom</b></h6>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="1"> 1 RK/BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="2"> 2BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="3"> 3BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="4"> 4BHK
                                                                            </div>
                                                                        </div>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>

                                                            <div id="rent_tools_and_equments_section">
                                                                <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-6 border">
                                                                    <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 border">
                                                                    <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
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



                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-lease" role="tabpanel" aria-labelledby="pills-lease-tab">
                            <div class="search-area search-area-6">
                                <div class="search-area-inner">
                                    <div class="search-contents">

                                        <form action="search_listed_properties.php" method="post">
                                            <div class="row">

                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <div class="search-fields" id="property_btn">
                                                            <button type="button" onclick="lease()">Types   
                                                                <i class="bi bi-chevron-down"></i></button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <!-- Search Data Field -->
                                                        <input type="text" name="search_data" class="search-fields fc2 pl-3" placeholder="Enter locality / landmark / City / District / Project Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                <!-- Location search Button -->
                                                        <input type="hidden" name="current_location" id="current_location" value="">
                                                         
                                                        <button type="submit" name="location_search" id="location_search" onClick="getLocation();"  class="search-button btn"  style="border:none;">
                                                            <i class="fa-solid fa-location-crosshairs" style="font-size:22px;color:#3f56ff;"></i>
                                                        </button>
                                                   
                                                        <div id="location_search_hover">
                                                            <img src="assets/img/icons/nearMeTag.png" width="100%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 ">
                                                    <div class="form-group fg2">
                                                         <!-- search Button -->
                                                        <button type="submit" name="search_lease" class="search-button btn btn-md btn-color text-white">Search</button>                                                        
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6" style="z-index: 9999;" id="lease">
                                              
                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <table>
                                                                    <th width="200px">
                                                                        <button type="button" id="lease_sub_drop" onclick="lease_properties_section();">
                                                                            Properties  <i class="bi bi-chevron-down"></i>
                                                                        </button>                                                                            
                                                                    </th>
                                                                    <th>
                                                                        <button type="button" id="lease_sub_drop_2" onclick="lease_tools_and_equments_section();">
                                                                            Tools and Equments  <i class="bi bi-chevron-down"></i>
                                                                        </button>
                                                                    </th>
                                                                </table>                                                          

                                                             
                                                                 

                                                               
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div id="lease_properties_section">
                                                                <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-6 border">
                                                                        <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Land / Plot</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Residential
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Commercial
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Agricultural
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Industrial                                                            
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Others
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>House(s)</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent / Builder Floor"> Independent / Builder Floor
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent House / Villa"> Independent House / Villa
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Farm House"> Farm House
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="
                                                                                        " value="Bunglow"> Bunglow
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Office Space"> Office Space
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Shop"> Shop
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="House Others"> Others
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="col-lg-2 border">
                                                                        
                                                                        <div class="text-left text-dark">
                                                                            <h6 class="pt-3"><b>Bedroom</b></h6>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="1 RK/BHK"> 1 RK/BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="2BHK"> 2BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="3BHK"> 3BHK
                                                                            </div>
                                                                            <div class="pt-2">
                                                                                <input type="radio" name="bedroom_bhk" value="4BHK"> 4BHK
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                              
                                                                </div>
                                                            </div>

                                                            <div id="lease_tools_and_equments_section">
                                                                <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-6 border">
                                                                    <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 border">
                                                                    <div class="row">
                                                                            <div class="col-lg-5">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
                                                                                    </div>
                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>Title</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Residential"> Example 1
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Commercial"> Example 2
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Agricultural"> Example 3
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Industrial"> Example 4                                                        
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_land_plot" value="Land / Plot Others"> Example 5
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

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pg" role="tabpanel" aria-labelledby="pills-pg-tab">
                            <div class="search-area search-area-6">
                                <div class="search-area-inner">
                                    <div class="search-contents">

                                        <form action="search_listed_properties.php" method="post">
                                            <input type="hidden" name="select_property_list" value="PG" readonly>
                                            <div class="row">

                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <div class="search-fields" id="property_btn">
                                                            <button type="button" onclick="pg()">Types   
                                                                <i class="bi bi-chevron-down"></i></button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <!-- Search Data Field -->
                                                        <input type="text" name="search_data" class="search-fields fc2 pl-3" placeholder="Enter locality / landmark / City / District / Project Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                <!-- Location search Button -->
                                                        <input type="hidden" name="current_location" id="current_location" value="">
                                                         
                                                        <button type="submit" name="location_search" id="location_search" onClick="getLocation();"  class="search-button btn"  style="border:none;">
                                                            <i class="fa-solid fa-location-crosshairs" style="font-size:22px;color:#3f56ff;"></i>
                                                        </button>
                                                   
                                                        <div id="location_search_hover">
                                                            <img src="assets/img/icons/nearMeTag.png" width="100%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 ">
                                                    <div class="form-group fg2">
                                                         <!-- search Button -->
                                                        <button type="submit" name="search_pg" class="search-button btn btn-md btn-color text-white">Search</button>                                                        
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6" style="z-index: 9999;" id="pg">
                                              
                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <table>
                                                                    <th width="200px">
                                                                        <button type="button" id="pg_sub_drop" onclick="pg_properties_section();">
                                                                            Properties  <i class="bi bi-chevron-down"></i>
                                                                        </button>                                                                            
                                                                    </th>
                                                                </table>                                                          

                                                             
                                                                 

                                                               
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div id="pg_properties_section">
                                                                <div class="row" style="border:3px solid #3f56ff;">
                                                                    <div class="col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-lg-7">
                                                                                <div class="text-left text-dark">
                                                                                    <h6 class="pt-3"><b>House(s)</b></h6>
                                                                                                                                
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent / Builder Floor"> Independent / Builder Floor
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Independent House / Villa"> Independent House / Villa
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Farm House"> Farm House
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Bunglow"> Bunglow
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Office Space"> Office Space
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="Shop"> Shop
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <input type="radio" name="property_type_house" value="House Others"> Others
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
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
<!--
                        <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab">
                            <div class="search-area search-area-6">
                                <div class="search-area-inner">
                                    <div class="search-contents">

                                        <form action="search_listed_properties.php" method="post">
                                            <input type="hidden" name="select_property_list" value="Project" readonly>
                                            <div class="row">

                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                        <div class="search-fields" id="property_btn">
                                                            <button type="button" onclick="project()">Types   
                                                                <i class="bi bi-chevron-down"></i></button>
                                                        </div>                                                                  
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                                       
                                                        <input type="text" name="search_data" class="search-fields fc2 pl-3" placeholder="Enter locality / landmark / City / District / Project Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                    <div class="form-group">
                                              
                                                        <input type="hidden" name="current_location" id="current_location" value="">
                                                         
                                                        <button type="submit" name="location_search" id="location_search" onClick="getLocation();"  class="search-button btn"  style="border:none;">
                                                            <i class="fa-solid fa-location-crosshairs" style="font-size:22px;color:#3f56ff;"></i>
                                                        </button>
                                                   
                                                        <div id="location_search_hover">
                                                            <img src="assets/img/icons/nearMeTag.png" width="100%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 ">
                                                    <div class="form-group fg2">
                                                      
                                                        <button type="submit" name="search_project" class="search-button btn btn-md btn-color text-white">Search</button>                                                        
                                                    </div>
                                                </div>



                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6" style="z-index: 9999;" id="project">
                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <h5>Properties</h5>
                                                        </div>
                                                        <div class="col-lg-5 border">
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                    <div class="text-left text-dark">
                                                                        <h6 class="pt-3"><b>Land / Plot</b></h6>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_residential" value="Residential"> Residential
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_commercial" value="Commercial"> Commercial
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_agricultural" value="Agricultural"> Agricultural
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_industrial" value="Industrial"> Industrial                                                            
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_land_plot_others" value="Land / Plot Others"> Others
                                                                        </div>
                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="text-left text-dark">
                                                                        <h6 class="pt-3"><b>House(s)</b></h6>
                                                                                                                       
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_independent_builder" value="Independent / Builder Floor"> Independent / Builder Floor
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_House_villa" value="Independent House / Villa"> Independent House / Villa
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_farm_house" value="Farm House"> Farm House
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_bunglow" value="Bunglow"> Bunglow
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_office_space" value="Office Space"> Office Space
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_shop" value="Shop"> Shop
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <input type="checkbox" name="property_type_house_others" value="House Others"> Others
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>


                                                        <div class="col-lg-2 border">
                                                            <div class="text-left text-dark">
                                                                <h6 class="pt-3"><b>Budget</b></h6>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="budget_50LK" value="5000000"> 0 – 50 Lack
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="budget_100LK" value="10000000"> 50 – 100 Lack
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="budget_500LK" value="50000000"> 100 – 500 Lack
                                                                </div>                                                                
                                                            </div>

                                                            <div class="text-left text-dark">
                                                                <h6 class="pt-3"><b>Bedroom</b></h6>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="bedroom_1bhk" value="1 RK/BHK"> 1 RK/BHK
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="bedroom_2bhk" value="2BHK"> 2BHK
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="bedroom_3bhk" value="3BHK"> 3BHK
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox" name="bedroom_4bhk" value="4BHK"> 4BHK
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 border">
                                                            <div class="text-left text-dark">
                                                                <h6 class="pt-3"><b>Construction Status</b></h6>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="const_status_under_construction" value="Under Construction"> Under Construction
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="const_status_ready_move" value="Ready to move"> Ready to move
                                                                </div>
                                                                <h6 class="pt-3"><b>Label</b></h6>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="lable_best_deal" value="Best Deal"> Best Deal
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="lable_direct_emi" value="Direct EMI"> Direct EMI
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="lable_hot_offer" value="Hot Offer"> Hot Offer
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="lable_sold" value="Sold"> Sold
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 border">
                                                            <div class="text-left text-dark">
                                                                <h6 class="pt-3"><b>Posted by</b></h6>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="post_by_owner" value="Owner"> Owner
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="post_by_builder" value="Builder"> Builder
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="post_by_dealer" value="Dealer"> Dealer
                                                                </div>
                                                                <div class="pt-2">
                                                                    <input type="checkbox"  name="post_by_agent_broker" value="Agent / Broker"> Agent / Broker
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <h5>Rental Services</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <h5>Building Material Supplier</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <h5>Building Making Service Provider</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row bg-white pt-2 pb-4">
                                                        <div class="col-lg-12">
                                                            <h5>Legal Service Provider</h5>
                                                        </div>
                                                    </div>
                                                    


                                                </div>


                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
    -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Welcome To 3 Bigha</h1>
        
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box-2 light-bg">
                    <a href="#" class="thumbnail-photo">
                        <div class="tag-for">For Selling</div>
                        <img src="assets/img/property/img-12.jpg" alt="image" class="img-fluid">
                    </a>
                    <div class="content light-bg transition">
                        <h4 class="title">
                            <a href="properties-details.php">Sweet Family Home</a>
                        </h4>
                        <p class="text-justify">we provide top-notch selling services to help you sell your home with ease. Our team of seasoned professionals has years of experience in the industry and is dedicated to providing you with the best guidance and support throughout the selling process.</p>
                        <div class="transition clearfix">
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bath
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box-2 light-bg">
                    <a href="#" class="thumbnail-photo">
                        <div class="tag-for">For Renting</div>
                        <img src="assets/img/property/img-13.jpg" alt="image" class="img-fluid">
                    </a>
                    <div class="content light-bg transition">
                        <h4 class="title">
                            <a href="properties-details.php">Masons Villas</a>
                        </h4>
                        <p class="text-justify">we offer a wide range of rental services to help you find the perfect home. Our team of expert professionals is dedicated to providing top-notch service to our clients.expert services to make your home buying process seamless and stress-free.</p>
                        <div class="transition clearfix">
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bath
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box-2 light-bg">
                    <a href="#" class="thumbnail-photo">
                        <div class="tag-for">For Buying</div>
                        <img src="assets/img/property/img-14.jpg" alt="image" class="img-fluid">
                    </a>
                    <div class="content light-bg transition">
                        <h4 class="title">
                            <a href="properties-details.php">Beautiful Single Home</a>
                        </h4>
                        <p class="text-justify">we offer a comprehensive range of buying services to help you find the perfect home. Our team of experienced professionals is committed to providing personalized and expert services to make your home buying process seamless and stress-free.</p>
                        <div class="transition clearfix">
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bath
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Properties end -->





<!-- Services 2 start -->
<div class="services-2 overview-bgi">
    <div class="container-fluid">
        <div class="row pb-4">
            <div class="col-lg-12 align-self-center wow fadeInLeft delay-04s">
                <div class="main-title main-title-2">
                    <h1 class="text-center">Why 3 Bigha Is The Perfect Choice? </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 wow fadeInRight delay-04s">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">1</div>
                            <div style="position: absolute">
                                <img src="assets/img/1.png" width="50px" alt="">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.php">Perfect Solution For Designers And Agents</a>
                                </h3>
                                <p class="pb-4">As a real estate company, we understand that both designers and agents have unique needs and requirements when it comes to their work.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">2</div>
                            <div style="position: absolute">
                                <img src="assets/img/2.png" width="50px" alt="">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.php">Design Custom Leads Capture Forms</a>
                                </h3>
                                <p>At our real estate company, we understand the importance of capturing leads effectively. That's why we design custom lead capture forms to help you gather information about potential clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="services-info">
                            <div class="number">3</div>
                            <div style="position: absolute">
                                <img src="assets/img/3.png" width="50px" alt="">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="services.php">Customer Relationship Management</a>
                                </h3>
                                <p>Customer Relationship Management (CRM) is a key aspect of our real estate company. We understand the importance of building and maintaining strong relationships with our clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services 2 end -->




<!-- Featured properties start -->
<div class="featured-properties content-area-7">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Properties For Sale</h1>
           
        </div>
        <div class="row slick-fullwidth wow fadeInUp delay-04s">


            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>650<span>/month</span> </div>
                            <img src="assets/img/property/img-4.jpg" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-4.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-4.jpg" class="hidden"></a>
                                <a href="assets/img/property/img-4.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php">Real Luxury Villa</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>

         
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>650<span>/month</span> </div>
                            <img src="assets/img/property/img-2.jpg" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-2.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-3.jpg" class="hidden"></a>
                                <a href="assets/img/property/img-4.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php">Masons Villas</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Rent</div>
                            <div class="plan-price"><sup>$</sup>650<span>/month</span> </div>
                            <img src="assets/img/property/img-3.jpg" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-3.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-2.jpg" class="hidden"></a>
                                <a href="assets/img/property/img-4.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php">Sweet Family Home</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>820<span>/month</span> </div>
                            <img src="assets/img/property/img-1.jpg" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-1.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-3.jpg" class="hidden"></a>
                                <a href="assets/img/property/img-2.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php">Relaxing Apartment</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i>
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 day ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Rent</div>
                            <div class="plan-price"><sup>$</sup>480<span>/month</span> </div>
                            <img src="assets/img/property/img-5.jpg" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-5.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-3.jpg" class="hidden"></a>
                                <a href="assets/img/property/img-4.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php">Beautiful Single Home</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
            <div class="slick-slide-item">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php" class="property-img">
                            <div class="listing-badges">
                                <span class="featured">Featured</span>
                            </div>
                            <div class="tag-for">For Sale</div>
                            <div class="plan-price"><sup>$</sup>640<span>/month</span> </div>
                            <img src="assets/img/property/img-6.jpg" alt="property-box" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="assets/img/property/img-6.jpg" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="assets/img/property/img-5.jpg" class="hidden"></a>
                                <a href="assets/img/property/img-4.jpg" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php">Modern Family Home</a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php">
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> 3 Bedrooms
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> 2 Bathrooms
                            </li>
                            <li>
                                <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                            </li>
                            <li>
                                <i class="flaticon-car-repair"></i> 1 Garage
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> Jhon Doe
                        </a>
                        <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                    </div>
                </div>
            </div>
         




            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Counters start -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp delay-04s">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">500</h1>
                    <h5>Lines of Sale</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInDown delay-04s">
                <div class="counter-box">
                    <i class="flaticon-badge"></i>
                    <h1 class="counter">254</h1>
                    <h5>Listings For Rent</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp delay-04s">
                <div class="counter-box">
                    <i class="flaticon-call-center-agent"></i>
                    <h1 class="counter">510</h1>
                    <h5>Agents</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInDown delay-04s">
                <div class="counter-box">
                    <i class="flaticon-job"></i>
                    <h1 class="counter">94</h1>
                    <h5>Brokers</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- services 3 start -->
<div class="services-3 content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
           
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-hotel-building"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Apartments Clean</a>
                        </h5>
                        <p>Dust-free, stress-free apartment living.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-house"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Houses</a>
                        </h5>
                        <p>Turning houses into homes, one memory at a time.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-call-center-agent"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Support 24/7</a>
                        </h5>
                        <p>Always here for you, 24/7 support</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="services-info-3 df-box">
                    <div class="icon">
                        <i class="flaticon-office-block"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services.php">Commercial</a>
                        </h5>
                        <p>Elevate your business with our commercial solutions</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- services 3 end -->












<!-- Testimonial 2 start -->
<div class="testimonial-2 content-area-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1>Our Testimonial</h1>

                </div>
            </div>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonials-inner">
                        <div class="user">
                            <a href="#">
                                <img class="media-object" src="assets/img/avatar/avatar-2.jpg" alt="user">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Creative Director, india
                            </h3>
                            <p>Office Manager</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonials-inner">
                        <div class="user">
                            <a href="#">
                                <img class="media-object" src="assets/img/avatar/avatar-2.jpg" alt="user">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Pitarshon Roky
                            </h3>
                            <p>Web Designer, Uk</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonials-inner">
                        <div class="user">
                            <a href="#">
                                     <img class="media-object" src="assets/img/avatar/avatar-2.jpg" alt="user">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Maikel Alisa
                            </h3>
                            <p>Creative Director</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem industry's standard dummy text everLorem.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->



<!-- Footer-->
<?php  include ("website_footer.php"); ?>
<!-- Footer-->



<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Properties
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
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
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-8.jpg" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/img-9.jpg" alt="Test ALT">
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
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
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
                                <h3>Overview</h3>
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
                            <div class="ratings-2">
                                <span class="ratings-box">4.5/5</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>( 7 Reviews )</span>
                            </div>
                            <a href="properties-details.php" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.php">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.php">Properties List</a></li>
                    <li class="menu-item"><a href="properties-details.php">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.php">Blog</a></li>
                    <li class="menu-item"><a href="about.php">About  US</a></li>
                    <li class="menu-item"><a href="contact-3.php">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<div class="opening_popup">

<button id="closeing_popup">&times;</button>
    <form action="">
        <div class="row">
            <h2>NEWSLETTER</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio fugiat alias iure qui, commodi minima magni ullam aliquam dignissimos?
            </p>
            <div class="col-lg-12 form-group">
                <input type="text" class="form-control" Placeholder="Enter your name..">
            </div>
            <div class="col-lg-9 form-group">
                <input type="text" class="form-control" Placeholder="Enter mobile no..">
            </div>
            <div class="col-lg-3 form-group">
                <button type="submit" class="btn btn-primary">Send OTP</button> 
            </div>
            <div class="col-lg-12 form-group">
                <input type="text" class="form-control" Placeholder="Enter OTP..">
            </div>
            <div class="col-lg-12 form-group">
                <input type="text" class="form-control" Placeholder="Enter Location">
            </div>
            <div class="col-lg-12 form-group">
            <button type="submit" class="btn btn-primary submit">Submit</button>    
            </div>
                          
        </div>

    </form>

</div>


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


<script src="assets/js/particles.min.js"></script>
<script src="assets/js/dropzone.js"></script>

<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/leaflet-providers.js"></script>
<script src="assets/js/leaflet.markercluster.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/maps.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>

<script>


                                                    


    function project() {
      var x = document.getElementById("project");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }


    // ////////////// Buy Types //////////////////////////////
    function buy() {
    var x =document.getElementById("buy");
    if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    var buy_sub_drop_g=document.getElementById("buy_sub_drop");
    buy_sub_drop_g.style.borderBottom = "5px solid #3f56ff";
    buy_sub_drop_g.style.color = "#3f56ff";

    var buy_building_material_section_g =document.getElementById("buy_building_material_section"); 
    buy_building_material_section_g.style.display = "none";

    function buy_properties_section() {
        var buy_sub_drop =document.getElementById("buy_sub_drop");
    var buy_building_material_section =document.getElementById("buy_building_material_section");   
    var buy_properties_section =document.getElementById("buy_properties_section");
    var buy_sub_drop_2 =document.getElementById("buy_sub_drop_2");

    buy_properties_section.style.display = "block";
    buy_sub_drop.style.borderBottom = "5px solid #3f56ff";
    buy_sub_drop.style.color = "#3f56ff";

    buy_building_material_section.style.display = "none";
    buy_sub_drop_2.style.borderBottom = "0px solid #3f56ff";
    buy_sub_drop_2.style.color = "#000";

    }

    function buy_building_material_section() {
    var buy_sub_drop =document.getElementById("buy_sub_drop");
    var buy_building_material_section =document.getElementById("buy_building_material_section");   
    var buy_properties_section =document.getElementById("buy_properties_section");
    var buy_sub_drop_2 =document.getElementById("buy_sub_drop_2");

    buy_properties_section.style.display = "none";
    buy_sub_drop.style.borderBottom = "0px solid #3f56ff";
    buy_sub_drop.style.color = "#000";

    buy_building_material_section.style.display = "block";
    buy_sub_drop_2.style.borderBottom = "5px solid #3f56ff";
    buy_sub_drop_2.style.color = "#3f56ff";

    }



   // ////////////// Rent Types //////////////////////////////

   function rent() {
      var x = document.getElementById("rent");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }


    var rent_sub_drop_g=document.getElementById("rent_sub_drop");
   rent_sub_drop_g.style.borderBottom = "5px solid #3f56ff";
   rent_sub_drop_g.style.color = "#3f56ff";

    var rent_tools_and_equments_section_g =document.getElementById("rent_tools_and_equments_section"); 
    rent_tools_and_equments_section_g.style.display = "none";


   function rent_properties_section() {
    var rent_sub_drop =document.getElementById("rent_sub_drop");
    var rent_tools_and_equments_section =document.getElementById("rent_tools_and_equments_section");   
    var rent_properties_section =document.getElementById("rent_properties_section");
    var rent_sub_drop_2 =document.getElementById("rent_sub_drop_2");

    rent_properties_section.style.display = "block";
    rent_sub_drop.style.borderBottom = "5px solid #3f56ff";
    rent_sub_drop.style.color = "#3f56ff";

    rent_tools_and_equments_section.style.display = "none";
    rent_sub_drop_2.style.borderBottom = "0px solid #3f56ff";
    rent_sub_drop_2.style.color = "#000";

    }

    function rent_tools_and_equments_section() {
    var rent_sub_drop =document.getElementById("rent_sub_drop");
    var rent_tools_and_equments_section =document.getElementById("rent_tools_and_equments_section");   
    var rent_properties_section =document.getElementById("rent_properties_section");
    var rent_sub_drop_2 =document.getElementById("rent_sub_drop_2");

    rent_properties_section.style.display = "none";
    rent_sub_drop.style.borderBottom = "0px solid #3f56ff";
    rent_sub_drop.style.color = "#000";

    rent_tools_and_equments_section.style.display = "block";
    rent_sub_drop_2.style.borderBottom = "5px solid #3f56ff";
    rent_sub_drop_2.style.color = "#3f56ff";

    }
 // ////////////// Lease Types //////////////////////////////

 function lease() {
      var x = document.getElementById("lease");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }


    var lease_sub_drop_g=document.getElementById("lease_sub_drop");
   lease_sub_drop_g.style.borderBottom = "5px solid #3f56ff";
   lease_sub_drop_g.style.color = "#3f56ff";

    var lease_tools_and_equments_section_g =document.getElementById("lease_tools_and_equments_section"); 
    lease_tools_and_equments_section_g.style.display = "none";


   function lease_properties_section() {
    var lease_sub_drop =document.getElementById("lease_sub_drop");
    var lease_tools_and_equments_section =document.getElementById("lease_tools_and_equments_section");   
    var lease_properties_section =document.getElementById("lease_properties_section");
    var lease_sub_drop_2 =document.getElementById("lease_sub_drop_2");

    lease_properties_section.style.display = "block";
    lease_sub_drop.style.borderBottom = "5px solid #3f56ff";
    lease_sub_drop.style.color = "#3f56ff";

    lease_tools_and_equments_section.style.display = "none";
    lease_sub_drop_2.style.borderBottom = "0px solid #3f56ff";
    lease_sub_drop_2.style.color = "#000";

    }

    function lease_tools_and_equments_section() {
    var lease_sub_drop =document.getElementById("lease_sub_drop");
    var lease_tools_and_equments_section =document.getElementById("lease_tools_and_equments_section");   
    var lease_properties_section =document.getElementById("lease_properties_section");
    var lease_sub_drop_2 =document.getElementById("lease_sub_drop_2");

    lease_properties_section.style.display = "none";
    lease_sub_drop.style.borderBottom = "0px solid #3f56ff";
    lease_sub_drop.style.color = "#000";

    lease_tools_and_equments_section.style.display = "block";
    lease_sub_drop_2.style.borderBottom = "5px solid #3f56ff";
    lease_sub_drop_2.style.color = "#3f56ff";

    }

    // ////////////// PG Types //////////////////////////////

    function pg() {
      var x = document.getElementById("pg");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    var pg_sub_drop_g=document.getElementById("pg_sub_drop");
    pg_sub_drop_g.style.borderBottom = "5px solid #3f56ff";
    pg_sub_drop_g.style.color = "#3f56ff";


    // ////////////// PG Types //////////////////////////////





    

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
    
     <script>
        /* ============Body On load========================*/
        /*
        window.addEventListener("load", function(){
            setTimeout(
                function open(event){
                    document.querySelector(".opening_popup").style.display = "block";
                },
                1000
            )
        });
        document.querySelector("#closeing_popup").addEventListener("click", function(){
            document.querySelector(".opening_popup").style.display = "none";
        });
        */
    </script>
</body>

</html>