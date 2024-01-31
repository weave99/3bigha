<?php
include_once("db/conn.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>3 BIGHA | Tile Settar</title>
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
            <h1>Tile Settar</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Tile Settar</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->


    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="search-area" id="compare-search">
                    <div class="search-area-inner">
                        <div class="search-contents">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="search_services" >
                                                <option value="">All Services</option>
                                                <?php
                                                //`services_id`, `account_sub_type`, `services_name`SELECT * FROM `users_services_name_master` WHERE 1
                                                $sql_ctgy="SELECT * FROM `users_services_name_master` WHERE account_sub_type='Tile Settar'";
                                                $query_ctgy=mysqli_query($conn,$sql_ctgy);
                                                while($ctgy=mysqli_fetch_array($query_ctgy)) 
                                                {?>
                                                    <option value="<?php echo $ctgy['services_name'];?>" <?php if(isset($_POST['search_services']))if(strcasecmp($ctgy['services_name'],$_POST['search_services'])==0) echo 'selected';?>><?php echo $ctgy['services_name'];?></option>
                                                <?php
                                                }
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button class="btn-block btn-4" name="btn_search_services" type="submit">Search</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h4>Result For - <?php if(isset($_POST['search_services'])){ if($_POST['search_services']=="")  echo "All Services"; else  echo $_POST['search_services'];} else echo "All Services";?></h4>
            </div>
        </div>
    </div>










<!-- Architech section start -->
<div class="mt-5">
    <div class="container">
        <div class="row">

        <?php
        /*
        `user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`,
        `location_office`, `current_location`, `working_days`, `opening_time`, `close_time`, 
        `business_desc`, `service_state`, `service_district`, `service_city`, `line_of_activity`, 
        `awarded`, `mobile_no`, `email`, `account_type`, `sub_type`, `verify_otp`, `login_time` 
        SELECT * FROM `users` WHERE 1
        */

        //`tile_settar_id`, `user_id`, `services_name`, `unit`, `price`, `decription`, `payment_options` 
        //SELECT * FROM `ubms_tile_settar` WHERE 1

        if(isset($_POST['search_services']) && $_POST['search_services']!="")
          {
            $search_services=$_POST['search_services'];
            $sql_show="SELECT * FROM ubms_tile_settar where services_name='$search_services' ";
          }
          else
              $sql_show="SELECT * FROM ubms_tile_settar order by  services_name";

              $result = $conn->query($sql_show);

              if ($result->num_rows== 0) {
                  ?>
                  <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
                        <h5 class="text-primary">
                             No Data Found
                        </h5>
                </div>
             <?php
              } 
              else{
                           

            $query_show=mysqli_query($conn,$sql_show);
            while($show=mysqli_fetch_array($query_show)) 
            {
                $tile_settar_id=$show['tile_settar_id'];
                $user_id=$show['user_id'];
                ?>

            <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                <div class="blog-5">
                    <div class="detail">
                        <h5 class="text-primary">
                            <a href="" class="text-primary"><?php echo $show['services_name'];?></a>
                        </h5>
                        <div class="row pb-4">
                            <div class="col-lg-6">
                                <h6>Unit : <?php echo $show['unit'];?></h6>
                            </div>
                            <div class="col-lg-6">
                                <h6>Price : <?php echo $show['price'];?></h6>
                            </div>
                            <div class="col-lg-12">
                                <p><b>Description :</b> <?php echo $show['decription'];?></p>

                                <p><b>Payment Options :</b> <?php echo $show['payment_options'];?></p>
                            
                                <button onclick="ShowDetails(<?php echo $tile_settar_id;?>)" class="btn  btn-primary">More Details</button>

                                <div id="<?php echo $tile_settar_id;?>" class="mt-4" style="display:none;">
                                <?php
                                 /*
                                `user_id`, `full_name`, `business_name`, `profile_picture`, `state`, `district`, `city`,
                                `location_office`, `current_location`, `working_days`, `opening_time`, `close_time`, 
                                `business_desc`, `service_state`, `service_district`, `service_city`, `line_of_activity`, 
                                `awarded`, `mobile_no`, `email`, `account_type`, `sub_type`, `verify_otp`, `login_time` 
                                SELECT * FROM `users` WHERE 1
                                */
                                  $sql_show2="SELECT * FROM users where user_id=$user_id";
                                  $query_show2=mysqli_query($conn,$sql_show2);
                                  if($show2=mysqli_fetch_array($query_show2)) 
                                  {
                                    ?>
                                    <p><b>Name : <?php echo $show2['full_name'];?></b></p>
                                    <p><b>Mobile No : <?php echo $show2['mobile_no'];?></b></p>
                                    <p><b>Email :  <?php echo $show2['email'];?></b></p>
                                    <p><b>Business Name :  <?php echo $show2['business_name'];?></b></p>
                                    <p><b>Working Days : <?php echo $show2['working_days'];?></b></p>
                                    <p><b>Opening Time : <?php echo $show2['opening_time'];?></b></p>
                                    <p><b>Close Time: <?php echo $show2['close_time'];?></b></p>
                                    <p><b>Business Desc : <?php echo $show2['business_desc'];?></b></p>
                                    <p><b>State : <?php echo $show2['service_state'];?></b></p>
                                    <p><b>District: <?php echo $show2['service_district'];?></b></p>
                                    <p><b>City : <?php echo $show2['service_city'];?></b></p>
                                    <p><b>Line of Activity : <?php echo $show2['line_of_activity'];?></b></p>
                                    <p><b>Awarded : <?php echo $show2['awarded'];?></b></p>
                                    <?php
                                  }
                                  ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php
        }
        ?>  
<?php
}
?>
        </div>
    </div>
</div>

<!-- Architech section end -->


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
            <script>
                function ShowDetails(x) {
                var x = document.getElementById(x);
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                }
            </script>
</body>

</html>