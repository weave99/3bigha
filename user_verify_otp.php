<?php
include_once("db/conn.php");
if(isset($_POST['verify']))
{
    $email = $_REQUEST['email'];
    $verify_otp = $_POST['verify_otp'];
            //`user_id`, `full_name`, `business_name`, `mobile_no`, `email`, `account_type`, `real_estate_type`, 
            //`building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * FROM `users` WHERE 1

        $checkVerifyQuery = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($checkVerifyQuery);

        if ($result->num_rows > 0) {

            $sql="SELECT * FROM users WHERE verify_otp='$verify_otp'";
            $query=mysqli_query($conn,$sql);
            if($r=mysqli_fetch_array($query))
            {
                mysqli_query($conn,"UPDATE users set verify_otp='" . NULL . "' where  email='$email'");
                session_start();
                $_SESSION['user_email']=$email;
                $_SESSION['user_mobile_no']=$r['mobile_no'];
                $_SESSION['user_id']=$r['user_id'];
                header("location:index.php");
            }
            else{
                    header("location:user_verify_otp.php?email=".$email."&msg=Invalide OTP");
                }
        } 
        else {
            echo '<script>alert("Email or Mobile No Did not Match ! Please Check Your Email or Number")</script>';
        }
}
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

<!-- Contact section start -->
<div class="contact-section">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0 form-section">
                <div class="form-inner">
                    <a href="login.php" class="logos">
                        <img src="assets/img/logos/logo-2.png" width="40%" alt="logo">
                    </a>
                    <h3>Enter Your OTP</h3>
                    <!--<h5>3 Bigha has sent an OTP in your Email Id</h5>-->

                    <p class="text-danger"><b><?php if (isset($_REQUEST["msg"])) {$msg = $_REQUEST["msg"];echo $msg ;}?></b></p>

                    <form action="" method="post">
                        
                        <div class="form-group form-box">
                            <input type="text" name="verify_otp" class="input-text" placeholder="Type here..." required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="verify" class="btn btn-4 btn-block">Submit</button>
                        </div>
                    </form>
                    <div class="clearfix"></div>

                </div>
            </div>
            <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>Welcome to <a href="index.php">3 BIGHA</a></h1>
                    <p>3bigha is a platform for every citizen of the world because everyone lives surely in an abode which requires the help of Real Estate from land purchase to completion of the abode. You can find here all kind of assistance like searching for land, houses, apartments, building materials, legal services, helpers - laborers -  mason - painter etc. It is the one stop solution for you.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
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
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

</html>