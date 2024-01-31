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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
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
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body>



                           
                                  
                                        <div class="container" style="height:100vh;">
                                            <div class="row">
                                                <div class="col-lg-6  col-12 text-center p-3" style="background-color:#fff;box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px; margin:20% auto; border-radius:5px;">
                                                    
                                                            <img src="assets/img/icons/submit.png" width="100px" alt="" class="p-2">    
                                                            <h2 class="text-center pt-5">Submitted Successfully</h2>
                                                            <div class="mb-3 pt-1 pb-1 rounded" style="width:60%;left:50%;position:relative;transform:translate(-50%, 0);background-color:#f39c12 !important;color:#fff;">
                                                                <b>3 Bigha under reviewing your property</b>
                                                            </div>
                                                            

                                                                <a href="users_post_property_details.php" class="btn btn-primary">Add Property</a>
                                                                <a href="user_dashboard/users_view_upload_property.php" class="btn btn-primary">OK</a>
                                     
                                                            
                                                </div>
                                            </div>
                                        </div>
                                 




<!--
                                                                          
                                        <div class="container" style="border:2px solid red;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div  style="height:100vh; width:100%; position:absolute;">
                                                        <div class="row">
                                                            <div class="col-lg-5 p-3 text-center" style="background-color:#fff;box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px; z-index:999; top:25%; position:absolute; width:100%;left:25%;">
                                                            <img src="assets/img/icons/submit.png" width="100px" alt="" class="p-2">    
                                                            <h2 class="text-center p-5">Submitted Successfully</h2>

                                                                <a href="users_post_property_details.php" class="btn btn-primary">Add Property</a>
                                                                <a href="index.php" class="btn btn-primary">OK</a>
                                                            </div>
                                                        </div>
                                                    </div>            
                                                </div>
                                            </div>
                                        </div>
                                 

-->
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