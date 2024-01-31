<?php
include_once("db/conn.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start();
if(isset($_POST['register']))
{
    // Get input values from the login form
    $mobile_no = $_POST['mobile_no'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $account_type = $_POST['account_type'];
    $real_estate_type = $_POST['real_estate_type'];
    $building_material_supplier = $_POST['building_material_supplier'];
    $building_provider_type = $_POST['building_provider_type'];
    $legal_provider_type = $_POST['legal_provider_type'];

    $sub_type="";
    if($_POST['real_estate_type']!='0')
           $sub_type=$_POST['real_estate_type'];
           else  if($_POST['building_material_supplier']!='0')
                $sub_type=$_POST['building_material_supplier'];        
                else  if($_POST['building_provider_type']!='0')
                        $sub_type=$_POST['building_provider_type'];
                    else  if($_POST['legal_provider_type']!='0')
                                $sub_type=$_POST['legal_provider_type'];
        
    $genarate_otp= random_int(100000, 999999);
    
    
    // Validate input (you can add more validation as per your requirements)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid Email Id format.")</script>';
    } elseif (!filter_var($mobile_no, FILTER_VALIDATE_INT)) {
        echo '<script>alert("Invalid Mobile No. format.")</script>';
    } 
    else {
        // Check if the email is already registered
        $checkemailQuery = "SELECT * FROM users WHERE email = '$email'";
        $resultemail = $conn->query($checkemailQuery);

        if ($resultemail->num_rows > 0) {
            echo '<script>alert("Email ID already registered. Please use a different Email ID.")</script>';
        }      
        else {
            // `user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`, `location_office`, 
            //`current_location`, `working_days`, `opening_time`, `close_time`, `business_desc`, `service_state`, 
            //`service_district`, `service_city`, `line_of_activity`, `awarded`, `mobile_no`, `email`, `account_type`, 
            //`real_estate_type`, `building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * 
            //FROM `users` WHERE 1
            $insertQuery = "INSERT INTO users (full_name, mobile_no, email, account_type, sub_type, verify_otp)
                            VALUES ('$full_name','$mobile_no','$email','$account_type','$sub_type', '$genarate_otp')";

            if ($conn->query($insertQuery) === TRUE) {

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


            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
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
    <title>3 BIGHA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <!--<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

    <style>
        select {
          display: none;
        }
        input[name=rera_no]{
            display: none;
        }
        select[name=account_type] {
          display: block;
        }
    </style>
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
                    <h3>Create An Cccount</h3>
                    <form action="" method="post">
                        
                        <div class="form-group form-box">
                            <input type="text" name="full_name" class="input-text" placeholder="Full Name" >
                        </div>
                        <div class="form-group form-box">
                            <input type="number" name="mobile_no" class="input-text" placeholder="Mobile No." >
                        </div>
                        <div class="form-group form-box">
                            <input type="email" name="email" class="input-text" placeholder="Email Address">
                        </div>

                        
                        	
                        
                        
                        
                        <div class="form-group form-box">

                            <select class="custom-form-control input-text" name="account_type">
                                <option selected value="0">Select Your Account Type</option>
                                <option value="Real Estate Personnels">Real Estate Personnels</option>
                                <option value="Building Material Supplier">Building Material Supplier</option>
                                <option value="Building Making Service Provider">Building Making Service Provider</option>
                                <option value="Legal Service Provider">Legal Service Provider</option>
                            </select>

                            <select class="custom-form-control input-text sub_type mt-3" id="Real Estate Personnels" name="real_estate_type">
                                <option selected value="0">Choose Type</option>
                                <option value="Broker">Broker</option>
                                <option value="Agent">Agent</option>
                                <option value="Owner">Owner</option>
                                <option value="Builder">Builder / Promoter</option>
                            </select>


                            <select class="custom-form-control input-text sub_type mt-3" id="Building Material Supplier" name="building_material_supplier">
                                <option selected value="0">Choose Type</option>
                                <option value="Manufacturer">Manufacturer</option>
                                <option value="Distributor">Distributor</option>
                                <option value="Dealer">Dealer</option>
                                <option value="Shop / Store ">Shop / Store </option>
                                <option value="Genaral Order Suppiler">Genaral Order Suppiler</option>
                            </select>


                            <select class="custom-form-control input-text sub_type  mt-3" id="Building Making Service Provider" name="building_provider_type">
                                <option selected value="0">Choose Type</option>
                                <option value="Architect">Architect</option>
                                <option value="Civil Engineer">Civil Engineer</option>
                                <option value="Meson / Laborers">Meson / Laborers</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Painter">Painter</option>
                                <option value="Interior Designer">Interior Designer</option>
                                <option value="Exterior Designer">Exterior Designer</option>
                                <option value="Tile Settar">Tile Settar</option>
                                <option value="Insulator">Insulator</option>
                                <option value="Framing Contractor">Framing Contractor</option>
                                <option value="Roofer">Roofer</option>
                                <option value="Cabinet Maker">Cabinet Maker</option>
                                <option value="Plasterer">Plasterer</option>
                                <option value="General Contractor">General Contractor</option>
                            </select>

                            <select class="custom-form-control input-text sub_type  mt-3" id="Legal Service Provider" name="legal_provider_type">
                                <option selected value="0">Choose Type</option>
                                <option value="Advocate / Solicitor">Advocate / Solicitor</option>
                                <option value="Surveyor / Amin">Surveyor / Amin</option>
                                <option value="Valuer">Valuer</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="register" class="btn btn-4 btn-block">Register</button>
                        </div>

                    </form>
                    <div class="clearfix"></div>
                    <p>Already a member? <a href="user_login.php">Login here</a></p>

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
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>





<script>
function hide_el (elements) {
  for(var i = 0; i < elements.length; i++)
    elements[i].style.display = 'none';
  }
window.onload = function () {
  var a = document.getElementsByName('account_type')[0];
  var b = document.getElementsByClassName('sub_type');
  
  a.onchange = function () {
    hide_el(b);
    var sub_type = document.getElementById(this.value);
    sub_type.style.display = 'block';
  }
  /*
  for(var i=0; i<b.length; i++)
    b[i].onchange = function () {
      hide_el(c);
      var sub_type_2 = document.getElementById(this.value);
      sub_type_2.style.display = 'block';
    }*/
}
</script>

</body>

</html>