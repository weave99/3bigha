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
    </style>s
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
                    <div class="search-area contact-2 pt-3">
                        <div class="search-area-inner">
                            <div class="search-contents ">

                                <form method="GET">




                                    <div class="row mb-30">



                                    <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <?php 
                                                 //`user_id`, `designation`, `firm_company_name`, `rera_no`, `name`, `mobile_no`, 
                                                 //`user_name`, `password` SELECT * FROM `users` WHERE 1

                                                    $user_sql="SELECT * FROM users WHERE user_name='$session_user_name'";
                                                    $user_query=mysqli_query($conn,$user_sql);
                                                    if($fetch=mysqli_fetch_array($user_query)){
                                                        $designation=$fetch['designation'];
                                                        $name=$fetch['name']; 
                                                        $firm_company_name=$fetch['firm_company_name'];  
                                                    }
                                                 ?>
                                                <label> I / We, 
                                                    <?php 
                                                    if($designation=='Builder'){
                                                         
                                                         echo $firm_company_name;
                                                    }
                                                    else{
                                                        echo $name;
                                                    }
                                                    ?>, want to list property to –</label>

                                                    
                                                
                                                <div>
                                                    <input type="radio" class="checkoption" id="Sell" name="Sell"
                                                        value="Sell">
                                                    <label for="Sell">Sell</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="Rent" name="rent"
                                                        value="Rent">
                                                    <label for="Rent">Rent</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="Lease" name="lease"
                                                        value="Lease">
                                                    <label for="Lease">Lease</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="Paying Guest"
                                                        name="Paying Guest" value="Lease">
                                                    <label for="Paying Guest">Paying Guest</label>

                                                </div>

                                            </div>
                                            
                                        </div>


                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Property Type <span class="text-danger">*</span></label>
                                                        <select class="selectpicker search-fields" name="">
                                                        <option selected="selected" value="0">Select Option</option>

                                                        <optgroup label="Land / Plot">
                                                       
                                                            <option>Residential</option>
                                                            <option>Commercial</option>
                                                            <option>Agricultural</option>
                                                            <option>Industrial</option>
                                                            <option value="land_plot_others" >Others</option>
                                                        </optgroup>

                                                        <optgroup label="House(s)">
                                                            <option>Independent / Builder Floor</option>
                                                            <option>Independent House / Villa</option>
                                                            <option>Farm House</option>
                                                            <option>Bunglow</option>
                                                            <option>Office Space</option>
                                                            <option>Shop</option>
                                                            <option value="houses_others" >Others</option>
                                                        </optgroup>

                                                        </select>
                                                    </div>
                                                </div>                                         
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <h3 class="">Property Profile</h3>
                                        </div>
                                        <div class="col-lg-10 col-md-2">
                                            <div class="form-group">
                                                <label>Tell us about your property</label>
                                                <input type="text" name="" cols="" class="form-control"
                                                    placeholder="Plot Area *" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <label>&nbsp;</label>
                                            <select class="selectpicker search-fields" name="" required>
                                                <option selected><span style="color:red;">Choose</span> </option>
                                                <option>Sq. ft.</option>
                                                <option>Sq. Mtr.</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Property Dimension (optional)</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" name="" class="form-control"
                                                    placeholder="Length of Plot *" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <label>&nbsp;</label>
                                            <select class="selectpicker search-fields" name="" required>
                                                <option selected>Choose</option>
                                                <option>Foot</option>
                                                <option>Meter</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" name="" class="form-control"
                                                    placeholder="Breadth of Plot *" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <label>&nbsp;</label>
                                            <select class="selectpicker search-fields" name="" required>
                                                <option selected>Choose</option>
                                                <option>Foot</option>
                                                <option>Meter</option>
                                            </select>
                                        </div>



                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Is there a boundary / guard wall around the property?</label>
                                                <div>

                                                    <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                        value="Yes">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="No" name="No"
                                                        value="No">
                                                    <label for="No">No</label>&nbsp;&nbsp;


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-5">
                                            <div class="form-group">
                                                <label>Nos. of open sides</label>
                                                <div>

                                                    <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                        value="Yes">
                                                    <label for="Yes">1</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="No" name="No"
                                                        value="No">
                                                    <label for="No">2</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                        value="Yes">
                                                    <label for="Yes">3</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="No" name="No"
                                                        value="No">
                                                    <label for="No">3+</label>&nbsp;&nbsp;

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Any construction done on this property?</label>
                                                <div>

                                                    <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                        value="Yes">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="No" name="No"
                                                        value="No">
                                                    <label for="No">No</label>&nbsp;&nbsp;


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Possession by</label>
                                                <select class="selectpicker search-fields" name="">
                                                    <option selected>Expected by</option>
                                                    <option>Immediate</option>
                                                    <option>Within 3 months</option>
                                                    <option>Within 6 months</option>
                                                    <option>By 2024</option>
                                                    <option>By 2025</option>
                                                    <option>By 2026</option>
                                                    <option>By 2027</option>
                                                    <option>By 2028</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 pt-4">
                                            <h5><br> You can upload only the property Images.</h5>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                <label for="">Layout / Sketch Map</label>
                                                    <div class="form-group">
                                                        <!-- Only PDF Upload -->
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                <label for="">Image of the Particular Property</label>
                                                    <div class="form-group">
                                                         <!-- Only image Upload -->
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                <label for="">Image of the Particular Property</label>
                                                    <div class="form-group">
                                                         <!-- Only image Upload -->
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                <label for="">Videography of the Property</label>
                                                    <div class="form-group">
                                                         <!-- Only Video Upload -->
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>


                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Price Details</label>
                                                <input type="text" name="" class="form-control"
                                                    placeholder="₹ Expected Price">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" name="" class="form-control"
                                                    placeholder="₹ Price per sq. ft. / mtr.">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="All inclusive Price">
                                                            <label class="form-check-label" for="All inclusive Price">
                                                                All inclusive Price
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="air-condition">
                                                            <label class="form-check-label" for="air-condition">
                                                                Tax & Govt. charges excluded
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="air-condition">
                                                            <label class="form-check-label" for="air-condition">
                                                                Price Negotiable
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <h3 class="heading-3">What makes your property unique?</h3>
                                                    <div class="form-group message">
                                                        <label>(adding description will increase your
                                                            visibility)</label>
                                                        <textarea class="form-control" cols="30" rows="10"
                                                            name="message"
                                                            placeholder="Share some details about your property like spacious room, well maintained facilities."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        
                                        <div class="col-lg-12 col-md-12 pt-4">
                                            <h2 class="heading-3">Other Features</h2>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Ownership</label>
                                                <select class="selectpicker search-fields" name="">
                                                    <option selected>Select option</option>
                                                    <option>Freehold</option>
                                                    <option>Lease hold</option>
                                                    <option>Co-op. Society</option>
                                                    <option>Power of Attorney</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Which authority is the property approved by?</label>
                                                <input type="text" name="" class="form-control"
                                                    placeholder="Local authority (please write the name of the authority if it is known to you) - optional">

                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12 pt-4">
                                            <h5 class="heading-2">Other Facilities</h5>

                                            <div class="row">


                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <label>Property facing</label>
                                                        <select class="selectpicker search-fields" name="Status">
                                                            <option selected>Select Options</option>
                                                            <option>North</option>
                                                            <option>South</option>
                                                            <option>East</option>
                                                            <option>West</option>
                                                            <option>North-East</option>
                                                            <option value="">North-West</option>
                                                            <option value="">South-East</option>
                                                            <option value="">South-West</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                    <label class="pb-3">&nbsp;</label> 
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="air-condition">
                                                            <label class="form-check-label" for="air-condition">
                                                                Corner Property ?
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="row"  id="details_facing_road">
                                                <table class="table table-bordered" id="table_facing_road">
                                                    <tr>
                                                        <th class="col-lg-5">Details of facing road(s) / Width of facing road <span class="text-danger">*</span></th>
                                                        <th class="col-lg-2">Unit <span class="text-danger">*</span></th>
                                                        <th class="col-lg-5">Condition of the road(s) <span class="text-danger">*</span></th>
                                                        <th class="col-lg-0"></th>

                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control" type="text" name="facing_road[]" placeholder="Enter the width *" required onKeyUp="convert_data_to_upper(this);"></td>
                                                        <td>
                                                            <select class="selectpicker search-fields" name="facing_road_unit[]" required>
                                                                <option selected>Choose</option>
                                                                <option value="Foot">Foot</option>
                                                                <option value="Meter">Meter</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="selectpicker search-fields" name="facing_road_condition[]" required>
                                                                <option selected>Choose</option>
                                                                <option value="Kutcha">Kutcha</option>
                                                                <option value="Pucca">Pucca</option>
                                                                <option value="Semi-pucca">Semi-pucca</option>
                                                            </select>
                                                        </td>
                                                                        
                                                        <td><input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_facing_road_btn" id="add_facing_road_btn" value="Add"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            

                                        </div>



                                               <div class="col-lg-12 col-md-12">
                                                    <h5>Best Deal</h5>
                                                    <div class="form-group">
                                                        <input type="text" name="" cols="" class="form-control"
                                                            placeholder="Why do you think that yours is the best deal?">
                                                    </div>
                                                </div>



                                                <div class="col-lg-12">
                                                    <h5>Direct EMI</h5>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" name="" max=""  value="50%" class="form-control" placeholder="Percentage of Down Payment">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" name="" max=""  value="15%" class="form-control" placeholder="Rate of Interest">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <input type="text" name="" max=""  value="300 Months" class="form-control" placeholder="Maximum number of EMI(s)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 pt-4">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <input type="text" name="" max=""  value="180 Days" class="form-control" placeholder="Maximum number of EMI(s)">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label>Will you provide registration of the property after making the down payment?</label>
                                                                        <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                                            value="Yes">
                                                                        <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                                        <input type="radio" class="checkoption" id="No" name="No"
                                                                            value="No">
                                                                        <label for="No">No</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label>If you provide registration who will keep the original deed?</label>
                                                                        <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                                            value="Yes">
                                                                        <label for="Yes">Party ?</label>&nbsp;&nbsp;
                                                                        <input type="radio" class="checkoption" id="No" name="No"
                                                                            value="No">
                                                                        <label for="No">You ?</label>
                                                        </div>
                                                        
                                                        <div class="col-lg-3">
                                                            <label for="">Is there the need of any third party as guarantor?</label>

                                                            <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                                value="Yes">
                                                            <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                            <input type="radio" class="checkoption" id="No" name="No"
                                                                value="No">
                                                            <label for="No">No</label>
                                                        </div>

                                                    </div>

                                                </div>

                                                
                                                <div class="col-lg-12 col-md-12 mt-4">
                                                    
                                                    <div class="form-group">
                                                    <textarea class="form-control" cols="30" rows="10"
                                                            name="message"
                                                            placeholder="Please write down other terms and conditions here"></textarea>
                                                    </div>
                                                </div>


                                                                                                

                                                <div class="col-lg-12 col-md-12">
                                                    <h5>Hot Offer</h5>
                                                    <div class="form-group">
                                                        <input type="text" name="" cols="" class="form-control"
                                                            placeholder="Please mention the offer with validity and terms and conditions">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <h5>Under Construction</h5>
                                                    <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                        value="Yes">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="No" name="No"
                                                        value="No">
                                                    <label for="No">No</label>                                                        
                                                
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <h5>Sold out</h5>
                                                   
                                                    <input type="radio" class="checkoption" id="Yes" name="Yes"
                                                        value="Yes">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="checkoption" id="No" name="No"
                                                        value="No">
                                                    <label for="No">No</label>                                                        
                                                
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row pt-5">
                                                        <div class="col-lg-6">
                                                            <button type="button" class="btn btn-primary" class> Previous</button>
                                                            <button type="button" class="btn btn-primary" class> Next</button>
                                                            <button type="button" class="btn btn-primary" class> Add Properties</button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="text-right">
                                                              <a href="preview_post_property.php" class="btn btn-4">Submit</a>
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