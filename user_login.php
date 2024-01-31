<?php
include_once("db/conn.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST['login']))
{
    //////////////////// Mobile Number Login///////////////////////////////
    $email =trim($_POST['email']);
    $genarate_otp= random_int(100000, 999999);

    // Validate input (you can add more validation as per your requirements)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid Email Id format.")</script>';
    } 
    else {
        // Check if the email is already registered
        $checkemailQuery = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($checkemailQuery);
        if ($result->num_rows > 0) {

            mysqli_query($conn,"UPDATE users set verify_otp='" . $genarate_otp . "' WHERE email = '$email'");


                //Email OTP send Intregration
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'enquire.3bigha@gmail.com';
                $mail->Password = 'nzxzmcxbinfoekzb';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->setFrom($email,'3bigha Confirmation Code');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = "3bigha Send a confirmation code" ;
                $mail->Body = "<br> Your Confirmation Code is: </b>".$genarate_otp;
                if($mail->send()){
                  
                    header("Location:user_verify_otp.php?email=".$email."&msg=OTP Send to Your Email Id!");
                }
                else{
                  echo "<script>alert('Error please try again')</script>";
                }
                //Email OTP send Intregration

        }   
        else {
            header("location:user_login.php?msg=Email Id Not Registered");
        } 
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
                    <a href="index.php" class="logos">
                        <img src="assets/img/logos/logo-2.png" width="40%" alt="logo">
                    </a>
                    <h3>Sign Into Your Account</h3>

                    <p class="text-danger"><b><?php if (isset($_REQUEST["msg"])) {$msg = $_REQUEST["msg"];echo $msg ;}?></b></p>


                    <form action="" method="post">
                        <div class="form-group form-box">
                           <input type="email" name="email" class="input-text" placeholder="Enter Email Id" required>
                            
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-4 btn-block">Login</button>
                        </div>

                    </form>
                    <div class="clearfix"></div>
                    <p>Don't have an account? <a href="user_register.php" class="thembo"> Register here</a></p>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 10:55:17 GMT -->
</html>