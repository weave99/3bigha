<?php
include_once("db/conn.php");
require_once("db/user_sequre.php");
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
    <style>
        input:required::placeholder, textarea:required::placeholder{
        color: red;
        opacity: 1;
        }
    </style>
</head>

<body>

    <!--Header -->
    <?php  include ("website_header.php"); ?>
    <!--Header -->

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Post Property</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Post Property</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- User page start -->
    <div class="user-page submit-property pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="heading-3">Multiple properties can be submitted only if the location, amenities, USP(s), Overlookings and location advantages are same.</h3>
                    <h2>(Sell / Rent / Lease your property in simple steps)</h2>
                    <div class="search-area contact-2 pt-3">
                        <div class="search-area-inner">
                            <div class="search-contents ">

                                <form method="GET">



                                    <h3 class="heading-3">Tell us about your property</h3>


                                    <div class="row mb-30">

                                        <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Name of the Project</label>
                                            <input type="text" name="" cols="" class="form-control"
                                                    placeholder="">

                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                            <h3 class="heading-3">Basic Details</h3>
                                            <h5>Location Details</h5>
                                        </div>
                                        <!-- Connect to  database-->
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="State *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="District *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="City *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="Locality *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="Sub Locality (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="Apartment / Society (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property-title" class="form-control"
                                                    placeholder="Plot Nos. (optional)">
                                            </div>
                                        </div>






                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <input type="text" name="" class="form-control" placeholder="Share the link of the Location of your property">
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <h5 style="text-align:center; padding-top:1rem;">Or</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="current_location" id="current_location" class="form-control" placeholder="Please click find your current location"> 
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="button" class="btn btn-primary mt-2" name="btn" value="Find Your Location" onClick="getLocation();" >
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <h6>Are the properties in a gated society ?</h6>                                      
                                                        <div>
                                                            <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                                value="Yes">
                                                            <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                            <input type="radio" class="checkoption" id="No" name="No"
                                                                value="Rent">
                                                            <label for="No">No</label>&nbsp;&nbsp;
                                                        </div>
                                                    </div>
                                                </div>  
                                                                                             
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="property-title" class="form-control"
                                                            placeholder="If yes, name the society">
                                                    </div>
                                                </div>                               
                                            </div>
                                        </div>






                                    <div class="col-lg-12 col-md-12 pt-4">
                                            <h3 class="heading-3">Add amenities / unique features</h3>

                                            <h5 class="heading-2">Amenities</h5>

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value="maintenance_staff"
                                                                id="maintenance_staff">
                                                            <label class="form-check-label" for="maintenance_staff">
                                                                Maintenance Staff
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="rain_harvesting">
                                                            <label class="form-check-label" for="rain_harvesting">
                                                                Rain water harvesting
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="solar_power_plan">
                                                            <label class="form-check-label" for="solar_power_plan">
                                                                Solar Power Plant 
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="water_storage">
                                                            <label class="form-check-label" for="water_storage">
                                                                Water Storage
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="vaastu_complaint">
                                                            <label class="form-check-label" for="vaastu_complaint">
                                                                Feng Shui / Vaastu Complaint
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="solar_street_light">
                                                            <label class="form-check-label" for="solar_street_light">
                                                                Solar Street light
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="running_weater_facility">
                                                            <label class="form-check-label" for="running_weater_facility">
                                                                Running Water facility
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="others_1">
                                                            <label class="form-check-label" for="others_1">
                                                                Others (please specify)
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="proper_drainage_system">
                                                            <label class="form-check-label" for="proper_drainage_system">
                                                                Proper Drainage System
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                            <h5 class="heading-2">Overlooking</h5>


                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="pool">
                                                            <label class="form-check-label" for="pool">
                                                                Pool
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="park_garden">
                                                            <label class="form-check-label" for="park_garden">
                                                                Park / Garden
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="club">
                                                            <label class="form-check-label" for="club">
                                                                Club
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="main_road">
                                                            <label class="form-check-label" for="main_road">
                                                                Main Road
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="others_2">
                                                            <label class="form-check-label" for="others_2">
                                                                Others (please specify)

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>


                                        <div class="col-lg-12">

                                          

                                            



                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                        <h5 class="heading-3">Location Advantage (highlight the nearby landmarks)</h5>
                                                </div>


                                                <table class="table table-bordered" id="table_metro_station">
                                                    <tr>
                                                        <th class="col-lg-7">Landmarks (mention the names) <span class="text-danger">*</span></th>
                                                        <th class="col-lg-4">Distance from the property (km / mtr) <span class="text-danger">*</span></th>
                                                        <th class="col-lg-1"></th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="metro_station_name[]" class="form-control"
                                                                placeholder="Close to metro station ( please write the name – optional ) ">
                                                        </td>
                                                        <td>
                                                            <input type="text"  name="metro_station_distance[]" class="form-control" placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td><input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_metro_station_btn" id="add_metro_station_btn" value="Add"></td>
                                                    </tr>
                                                </table>

                                                 <table class="table table-bordered" id="table_school_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="school_name[]" class="form-control" 
                                                            placeholder="Close to Schools ( please write the name – optional ) ">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="school_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_school_distance_btn" id="add_school_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                </table>

                                                 <table class="table table-bordered" id="table_hospital_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="hospital_name[]" class="form-control" 
                                                            placeholder="Close to Hospital / Nuring Homes ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="hospital_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_hospital_distance_btn" id="add_hospital_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>

                                                 <table class="table table-bordered" id="table_railway_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="railway_name[]" class="form-control" 
                                                            placeholder="Close to Railway station ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="railway_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_railway_distance_btn" id="add_railway_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>


                                                 <table class="table table-bordered" id="table_airport_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="airport_name[]" class="form-control" 
                                                            placeholder="Close to Airport ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="airport_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_airport_distance_btn" id="add_airport_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>

                                                 <table class="table table-bordered" id="table_mall_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="mall_name[]" class="form-control" 
                                                            placeholder="Close to Mall ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="mall_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_mall_distance_btn" id="add_mall_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>

                                                 <table class="table table-bordered" id="table_highway_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="highway_name[]" class="form-control" 
                                                            placeholder="Close to Highway ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="highway_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_highway_distance_btn" id="add_highway_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>

                                                 <table class="table table-bordered" id="table_religious_establishment_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="religious_establishment_name[]" class="form-control" 
                                                            placeholder="Close to any religious Establishment like Temple / Church / Mosque etc. ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="religious_establishment_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_religious_establishment_distance_btn" id="add_religious_establishment_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>
                                                 
                                                 <table class="table table-bordered" id="table_others_distance">
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="others_name[]" class="form-control" 
                                                            placeholder="Others (please write the name with its activity – optional)">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="others_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_others_distance_btn" id="add_others_distance_btn" value="Add">
                                                        </td>
                                                    </tr>
                                                 </table>

  
   
                             


                                                <div class="col-lg-12">
                                                    <h5 class="heading-2">Suggest a property feature</h5>
                                                    <div class="form-group message">
                                                        <label>(adding description will increase your
                                                            visibility)</label>
                                                        <textarea class="form-control" cols="30" rows="10"
                                                            name="message"
                                                            placeholder="Enter your USP’s (unique selling proposition) here."></textarea>
                                                    </div>
                                                </div>



                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="">Master Plan of the Project</label>
                                                            <div class="form-group">
                                                                <!-- Only PDF Upload -->
                                                                <input type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label for="">Image covering the whole project</label>
                                                            <div class="form-group">
                                                                 <!-- Only image Upload -->
                                                                <input type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label for="">Image covering the whole project</label>
                                                            <div class="form-group">
                                                                <!-- Only image Upload -->
                                                                <input type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label for="">Videography of the whole project</label>
                                                            <div class="form-group">
                                                                <!-- Only video Upload -->
                                                                <input type="file" class="form-control">
                                                            </div>
                                                        </div>                                            
                                                    </div>
                                                </div>




                                                <div class="col-lg-12">
                                                    <h5 class="heading-3">Please provide correct information, otherwise your listing might be blocked.</h5>
                                                </div>

                                            </div>

                                            <div class="row pt-5">
                                                <div class="col-lg-12 ">
                                                    <a href="multiple_post_property_2.php" class="btn btn-4">Next</a>
                                                </div>
                                            </div>

                                        </div>

































                                        <!--==============12===============-->




                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- User page end -->


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
    <script src="assets/js/app.js"></script>
    <script src="assets/js/dynamic_form_customize.js"></script>
</body>

</html>