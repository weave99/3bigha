<?php
include_once("../db/conn.php");
require_once("../db/user_sequre.php");

      //`user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`, `location_office`, 
      //`current_location`, `working_days`, `opening_time`, `close_time`, `business_desc`, `service_state`, 
      //`service_district`, `service_city`, `line_of_activity`, `awarded`, `mobile_no`, `email`, `account_type`, 
      //`real_estate_type`, `building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * 
      //FROM `users` WHERE 1
if(isset($_POST['update']))
{
                                                         
        $user_id=trim($_POST['user_id']);
        $full_name= $_POST['full_name'] ;
        $business_name= $_POST['business_name'] ;
        $state= $_POST['state'] ;
        $district= $_POST['district'] ;
        $city= $_POST['city'] ;
        $location_office= $_POST['location_office'] ;
        $current_location= $_POST['current_location'] ;
        $working_days= $_POST['working_days'] ;
        $opening_time= $_POST['opening_time'] ;
        $close_time= $_POST['close_time'] ;
        $business_desc= $_POST['business_desc'] ;
        $service_state= $_POST['service_state'] ;
        $service_district= $_POST['service_district'] ;
        $service_city= $_POST['service_city'] ;
        $line_of_activity= $_POST['line_of_activity'] ;
        $awarded= $_POST['awarded'] ;

        if(!empty($_FILES['profile_picture']['name'])){
            $errors= array();
            $profile_picture=$_FILES['profile_picture']['name'];
            $profile_picture_temp=$_FILES['profile_picture']['tmp_name'];
            if(empty($errors)==true){
                move_uploaded_file($profile_picture_temp,"users_image/".$profile_picture);
                $update1=mysqli_query($conn,"update  users  set profile_picture='$profile_picture' where user_id='$user_id'");
            }
        }

        $update=mysqli_query($conn,"update  users  set full_name='$full_name', business_name='$business_name', state='$state', district='$district',
        city='$city', location_office='$location_office', current_location='$current_location', working_days='$working_days', opening_time='$opening_time', 
        close_time='$close_time', business_desc='$business_desc', service_state='$service_state', service_district='$service_district', service_city='$service_city',
        line_of_activity='$line_of_activity', awarded='$awarded' where user_id='$user_id'");
               

    if($update)
    {
        
        header("location:dashboard.php?msg=Updated Successfully");
    }
    else
    {
        $err=mysql_error();
    }
        



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="dashboard-source/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dashboard-source/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="dashboard-source/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="dashboard-source/assets/css/main.min.css" rel="stylesheet" />
    <link href="dashboard-source/assets/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

<!-- Nav header side =========================================-->
            <?php include 'dashboard_header.php'; ?>
<!-- Nav header side =========================================-->


<!--=====================================-->
        <div class="content-wrapper">
<!--=====================================-->






<!--=========== Start Indigator Bar===============================-->
            <div class="row pt-2 text-center" style="background-color:#00a7f3; color:#fff; font-width:700;">
                <div class="col-lg-12">
                   <h4>Update Profile</h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->










<!--=========== START PAGE CONTENT======================================================================-->
<?php 
      //`user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`, `location_office`, 
      //`current_location`, `working_days`, `opening_time`, `close_time`, `business_desc`, `service_state`, 
      //`service_district`, `service_city`, `line_of_activity`, `awarded`, `mobile_no`, `email`, `account_type`, 
      //`real_estate_type`, `building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * 
      //FROM `users` WHERE 1
$qre=mysqli_query($conn,"SELECT * FROM users where user_id=$session_user_id");
if($fetch=mysqli_fetch_array($qre))
{
?>

            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Upload Your Details</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">

                                        <form action="" method="post" enctype="multipart/form-data" >    
                                                   
                                        <input class="form-control" type="hidden" name="user_id" id="user_id" value="<?php echo $fetch['user_id']; ?>" required>                         
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="full_name" id="full_name" placeholder="Enter name" onKeyUp="convert_data_to_upper(this);" value="<?php echo $fetch['full_name']; ?>" required>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Business Name</label>
                                                    <input class="form-control" type="text" name="business_name" id="business_name"   placeholder="" value="<?php echo $fetch['business_name'];?>" required>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Change profile picture</label>
                                                    <input class="form-control" type="file" name="profile_picture" id="profile_picture"   placeholder="" value="<?php echo $fetch['profile_picture']; ?> ">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--==========Not Update========================-->
                                                <div class="col-sm-4 form-group">
                                                    <label>Email Id</label>
                                                    <input class="form-control" type="email" name="" id=""   placeholder="" readonly value="<?php echo $fetch['email']; ?>">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Mobile No</label>
                                                    <input class="form-control" type="number" name="" id=""   placeholder="" readonly value="<?php echo $fetch['mobile_no']; ?>">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Account Type</label>
                                                    <input class="form-control" type="text" name="" id=""   placeholder="" readonly value="<?php echo $fetch['account_type']." / ".$fetch['sub_type']; ?>">
                                                </div>
                                                <!--==========Not Update========================-->
                                                <div class="col-sm-4 form-group">
                                                    <label>State</label>
                                                    <input class="form-control" type="text" name="state" id="state"   placeholder="" value="<?php echo $fetch['state']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>District</label>
                                                    <input class="form-control" type="text" name="district" id="district"   placeholder="" value="<?php echo $fetch['district']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>City</label>
                                                    <input class="form-control" type="text" name="city" id="city"   placeholder="" value="<?php echo $fetch['city']; ?>" require>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Location of the Office / House</label>
                                                    <textarea class="form-control" name="location_office" id="location_office" cols="30" rows="1"><?php echo $fetch['location_office']; ?> </textarea>
                                                </div>
                                                <div class="col-sm-5 form-group">
                                                    <label>Select Location</label>
                                                    <input type="text" name="current_location" id="current_location" class="form-control" value="<?php echo $fetch['current_location']; ?>" placeholder="Please click find your current location"> 
                                                    
                                                </div>
                                                <div class="col-sm-1 form-group">
                                                    <button type="button" class="btn btn-transprent mt-4" name="btn" value="" onClick="getLocation();" ><i class="fa-solid fa-location-crosshairs" style="font-size:22px;color:#3f56ff;"></i></button>
                                                </div>

                                                <div class="col-sm-4 form-group">
                                                    <label>Working Days</label>
                                                    <input class="form-control" type="text" name="working_days" id="working_days"   placeholder="Enter e.g. Monday" value="<?php echo $fetch['working_days']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Opening Time</label>
                                                    <input class="form-control" type="text" name="opening_time" id="opening_time"   placeholder="Enter e.g. 9:00 AM" value="<?php echo $fetch['opening_time']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Closing Time</label>
                                                    <input class="form-control" type="text" name="close_time" id="close_time"   placeholder="Enter e.g. 7:00 PM" value="<?php echo $fetch['close_time']; ?>" require>
                                                </div>
                                                <div class="col-sm-12 form-group">
                                                    <label>Business Description</label>
                                                    <textarea class="form-control" name="business_desc" id="business_desc" cols="30" rows="2"><?php echo $fetch['business_desc']; ?></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <h6>Service Area</h6>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>State</label>
                                                    <input class="form-control" type="text" name="service_state" id="service_state"   placeholder="" value="<?php echo $fetch['service_state']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>District</label>
                                                    <input class="form-control" type="text" name="service_district" id="service_district"   placeholder="" value="<?php echo $fetch['service_district']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>City</label>
                                                    <input class="form-control" type="text" name="service_city" id="service_city"   placeholder="" value="<?php echo $fetch['service_city']; ?>" require>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Exprience in the line of activity</label>
                                                    <input class="form-control" type="text" name="line_of_activity"  id="line_of_activity" placeholder="In years" value="<?php echo $fetch['line_of_activity']; ?>">
                                                </div>
                                                <div class="col-sm-8 form-group">
                                                    <label>Have you ever been awarded ?</label>
                                                    <input class="form-control" type="text" name="awarded"  id="awarded" placeholder="Please mention here..." value="<?php echo $fetch['awarded']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-success" type="submit" name="update">Update</button>
                                            </div>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php 
}
?>




<!--=========== End PAGE CONTENT======================================================================-->














<!-- Nav header side =========================================-->
        <?php include 'dashboard_footer.php'; ?>
<!-- Nav header side =========================================-->
<!--=====================================-->
        </div>
    </div>
<!--=====================================-->

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="dashboard-source/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="dashboard-source/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="dashboard-source/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="dashboard-source/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="dashboard-source/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    <!-- Custom JS Script -->
    <script src="dashboard-source/assets/js/app.js"></script>
    <script>
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
</body>

</html>