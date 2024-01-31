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
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

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
            <h1>About Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- About us start -->
<div class="about-us content-area-7 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="about-carousel">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/property/img-1.jpg" alt="property" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/property/img-2.jpg" alt="property" class="img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/property/img-3.jpg" alt="property" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-info">
                    <h3>About Our Company</h3>
                    <p>3bigha is a platform for every citizen of the world because everyone lives surely in an abode which requires the help of Real Estate from land purchase to completion of the abode. You can find here all kind of assistance like searching for land, houses, apartments, building materials, legal services, helpers - laborers -  mason - painter etc. It is the one stop solution for you.</p>
                   
                    <!-- Counters start -->
                    <div class="counters cts">
                        <div class="counter-box">
                            <h1 class="counter">850</h1>
                            <h5>Deals Success</h5>
                        </div>
                        <div class="counter-box">
                            <h1 class="counter">786</h1>
                            <h5>Finincing</h5>
                        </div>
                        <div class="counter-box">
                            <h1 class="counter">950</h1>
                            <h5>Insurance Done</h5>
                        </div>
                    </div>
                    <!-- Counters end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<!-- services 3 start -->
<div class="services-3 content-area-20">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            <div class="col-lg-3 col-md-6 col-sm-12">
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

<!-- Counters start -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">500</h1>
                    <h5>Lines of Sale</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-badge"></i>
                    <h1 class="counter">254</h1>
                    <h5>Listings For Rent</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-call-center-agent"></i>
                    <h1 class="counter">510</h1>
                    <h5>Agents</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
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

<!-- agent start -->
<!--
<div class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Meet Our Agents</h1>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-5.jpg" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.php">Martin Smith</a></h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-6.jpg" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.php">John Pitarshon</a></h5>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-7.jpg" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.php">Karen Paran</a></h5>
                        <p>Support Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="agent-2">
                    <div class="photo">
                        <img src="assets/img/avatar/avatar-8.jpg" alt="agent-grid-2" class="img-fluid">
                        <div class="overlay">
                            <div class="border">
                                <div class="icon-holder">
                                    <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="icon-holder">
                                    <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-details">
                        <h5><a href="agent-detail.php">Brandon Miller</a></h5>
                        <p>Office Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div >
-->
<!-- agent end -->

<!-- Testimonial start -->
<!--
<div class="testimonial-5 content-area-20 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
           
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
            <div class="col-lg-12">
              
                <div class="slick-slider-area">
                    <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        <div class="slick-slide-item">
                            <div class="testimonial-info">
                                <div class="user-section">
                                    <div class="user-thumb">
                                        <img src="assets/img/avatar/avatar.jpg" alt="testimonial">
                                        <div class="icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h5>
                                            <a href="#">Michelle Nelson</a>
                                        </h5>
                                        <p>Consultant</p>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="testimonial-info">
                                <div class="user-section">
                                    <div class="user-thumb">
                                        <img src="assets/img/avatar/avatar-2.jpg" alt="testimonial">
                                        <div class="icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h5>
                                            <a href="#">Anne Brady</a>
                                        </h5>
                                        <p>Web Designer, Uk</p>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="testimonial-info">
                                <div class="user-section">
                                    <div class="user-thumb">
                                        <img src="assets/img/avatar/avatar-3.jpg" alt="testimonial">
                                        <div class="icon">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="user-name">
                                        <h5>
                                            <a href="#">Carolyn Stone</a>
                                        </h5>
                                        <p>Designer</p>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- Testimonial end -->

<!-- partner start -->
<!--
<div class="partner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="multi-carousel" data-items="1,3,5,6" data-slide="1" id="multiCarousel"  data-interval="1000">
                    <div class="multi-carousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-1.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-2.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-3.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-4.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-5.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-1.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-2.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-3.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-4.png" alt="brand">
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <img src="assets/img/brands/brand-5.png" alt="brand">
                            </div>
                        </div>
                    </div>
                    <a class="multi-carousel-indicator leftLst" aria-hidden="true">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="multi-carousel-indicator rightLst" aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- partner end -->

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