<?php
include_once("../db/conn.php");
require_once("../db/user_sequre.php");


  if(isset($_POST['update']))
  {
    //`post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`,
    //`property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, 
    //`plot_lenght`, `plot_lenght_unit`, `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, 
    //`prossession_by`, `layout_sketch_map`, `property_image_1`, `property_image_2`, `property_video`, `property_location_link`, 
    //`property_current_location`, `property_ownership`, `property_approved_by`, `expected_price`, `price_per_unit`, `all_inclusive_price_yn`, 
    //`tax_govt_charges_yn`, `price_negotiable_yn`, `about_property`, `maintenance_staff_yn`, `water_storage_yn`, `running_water_facility_yn`, 
    //`rain_water_harvesting_yn`, `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`,
    //`overlooking_pool_yn`, `overlooking_club_yn`, `overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, 
    //`property_gated_society_name`, `property_facing`, `corner_property_yn`, 
           
         $post_property_id=trim($_POST['post_property_id']);
         $post_date= $_POST['post_date'] ;
         $property_list= $_POST['property_list'] ;
         $property_type= $_POST['property_type'] ;
         $property_state= $_POST['property_state'] ;
         $property_district= $_POST['property_district'] ;
         $property_city= $_POST['property_city'] ;
         $property_locality= $_POST['property_locality'] ;
         $property_sub_locality= $_POST['property_sub_locality'] ;
         $apartment_socity= $_POST['apartment_socity'] ;
         $plot_no= $_POST['plot_no'] ;
         $plot_area= $_POST['plot_area'] ;
         $plot_area_unit= $_POST['plot_area_unit'] ;
         $plot_lenght= $_POST['plot_lenght'] ; 
         $plot_lenght_unit= $_POST['plot_lenght_unit'] ; 
         $plot_breadth= $_POST['plot_breadth'] ; 
         $plot_breadth_unit= $_POST['plot_breadth_unit'] ; 
         $boundry_yn= $_POST['boundry_yn'] ; 
         $no_open_side= $_POST['no_open_side'] ; 
         $any_construction_yn= $_POST['any_construction_yn'] ; 
         $prossession_by= $_POST['prossession_by'] ; 
    
    
        //layout_sketch_map File /* Only Pdf Upload */
         if(!empty($_FILES['layout_sketch_map']['name'])){
            $errors= array();
            $layout_sketch_map=$_FILES['layout_sketch_map']['name'];
    
    
            $file_size = $_FILES['layout_sketch_map']['size'];
            $file_type = $_FILES['layout_sketch_map']['type'];
    
            if(($file_size > 2097152)){      
                $message = 'File too large. File must be less than 2 megabytes.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
            }
            elseif(($file_type != "application/pdf")){
                $message = 'Invalid file type. Only PDF are accepted.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>';         
            }    
            else {
                $layout_sketch_map_temp=$_FILES['layout_sketch_map']['tmp_name'];
                if(empty($errors)==true){
                move_uploaded_file($layout_sketch_map_temp,"upload_property_documents/".$layout_sketch_map);
                $update_layout_sketch_map=mysqli_query($conn,"update  users_post_property_details  set layout_sketch_map='$layout_sketch_map' where post_property_id='$post_property_id'");
                }
            }
    
         }
    
         //property_image_1 / 2 File /* Only Jpg or Png Upload */
         if(!empty($_FILES['property_image_1']['name'])){
            $errors= array();
            $property_image_1=$_FILES['property_image_1']['name'];
            $property_image_1_temp=$_FILES['property_image_1']['tmp_name'];
            if(empty($errors)==true){
            move_uploaded_file($property_image_1_temp,"upload_property_images/".$property_image_1);
            $update_property_image_1=mysqli_query($conn,"update  users_post_property_details  set property_image_1='$property_image_1' where post_property_id='$post_property_id'");
            }
         }
         if(!empty($_FILES['property_image_2']['name'])){
            $errors= array();
            $property_image_2=$_FILES['property_image_2']['name'];
            $property_image_2_temp=$_FILES['property_image_2']['tmp_name'];
            if(empty($errors)==true){
            move_uploaded_file($property_image_2_temp,"upload_property_images/".$property_image_2);
            $update_property_image_2=mysqli_query($conn,"update  users_post_property_details  set property_image_2='$property_image_2' where post_property_id='$post_property_id'");
            }
         }
    
         //property_video File /* Only Video Upload */
         if(!empty($_FILES['property_video']['name'])){
            $errors= array();
            $property_video=$_FILES['property_video']['name'];
    
    
            $file_size = $_FILES['property_video']['size'];
            $file_type = $_FILES['property_video']['type'];
    
            if(($file_size > 10097152)){      
                $message = 'File too large. File must be less than 5 megabytes.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
            }
            elseif(($file_type != "video/mp4")){
                $message = 'Invalid file type. Only mp4 are accepted.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>';         
            }    
            else {
                $property_video_temp=$_FILES['property_video']['tmp_name'];
                if(empty($errors)==true){
                move_uploaded_file($property_video_temp,"upload_property_videos/".$property_video);
                $update_property_video=mysqli_query($conn,"update  users_post_property_details  set property_video='$property_video' where post_property_id='$post_property_id'");
                }
            }
         }
    
    
         $property_location_link= $_POST['property_location_link'] ; 
         $property_current_location= $_POST['property_current_location'] ; 
         $property_ownership= $_POST['property_ownership'] ; 
         $property_approved_by= $_POST['property_approved_by'] ; 
         $expected_price= $_POST['expected_price'] ; 
         $price_per_unit= $_POST['price_per_unit'] ; 
         $about_property= $_POST['about_property'] ;   

         if(isset($_POST['all_inclusive_price_yn'])){
         $all_inclusive_price_yn=1;   
         }
         else{
         $all_inclusive_price_yn=0;   
         }

         if(isset($_POST['tax_govt_charges_yn'])){
         $tax_govt_charges_yn=1;   
         }
         else{
         $tax_govt_charges_yn=0;   
         }


         if(isset($_POST['price_negotiable_yn'])){
         $price_negotiable_yn=1;   
         }
         else{
         $price_negotiable_yn=0;   
         }


         if(isset($_POST['maintenance_staff_yn'])){
         $maintenance_staff_yn=1;   
         }
         else{
         $maintenance_staff_yn=0;   
         }

         if(isset($_POST['water_storage_yn'])){
         $water_storage_yn=1;   
         }
         else{
         $water_storage_yn=0;   
         }
         
         if(isset($_POST['water_storage_yn'])){
         $water_storage_yn=1;   
         }   
         else{
         $water_storage_yn=0;   
         }


         if(isset($_POST['running_water_facility_yn'])){
         $running_water_facility_yn=1;   
         }   
         else{
         $running_water_facility_yn=0;   
         }

         if(isset($_POST['rain_water_harvesting_yn'])){
         $rain_water_harvesting_yn=1;   
         }   
         else{
         $rain_water_harvesting_yn=0;   
         }

         if(isset($_POST['feng_shui_vaastu_complaint_yn'])){
         $feng_shui_vaastu_complaint_yn=1;   
         }   
         else{
         $feng_shui_vaastu_complaint_yn=0;   
         }

         if(isset($_POST['proper_drainage_system_yn'])){
         $proper_drainage_system_yn=1;   
         }   
         else{
         $proper_drainage_system_yn=0;   
         }

         if(isset($_POST['solar_power_plant_yn'])){
         $solar_power_plant_yn=1;   
         }
         else{
         $solar_power_plant_yn=0;   
         }

         if(isset($_POST['solar_street_light_yn'])){
         $solar_street_light_yn=1;   
         }
         else{
         $solar_street_light_yn=0;   
         }
   
         if(isset($_POST['overlooking_pool_yn'])){
         $overlooking_pool_yn=1;   
         }
         else{
         $overlooking_pool_yn=0;   
         }

         if(isset($_POST['overlooking_club_yn'])){
         $overlooking_club_yn=1;   
         }
         else{
         $overlooking_club_yn=0;   
         }

         if(isset($_POST['overlooking_park_garden_yn'])){
         $overlooking_park_garden_yn=1;   
         }
         else{
         $overlooking_park_garden_yn=0;   
         }
   
         if(isset($_POST['overlooking_main_road_yn'])){
         $overlooking_main_road_yn=1;   
         }
         else{
         $overlooking_main_road_yn=0;   
         }



         $property_gated_society_yn= $_POST['property_gated_society_yn'] ; 
         $property_gated_society_name= $_POST['property_gated_society_name'] ; 
         $property_facing= $_POST['property_facing'] ; 
         if(isset($_POST['corner_property_yn'])){
         $corner_property_yn=1;   
         }
         else{
         $corner_property_yn=0;   
         }
         $suggest_property_feature= $_POST['suggest_property_feature'] ; 
         $best_deal= $_POST['best_deal'] ; 
         $down_payment_percentage= $_POST['down_payment_percentage'] ; 
         $rate_interest= $_POST['rate_interest'] ; 
         $no_of_installment= $_POST['no_of_installment'] ; 
         $installment_amount_month= $_POST['installment_amount_month'] ; 
         $reg_after_downpayment_yn= $_POST['reg_after_downpayment_yn'] ; 
         $reg_original_deed_yn= $_POST['reg_original_deed_yn'] ; 
         $third_party_gurantor_yn= $_POST['third_party_gurantor_yn'] ; 
         $others_terms_conditions= $_POST['others_terms_conditions'] ; 
         $hot_offer= $_POST['hot_offer'] ; 
         $under_construction_yn= $_POST['under_construction_yn'] ; 
         $sold_out_yn= $_POST['sold_out_yn'] ; 
    
  
        $update=mysqli_query($conn,"UPDATE users_post_property_details SET  post_date='$post_date', property_list='$property_list',  property_type='$property_type',  property_state='$property_state',  property_district='$property_district',  property_city='$property_city',  property_locality='$property_locality',  property_sub_locality='$property_sub_locality',  apartment_socity='$apartment_socity',  plot_no='$plot_no',  plot_area='$plot_area',  plot_area_unit='$plot_area_unit',  plot_lenght='$plot_lenght',  plot_lenght_unit='$plot_lenght_unit',  plot_breadth='$plot_breadth',  plot_breadth_unit='$plot_breadth_unit',  boundry_yn='$boundry_yn',  no_open_side='$no_open_side',  any_construction_yn='$any_construction_yn',  prossession_by='$prossession_by',  property_location_link='$property_location_link',  property_current_location='$property_current_location',  property_ownership='$property_ownership',  property_approved_by='$property_approved_by',  expected_price='$expected_price',  price_per_unit='$price_per_unit',  all_inclusive_price_yn='$all_inclusive_price_yn',  tax_govt_charges_yn='$tax_govt_charges_yn',  price_negotiable_yn='$price_negotiable_yn',  about_property='$about_property',  maintenance_staff_yn='$maintenance_staff_yn',  water_storage_yn='$water_storage_yn',  running_water_facility_yn='$running_water_facility_yn',  rain_water_harvesting_yn='$rain_water_harvesting_yn',  feng_shui_vaastu_complaint_yn='$feng_shui_vaastu_complaint_yn',  proper_drainage_system_yn='$proper_drainage_system_yn',  solar_power_plant_yn='$solar_power_plant_yn',  solar_street_light_yn='$solar_street_light_yn',  overlooking_pool_yn='$overlooking_pool_yn',  overlooking_club_yn='$overlooking_club_yn',  overlooking_park_garden_yn='$overlooking_park_garden_yn',  overlooking_main_road_yn='$overlooking_main_road_yn',  property_gated_society_yn='$property_gated_society_yn',  property_gated_society_name='$property_gated_society_name', corner_property_yn='$corner_property_yn',  suggest_property_feature='$suggest_property_feature',  best_deal='$best_deal',  down_payment_percentage='$down_payment_percentage',  rate_interest='$rate_interest',  no_of_installment='$no_of_installment',  installment_amount_month='$installment_amount_month',  reg_after_downpayment_yn='$reg_after_downpayment_yn',  reg_original_deed_yn='$reg_original_deed_yn',  third_party_gurantor_yn='$third_party_gurantor_yn',  others_terms_conditions='$others_terms_conditions',  hot_offer='$hot_offer',  under_construction_yn='$under_construction_yn',  sold_out_yn='$sold_out_yn' WHERE post_property_id='$post_property_id'");
                                                            

        if($update){

            //======================Dynamick Fields Start ====================================================================================================//

            //<!--`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `facing_road_condition` SELECT * FROM `users_post_road_details` WHERE 1-->
            //<!--`id`, `post_property_id`, `metro_station_name`, `metro_station_distance` SELECT * FROM `users_post_metro_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `school_name`, `school_distance` SELECT * FROM `users_post_school_details` WHERE 1-->
            //<!--`id`, `post_property_id`, `hospital_name`, `hospital_distance` SELECT * FROM `users_post_hospital_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `railway_station_name`, `railway_station_distance` SELECT * FROM `users_post_railway_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `airport_name`, `airport_distance` SELECT * FROM `users_post_airport_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `mall_station_name`, `mall_station_distance` SELECT * FROM `users_post_mall_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `highway_name`, `highway_distance` SELECT * FROM `users_post_highway_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `religious_establishment_name`, `religious_establishment_distance` SELECT * FROM `users_post_religious_establishment_details` WHERE 1 -->
            //<!--`id`, `post_property_id`, `others_name`, `others_distance` SELECT * FROM `users_post_others_details` WHERE 1 -->

            //======================Dynamick Fields End =====================================================================================================//


            $delete_1=mysqli_query($conn,"DELETE FROM users_post_road_details WHERE post_property_id='$post_property_id'");               
            $delete_2=mysqli_query($conn,"DELETE FROM users_post_metro_details WHERE post_property_id='$post_property_id'");               
            $delete_3=mysqli_query($conn,"DELETE FROM users_post_school_details WHERE post_property_id='$post_property_id'");               
            $delete_4=mysqli_query($conn,"DELETE FROM users_post_hospital_details WHERE post_property_id='$post_property_id'");               
            $delete_5=mysqli_query($conn,"DELETE FROM users_post_railway_details WHERE post_property_id='$post_property_id'");               
            $delete_6=mysqli_query($conn,"DELETE FROM users_post_airport_details WHERE post_property_id='$post_property_id'");               
            $delete_7=mysqli_query($conn,"DELETE FROM users_post_mall_details WHERE post_property_id='$post_property_id'");
            $delete_8=mysqli_query($conn,"DELETE FROM users_post_highway_details WHERE post_property_id='$post_property_id'");    
            $delete_9=mysqli_query($conn,"DELETE FROM users_post_religious_establishment_details WHERE post_property_id='$post_property_id'");       
            $delete_10=mysqli_query($conn,"DELETE FROM users_post_others_details WHERE post_property_id='$post_property_id'");                
    
            // Begin For Facing road
            $i=0;
            while(isset($_POST['facing_road'][$i]))
                    {
                    if(trim($_POST['facing_road'][$i])!="")
                    {
                        
                        $property_facing=trim($_POST['property_facing'][$i]);
                        $direction_road=trim($_POST['direction_road'][$i]);
                        $facing_road=trim($_POST['facing_road'][$i]);
                        $facing_road_unit=trim($_POST['facing_road_unit'][$i]);
                        $facing_road_condition=trim($_POST['facing_road_condition'][$i]);
                        //`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `facing_road_condition`SELECT * FROM `users_post_road_details` WHERE 1
                            $sql1="INSERT INTO users_post_road_details (post_property_id, property_facing, direction_road, facing_road, facing_road_unit, facing_road_condition)
                            VALUES ($post_property_id, '$property_facing', '$direction_road', '$facing_road','$facing_road_unit','$facing_road_condition')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of Facing Road

            // Begin For metro_station_name 
            $i=0;
            while(isset($_POST['metro_station_name'][$i]))
                    {
                    if(trim($_POST['metro_station_name'][$i])!="")
                    {
                        $metro_station_name=trim($_POST['metro_station_name'][$i]);
                        $metro_station_distance=trim($_POST['metro_station_distance'][$i]);
                        //`id`, `post_property_id`, `metro_station_name`, `metro_station_distance` SELECT * FROM `users_post_metro_details` WHERE 1 -->
                            $sql1="INSERT INTO users_post_metro_details (post_property_id, metro_station_name, metro_station_distance)
                            VALUES ($post_property_id,'$metro_station_name','$metro_station_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of metro_station_name


            // Begin For school_name 
            $i=0;
            while(isset($_POST['school_name'][$i]))
                    {
                    if(trim($_POST['school_name'][$i])!="")
                    {
                        $school_name=trim($_POST['school_name'][$i]);
                        $school_distance=trim($_POST['school_distance'][$i]);
                        //`id`, `post_property_id`, `school_name`, `school_distance` SELECT * FROM `users_post_school_details` WHERE 1-->
                            $sql1="INSERT INTO users_post_school_details (post_property_id, school_name, school_distance)
                            VALUES ($post_property_id,'$school_name','$school_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of school_name

            

            // Begin For hospital_name 
            $i=0;
            while(isset($_POST['hospital_name'][$i]))
                    {
                    if(trim($_POST['hospital_name'][$i])!="")
                    {
                        $hospital_name=trim($_POST['hospital_name'][$i]);
                        $hospital_distance=trim($_POST['hospital_distance'][$i]);
                        //`id`, `post_property_id`, `hospital_name`, `hospital_distance` SELECT * FROM `users_post_hospital_details` WHERE 1 -->
                            $sql1="INSERT INTO users_post_hospital_details (post_property_id, hospital_name, hospital_distance)
                            VALUES ($post_property_id,'$hospital_name','$hospital_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of hospital_name


            // Begin For railway_station_name 
            $i=0;
            while(isset($_POST['railway_station_name'][$i]))
                    {
                    if(trim($_POST['railway_station_name'][$i])!="")
                    {
                        $railway_station_name=trim($_POST['railway_station_name'][$i]);
                        $railway_station_distance=trim($_POST['railway_station_distance'][$i]);
                        //`id`, `post_property_id`, `railway_station_name`, `railway_station_distance` SELECT * FROM `users_post_railway_details` WHERE 1
                            $sql1="INSERT INTO users_post_railway_details (post_property_id, railway_station_name, railway_station_distance)
                            VALUES ($post_property_id,'$railway_station_name','$railway_station_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of railway_station_name


            // Begin For airport_name 
            $i=0;
            while(isset($_POST['airport_name'][$i]))
                    {
                    if(trim($_POST['airport_name'][$i])!="")
                    {
                        $airport_name=trim($_POST['airport_name'][$i]);
                        $airport_distance=trim($_POST['airport_distance'][$i]);
                        //`id`, `post_property_id`, `airport_name`, `airport_distance` SELECT * FROM `users_post_airport_details` WHERE 1-->
                            $sql1="INSERT INTO users_post_airport_details (post_property_id, airport_name, airport_distance)
                            VALUES ($post_property_id,'$airport_name','$airport_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of airport_name

            // Begin For mall_station_name 
            $i=0;
            while(isset($_POST['mall_station_name'][$i]))
                    {
                    if(trim($_POST['mall_station_name'][$i])!="")
                    {
                        $mall_station_name=trim($_POST['mall_station_name'][$i]);
                        $mall_station_distance=trim($_POST['mall_station_distance'][$i]);
                        //`id`, `post_property_id`, `mall_station_name`, `mall_station_distance` SELECT * FROM `users_post_mall_details` WHERE 1 -->
                            $sql1="INSERT INTO users_post_mall_details (post_property_id, mall_station_name, mall_station_distance)
                            VALUES ($post_property_id,'$mall_station_name','$mall_station_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of mall_station_name

            // Begin For highway_name 
            $i=0;
            while(isset($_POST['highway_name'][$i]))
                    {
                    if(trim($_POST['highway_name'][$i])!="")
                    {
                        $highway_name=trim($_POST['highway_name'][$i]);
                        $highway_distance=trim($_POST['highway_distance'][$i]);
                                //`id`, `post_property_id`, `highway_name`, `highway_distance` SELECT * FROM `users_post_highway_details` WHERE 1 -->
                            $sql1="INSERT INTO users_post_highway_details (post_property_id, highway_name, highway_distance)
                            VALUES ($post_property_id,'$highway_name','$highway_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of highway_name

            // Begin For religious_establishment_name 
            $i=0;
            while(isset($_POST['religious_establishment_name'][$i]))
                    {
                    if(trim($_POST['religious_establishment_name'][$i])!="")
                    {
                        $religious_establishment_name=trim($_POST['religious_establishment_name'][$i]);
                        $religious_establishment_distance=trim($_POST['religious_establishment_distance'][$i]);
                        //`id`, `post_property_id`, `religious_establishment_name`, `religious_establishment_distance` SELECT * FROM `users_post_religious_establishment_details` WHERE 1 -->
                            $sql1="INSERT INTO users_post_religious_establishment_details (post_property_id, religious_establishment_name, religious_establishment_distance)
                            VALUES ($post_property_id,'$religious_establishment_name','$religious_establishment_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of religious_establishment_name


            // Begin For others_name 
            $i=0;
            while(isset($_POST['others_name'][$i]))
                    {
                    if(trim($_POST['others_name'][$i])!="")
                    {
                        $others_name=trim($_POST['others_name'][$i]);
                        $others_distance=trim($_POST['others_distance'][$i]);
                        //`id`, `post_property_id`, `others_name`, `others_distance` SELECT * FROM `users_post_others_details` WHERE 1 -->
                            $sql1="INSERT INTO users_post_others_details (post_property_id, others_name, others_distance)
                            VALUES ($post_property_id,'$others_name','$others_distance')";
                            $insert2=mysqli_query($conn,$sql1);
                        }
                    $i++;
                    }
            //end of others_name
            header("location:users_view_property_details.php?post_property_id=".$post_property_id."&msg=Updated Successfully");
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
    <!-- PAGE LEVEL STYLES-->
    <script language="javascript">

        function myFunction() {
            if (confirm("Are you sure to delete?") == true) {            
            return true;
            } else {
                return false;
                
            }
        }
    </script>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

    <?php 
    if(isset($_REQUEST['xedit']))
    {
    //`post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`, 
    //`property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, `plot_lenght`, `plot_lenght_unit`, 
    //`plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, `prossession_by`, `layout_sketch_map`, `property_image_1`, 
    //`property_image_2`, `property_video`, `property_location_link`, `property_current_location`, `property_ownership`, `property_approved_by`, 
    //`expected_price`, `price_per_unit`, `all_inclusive_price_yn`, `tax_govt_charges_yn`, `price_negotiable_yn`, `about_property`, `maintenance_staff_yn`, 
    //`water_storage_yn`, `running_water_facility_yn`, `rain_water_harvesting_yn`, `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, 
    //`solar_power_plant_yn`, `solar_street_light_yn`, `overlooking_pool_yn`, `overlooking_club_yn`, `overlooking_park_garden_yn`, 
    //`overlooking_main_road_yn`, `property_gated_society_yn`, `property_gated_society_name`, `property_facing`, `corner_property_yn`, 
    //`suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`, `no_of_installment`, `installment_amount_month`, 
    //`reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, `others_terms_conditions`, `hot_offer`, `under_construction_yn`, 
    //`sold_out_yn`, `submit_status`, `under_review`, `live_status`, `reject_status` SELECT * FROM `users_post_property_details` WHERE 1

    $post_property_id=$_REQUEST['post_property_id'];
	$qre=mysqli_query($conn,"SELECT * FROM users_post_property_details where post_property_id=$post_property_id");
	if($fetch=mysqli_fetch_array($qre))
	{
        $post_date= $fetch['post_date'] ;
        $property_list= $fetch['property_list'] ;
        $property_type= $fetch['property_type'] ;
        $property_state= $fetch['property_state'] ;
        $property_district= $fetch['property_district'] ;
        $property_city= $fetch['property_city'] ;
        $property_locality= $fetch['property_locality'] ;
        $property_sub_locality= $fetch['property_sub_locality'] ;
        $apartment_socity= $fetch['apartment_socity'] ;
        $plot_no= $fetch['plot_no'] ;
        $plot_area= $fetch['plot_area'] ;
        $plot_area_unit= $fetch['plot_area_unit'] ;
        $plot_lenght= $fetch['plot_lenght'] ; 
        $plot_lenght_unit= $fetch['plot_lenght_unit'] ; 
        $plot_breadth= $fetch['plot_breadth'] ; 
        $plot_breadth_unit= $fetch['plot_breadth_unit'] ; 
        $boundry_yn= $fetch['boundry_yn'] ; 
        $no_open_side= $fetch['no_open_side'] ; 
        $any_construction_yn= $fetch['any_construction_yn'] ; 
        $prossession_by= $fetch['prossession_by'] ; 
        $layout_sketch_map= $fetch['layout_sketch_map'] ; 
        $property_image_1= $fetch['property_image_1'] ; 
        $property_image_2= $fetch['property_image_2'] ; 
        $property_video= $fetch['property_video'] ; 
        $property_location_link= $fetch['property_location_link'] ; 
        $property_current_location= $fetch['property_current_location'] ; 
        $property_ownership= $fetch['property_ownership'] ; 
        $property_approved_by= $fetch['property_approved_by'] ; 
        $expected_price= $fetch['expected_price'] ; 
        $price_per_unit= $fetch['price_per_unit'] ; 
        $all_inclusive_price_yn= $fetch['all_inclusive_price_yn'] ; 
        $tax_govt_charges_yn= $fetch['tax_govt_charges_yn'] ; 
        $price_negotiable_yn= $fetch['price_negotiable_yn'] ; 
        $about_property= $fetch['about_property'] ; 
        $maintenance_staff_yn= $fetch['maintenance_staff_yn'] ; 
        $water_storage_yn= $fetch['water_storage_yn'] ; 
        $running_water_facility_yn= $fetch['running_water_facility_yn'] ; 
        $rain_water_harvesting_yn= $fetch['rain_water_harvesting_yn'] ; 
        $feng_shui_vaastu_complaint_yn= $fetch['feng_shui_vaastu_complaint_yn'] ; 
        $proper_drainage_system_yn= $fetch['proper_drainage_system_yn'] ; 
        $solar_power_plant_yn= $fetch['solar_power_plant_yn'] ; 
        $solar_street_light_yn= $fetch['solar_street_light_yn'] ; 
        $overlooking_pool_yn= $fetch['overlooking_pool_yn'] ; 
        $overlooking_club_yn= $fetch['overlooking_club_yn'] ; 
        $overlooking_park_garden_yn= $fetch['overlooking_park_garden_yn'] ; 
        $overlooking_main_road_yn= $fetch['overlooking_main_road_yn'] ; 
        $property_gated_society_yn= $fetch['property_gated_society_yn'] ; 
        $property_gated_society_name= $fetch['property_gated_society_name'] ; 
        $corner_property_yn= $fetch['corner_property_yn'] ; 
        $suggest_property_feature= $fetch['suggest_property_feature'] ; 
        $best_deal= $fetch['best_deal'] ; 
        $down_payment_percentage= $fetch['down_payment_percentage'] ; 
        $rate_interest= $fetch['rate_interest'] ; 
        $no_of_installment= $fetch['no_of_installment'] ; 
        $installment_amount_month= $fetch['installment_amount_month'] ; 
        $reg_after_downpayment_yn= $fetch['reg_after_downpayment_yn'] ; 
        $reg_original_deed_yn= $fetch['reg_original_deed_yn'] ; 
        $third_party_gurantor_yn= $fetch['third_party_gurantor_yn'] ; 
        $others_terms_conditions= $fetch['others_terms_conditions'] ; 
        $hot_offer= $fetch['hot_offer'] ; 
        $under_construction_yn= $fetch['under_construction_yn'] ; 
        $sold_out_yn= $fetch['sold_out_yn'] ; 

	}
		 
}
?>
<!-- Nav header side =========================================-->
            <?php include 'dashboard_header.php'; ?>
<!-- Nav header side =========================================-->

<!--=====================================-->
        <div class="content-wrapper">
<!--=====================================-->






<!--=========== Start Indigator Bar===============================-->
            <div class="row pt-2 text-center" style="background-color:#00a7f3; color:#fff; font-width:700;">
                <div class="col-lg-12">
                   <h4>Update Property</h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->









<!--=========== START PAGE CONTENT======================================================================-->


<!--========== Upload Form section Start================-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Update Your Property Details</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>

                            <div class="ibox-body">
                                <!--

                                    //`post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`, 
                                    //`property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, `plot_lenght`, `plot_lenght_unit`, 
                                    //`plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, `prossession_by`, `layout_sketch_map`, `property_image_1`, 
                                    //`property_image_2`, `property_video`, `property_location_link`, `property_current_location`, `property_ownership`, `property_approved_by`, 
                                    //`expected_price`, `price_per_unit`, `all_inclusive_price_yn`, `tax_govt_charges_yn`, `price_negotiable_yn`, `about_property`, `maintenance_staff_yn`, 
                                    //`water_storage_yn`, `running_water_facility_yn`, `rain_water_harvesting_yn`, `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, 
                                    //`solar_power_plant_yn`, `solar_street_light_yn`, `overlooking_pool_yn`, `overlooking_club_yn`, `overlooking_park_garden_yn`, 
                                    //`overlooking_main_road_yn`, `property_gated_society_yn`, `property_gated_society_name`, `property_facing`, `corner_property_yn`, 
                                    //`suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`, `no_of_installment`, `installment_amount_month`, 
                                    //`reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, `others_terms_conditions`, `hot_offer`, `under_construction_yn`, 
                                    //`sold_out_yn`, `submit_status`, `under_review`, `live_status`, `reject_status` SELECT * FROM `users_post_property_details` WHERE 1

                                -->
                                <form action="" method="POST"   enctype="multipart/form-data">
                                <input type="hidden" id="post_property_id" name="post_property_id"  readonly="readonly" value="<?php if(isset($_REQUEST['xedit'])) {echo $post_property_id;}?>" />    
                                <input type="hidden" name="post_date" value="<?php echo date("jS \of F Y"); ?>">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <input type="radio" class="check_property_option" id="check_property_option" name="property_list"
                                            value="Sell" <?php if(isset($_REQUEST['xedit'])) {if($property_list=='Sell') echo "checked";}?>>
                                        <label for="Sell">Sell</label>&nbsp;&nbsp;
                                        <input type="radio" class="check_property_option" id="check_property_option" name="property_list"
                                            value="Rent" <?php if(isset($_REQUEST['xedit'])) {if($property_list=='Rent') echo "checked";}?>>
                                        <label for="Rent">Rent</label>&nbsp;&nbsp;
                                        <input type="radio" class="check_property_option" id="check_property_option" name="property_list"
                                            value="Lease" <?php if(isset($_REQUEST['xedit'])) {if($property_list=='Lease') echo "checked";}?>>
                                        <label for="Lease">Lease</label>&nbsp;&nbsp;
                                        <input type="radio" class="check_property_option" id="check_property_option" name="property_list" 
                                        value="Lease" <?php if(isset($_REQUEST['xedit'])) {if($property_list=='Paying Guest') echo "checked";}?>>
                                        <label for="Paying Guest">Paying Guest</label>
                                    </div>
                                    <div class="col-lg-4 form-group">

                                        <label>Property Type <span class="text-danger">*</span></label>
                                        <select class="form-control" name="property_type" required>
                                            <option selected="selected">Select Option</option>
                                            <optgroup label="Land / Plot">
                                                <option value="Residential" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Residential') echo "selected";}?> >Residential</option>
                                                <option value="Commercial" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Commercial') echo "selected";}?> >Commercial</option>
                                                <option value="Agricultural" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Agricultural') echo "selected";}?> >Agricultural</option>
                                                <option value="Industrial" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Industrial') echo "selected";}?> >Industrial</option>
                                                <option value="Land / Plot Others"  <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Land / Plot Others') echo "selected";}?> >Others</option>
                                            </optgroup>

                                            <optgroup label="House(s)">
                                                <option value="Independent / Builder Floor" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Independent / Builder Floor') echo "selected";}?>>Independent / Builder Floor</option>
                                                <option value="Independent House / Villa" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Independent House / Villa') echo "selected";}?>>Independent House / Villa</option>
                                                <option value="Farm House" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Farm House') echo "selected";}?>>Farm House</option>
                                                <option value="Bunglow" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Bunglow') echo "selected";}?>>Bunglow</option>
                                                <option value="Office Space" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Office Space') echo "selected";}?>>Office Space</option>
                                                <option value="Shop" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='Shop') echo "selected";}?>>Shop</option>
                                                <option value="House Others" <?php if(isset($_REQUEST['xedit'])) {if($property_type=='House Others') echo "selected";}?>  >Others</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 form-group">
                                        <label>State<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_state" id="property_state" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_state;}?>"  placeholder="State *" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>District<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_district" id="property_district" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_district;}?>"  placeholder="District *" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>City<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_city" id="property_city" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_city;}?>"  placeholder="City *" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Locality<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_locality" id="property_locality" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_locality;}?>"  placeholder="" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Sub Locality<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_sub_locality" id="property_sub_locality" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_sub_locality;}?>"  placeholder="" required />
                                    </div>
                                   
                                    <div class="col-lg-4 form-group">
                                        <label>Apartment Socity<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="apartment_socity" id="apartment_socity" value="<?php if(isset($_REQUEST['xedit'])) {echo $apartment_socity;}?>"  placeholder="" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Plot no<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="plot_no" id="plot_no" value="<?php if(isset($_REQUEST['xedit'])) {echo $plot_no;}?>"  placeholder="" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Plot Area<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="plot_area" id="plot_area" value="<?php if(isset($_REQUEST['xedit'])) {echo $plot_area;}?>"  placeholder="" required />
                                    </div>
                                     <div class="col-lg-4 form-group">
                                        <label>Plot Area Unit<span class="text-danger">*</span></label>
                                            <select class="form-control" name="plot_area_unit" required>
                                                <option selected  value=""><span style="color:red;">Choose</span> </option>
                                                <option value="Sq. ft." <?php if(isset($_REQUEST['xedit'])) {if($plot_area_unit=='Sq. ft.') echo "selected";}?>>Sq. ft.</option>
                                                <option value="Sq. Mtr."<?php if(isset($_REQUEST['xedit'])) {if($plot_area_unit=='Sq. Mtr.') echo "selected";}?>>Sq. Mtr.</option>
                                            </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Plot Lenght<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="plot_lenght" id="plot_lenght" value="<?php if(isset($_REQUEST['xedit'])) {echo $plot_lenght;}?>"  placeholder="" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Plot Lenght Unit<span class="text-danger">*</span></label>
                                            <select class="form-control" name="plot_lenght_unit" required>
                                                <option selected value="">Choose</option>
                                                <option value="Feet" <?php if(isset($_REQUEST['xedit'])) {if($plot_lenght_unit=='Feet') echo "selected";}?>>Feet</option>
                                                <option value="Meter" <?php if(isset($_REQUEST['xedit'])) {if($plot_lenght_unit=='Meter') echo "selected";}?>>Meter</option>
                                            </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Plot Breadth <span class="text-danger">*</span></label>
                                        <input class="form-control"   name="plot_breadth" id="plot_breadth" value="<?php if(isset($_REQUEST['xedit'])) {echo $plot_breadth;}?>"  placeholder="" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Plot Breadth Unit<span class="text-danger">*</span></label>
                                            <select class="form-control" name="plot_breadth_unit" required>
                                                <option selected  value="">Choose</option>
                                                <option value="Feet" <?php if(isset($_REQUEST['xedit'])) {if($plot_breadth_unit=='Feet') echo "selected";}?>>Feet</option>
                                                <option value="Meter" <?php if(isset($_REQUEST['xedit'])) {if($plot_breadth_unit=='Meter') echo "selected";}?>>Meter</option>
                                            </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Prossession by<span class="text-danger">*</span></label>
                                            <select class="form-control" name="prossession_by" required>
                                            <option selected>Expected by</option>
                                                    <option value="Immediate" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='Immediate') echo "selected";}?>>Immediate</option>
                                                    <option value="Within 3 months" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='Within 3 months') echo "selected";}?>>Within 3 months</option>
                                                    <option value="Within 6 months" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='Within 6 months') echo "selected";}?>>Within 6 months</option>
                                                    <option value="By 2024" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='By 2024') echo "selected";}?>>By 2024</option>
                                                    <option value="By 2025" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='By 2025') echo "selected";}?>>By 2025</option>
                                                    <option value="By 2026" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='By 2026') echo "selected";}?>>By 2026</option>
                                                    <option value="By 2027" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='By 2027') echo "selected";}?>>By 2027</option>
                                                    <option value="By 2028" <?php if(isset($_REQUEST['xedit'])) {if($prossession_by=='By 2028') echo "selected";}?>>By 2028</option>
                                            </select>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Is there a boundary / guard wall around the property?</label>
                                        <input type="radio" class="check_boundary_option" id="check_boundary_option" name="boundry_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($boundry_yn=='1') echo "checked";}?>>
                                        <label for="Yes">Yes</label>&nbsp;&nbsp;
                                        <input type="radio" class="check_boundary_option" id="check_boundary_option" name="boundry_yn" value="0" <?php if(isset($_REQUEST['xedit'])) {if($boundry_yn=='0') echo "checked";}?>>
                                        <label for="No">No</label>&nbsp;&nbsp;
                                    </div>

                                    <div class="col-lg-4 form-group">
                                        <label>Nos. of open sides </label>
                                        <div>
                                            <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                value="1" <?php if(isset($_REQUEST['xedit'])) {if($no_open_side=='1') echo "checked";}?>>
                                            <label for="Yes">1</label>&nbsp;&nbsp;
                                            <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                value="2" <?php if(isset($_REQUEST['xedit'])) {if($no_open_side=='2') echo "checked";}?>>
                                            <label for="No">2</label>&nbsp;&nbsp;
                                            <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                value="3" <?php if(isset($_REQUEST['xedit'])) {if($no_open_side=='3') echo "checked";}?>>
                                            <label for="Yes">3</label>&nbsp;&nbsp;
                                            <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                value="3+" <?php if(isset($_REQUEST['xedit'])) {if($no_open_side=='3+') echo "checked";}?>>
                                            <label for="No">3+</label>&nbsp;&nbsp;                                            
                                        </div>

                                    </div>


                                    <div class="col-lg-4 form-group">
                                        <label>Any construction done on this property? </label>
                                        <div>
                                            <input type="radio" class="check_cons_done_option" id="check_cons_done_option" name="any_construction_yn"
                                                value="1" <?php if(isset($_REQUEST['xedit'])) {if($any_construction_yn=='1') echo "checked";}?>>
                                            <label for="Yes">Yes</label>&nbsp;&nbsp;
                                            <input type="radio" class="check_cons_done_option" id="check_cons_done_option" name="any_construction_yn"
                                                value="0" <?php if(isset($_REQUEST['xedit'])) {if($any_construction_yn=='0') echo "checked";}?>>
                                            <label for="No">No</label>&nbsp;&nbsp;                                            
                                        </div>
                                    </div>



                                    <div class="col-lg-3 form-group">
                                    <label for="">Layout / Sketch Map <span class="text-danger">*</span><br> <a href="upload_property_documents/<?php if(isset($_REQUEST['xedit'])) {echo $layout_sketch_map;}?>" target="_blank">Open Document</a> </label>
                                        <div class="form-group">
                                            <!-- Only PDF Upload -->
                                            <iframe src="upload_property_documents/<?php if(isset($_REQUEST['xedit'])) {echo $layout_sketch_map;}?>" style="width: 100%; height: 170px;border: none;"></iframe>
                                            <input type="file" class="form-control" name="layout_sketch_map" value="<?php if(isset($_REQUEST['xedit'])) {echo $layout_sketch_map;}?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <label for="">Image of the Particular Property <span class="text-danger">*</span><br> <a href="upload_property_images/<?php if(isset($_REQUEST['xedit'])) {echo $property_image_1;}?>" target=_blank> View Image </a> </label>
                                        <img src="upload_property_images/<?php if(isset($_REQUEST['xedit'])) {echo $property_image_1;}?>" alt="" srcset="">
                                        <div class="form-group">
                                             <!-- Only image Upload -->
                                            <input type="file" class="form-control" name="property_image_1" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_image_1;}?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    <label for="">Image of the Particular Property <span class="text-danger">*</span><br> <a href="upload_property_images/<?php if(isset($_REQUEST['xedit'])) {echo $property_image_2;}?>" target=_blank>View Image</a></label>
                                    <img src="upload_property_images/<?php if(isset($_REQUEST['xedit'])) {echo $property_image_2;}?>" alt="" srcset="">
                                        <div class="form-group">
                                             <!-- Only image Upload -->
                                            <input type="file" class="form-control" name="property_image_2" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_image_2;}?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    <label for="">Videography of the Property <span class="text-danger">*</span> <br><a href="upload_property_videos/<?php if(isset($_REQUEST['xedit'])) {echo $property_video;}?>" target="_blank">Open Videography</a> </label>
                                        <div class="form-group">
                                             <!-- Only Video Upload -->
                                             <video width="100%" height="170px" controls>
                                                <source src="upload_property_videos/<?php if(isset($_REQUEST['xedit'])) {echo $property_video;}?>" type="video/mp4">
                                                <source src="upload_property_videos/<?php if(isset($_REQUEST['xedit'])) {echo $property_video;}?>" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <input type="file" class="form-control"  name="property_video" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_video;}?>">
                                        </div>
                                    </div>  
                                    <div class="col-lg-5 form-group">
                                        <label>Share the link of the Location of your property<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_location_link" id="property_location_link" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_location_link;}?>"  placeholder="" required />
                                    </div>
                                    <div class="col-lg-1 form-group">
                                            <h5 style="text-align:center; padding-top:2em;">Or</h5>
                                        </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Please click find your current location<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_current_location" id="current_location"  value="<?php if(isset($_REQUEST['xedit'])) {echo $property_current_location;}?>"  placeholder="" required />
                                    </div>

                                    <div class="col-lg-2 form-group">
                                        <input type="button" class="btn btn-primary" name="btn" value="Find Your Location" onClick="getLocation();" style="margin-top:2em;">
                                    </div>

                                    <div class="col-lg-4 form-group">
                                        <label>Ownership <span class="text-danger">*</span></label>
                                        <select class="form-control" name="property_ownership" required>
                                            <option selected>Select option</option>
                                            <option value="Freehold" <?php if(isset($_REQUEST['xedit'])) {if($property_ownership=='Freehold') echo "selected";}?>>Freehold</option>
                                            <option value="Lease hold"  <?php if(isset($_REQUEST['xedit'])) {if($property_ownership=='Lease hold') echo "selected";}?>>Lease hold</option>
                                            <option value="Co-op. Society"  <?php if(isset($_REQUEST['xedit'])) {if($property_ownership=='Co-op. Society') echo "selected";}?>>Co-op. Society</option>
                                            <option value="Power of Attorney"  <?php if(isset($_REQUEST['xedit'])) {if($property_ownership=='Power of Attorney') echo "selected";}?>>Power of Attorney</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 form-group">
                                        <label>Which authority has approved this property?<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="property_approved_by" id="property_approved_by" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_approved_by;}?>"  placeholder="Local authority (please write the name of the authority if it is known to you) - optional" required />
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Price Details <span class="text-danger">*</span></label>
                                        <input class="form-control"   name="expected_price" id="expected_price" value="<?php if(isset($_REQUEST['xedit'])) {echo $expected_price;}?>"  placeholder="₹ Expected Price" required />
                                    </div>

                                    <div class="col-lg-4 form-group">
                                        <label>Price per sq. ft. / mtr.<span class="text-danger">*</span></label>
                                        <input class="form-control"   name="price_per_unit" id="price_per_unit" value="<?php if(isset($_REQUEST['xedit'])) {echo $price_per_unit;}?>"  placeholder="₹ Price per sq. ft. / mtr." required />
                                    </div>

                                    <div class="col-lg-2 form-group">
                                        <label for="">&nbsp;</label>
                                        <div>
                                            <label class="ui-checkbox">
                                            <input type="checkbox"  id="all_inclusive_price_yn"  name="all_inclusive_price_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($all_inclusive_price_yn=='1') echo "checked";}?>>
                                            <span class="input-span"></span>All inclusive Price</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 form-group">
                                        <label for="">&nbsp;</label>
                                        <div>
                                            <label class="ui-checkbox">
                                            <input type="checkbox"  id="tax_govt_charges_yn" name="tax_govt_charges_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($tax_govt_charges_yn=='1') echo "checked";}?>>
                                            <span class="input-span"></span>Tax & Govt. charges excluded</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 form-group">
                                        <label for="">&nbsp;</label>
                                        <div>
                                            <label class="ui-checkbox">
                                            <input type="checkbox"  id="price_negotiable_yn" name="price_negotiable_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($price_negotiable_yn=='1') echo "checked";}?>>
                                            <span class="input-span"></span>Price Negotiable</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <h3 class="heading-3">What makes your property unique?</h3>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label for="">(adding description will increase your visibility)</label>
                                        <textarea class="form-control"   name="about_property" id="about_property"  cols="30" rows="5" placeholder="Share some details about your property like spacious room, well maintained facilities"><?php if(isset($_REQUEST['xedit'])) {echo $about_property;}?></textarea>

                                    </div>
                                    <div class="col-lg-12">
                                    <h3 class="heading-3">Add amenities / unique features</h3>

                                    <h5 class="heading-2"><b>Amenities</b></h5>

                                        <div class="row">
                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="maintenance_staff_yn" name="maintenance_staff_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($maintenance_staff_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>Maintenance Staff</label>
                                                </div>
                                            </div>   
                                            
                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="rain_water_harvesting_yn" name="rain_water_harvesting_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($rain_water_harvesting_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>Rain water harvesting</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="solar_power_plant_yn" name="solar_power_plant_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($solar_power_plant_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span> Solar Power Plant </label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="water_storage_yn" name="water_storage_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($water_storage_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>Water Storage</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="feng_shui_vaastu_complaint_yn" name="feng_shui_vaastu_complaint_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($feng_shui_vaastu_complaint_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span> Feng Shui / Vaastu Complaint</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="solar_street_light_yn" name="solar_street_light_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($solar_street_light_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span> Solar Street light</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="running_water_facility_yn" name="running_water_facility_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($running_water_facility_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>   Running Water facility</label>
                                                </div>
                                            </div> 


                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="proper_drainage_system_yn" name="proper_drainage_system_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($proper_drainage_system_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>    Proper Drainage System</label>
                                                </div>
                                            </div> 

                                        </div>

                                        <h5 class="heading-2"><b>Overlooking</b></h5>

                                        <div class="row">

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="overlooking_pool_yn" name="overlooking_pool_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($overlooking_pool_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span> Pool</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="overlooking_park_garden_yn" name="overlooking_park_garden_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($overlooking_park_garden_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span> Park / Garden</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="overlooking_club_yn" name="overlooking_club_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($overlooking_club_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>  Club</label>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="overlooking_main_road_yn" name="overlooking_main_road_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($overlooking_main_road_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>  Main Road</label>
                                                </div>
                                            </div> 




                                        </div>

                                        <h5 class="heading-2">Other Facilities</h5>

                                        <div class="row pt-3">
                                            
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="property_gated_society_yn">Is the property in a gated society ? <span class="text-danger">*</span></label>
                                                                                    
                                                    <div>
                                                        <input type="radio" class="checkoption" id="Yes" name="property_gated_society_yn"
                                                            value="1" <?php if(isset($_REQUEST['xedit'])) {if($property_gated_society_yn=='1') echo "checked";}?>>
                                                        <label for="property_gated_society_yn">Yes</label>&nbsp;&nbsp;
                                                        <input type="radio" class="checkoption" id="No" name="property_gated_society_yn"
                                                            value="0" <?php if(isset($_REQUEST['xedit'])) {if($property_gated_society_yn=='0') echo "checked";}?>>
                                                        <label for="property_gated_society_yn">No</label>&nbsp;&nbsp;
                                                    </div>
                                                    <div>
                                                    <input type="text" name="property_gated_society_name" class="form-control" placeholder="If yes, name the society" value="<?php if(isset($_REQUEST['xedit'])) {echo $property_gated_society_name;}?>">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="col-lg-3 form-group">
                                                <label for="">&nbsp;</label>
                                                <div>
                                                    <label class="ui-checkbox">
                                                    <input type="checkbox"  id="corner_property_yn" name="corner_property_yn" value="1" <?php if(isset($_REQUEST['xedit'])) {if($corner_property_yn=='1') echo "checked";}?>>
                                                    <span class="input-span"></span>Corner Property</label>
                                                </div>
                                            </div> 

                                        </div>



                                        
                                            <div class="row"  id="details_facing_road">
                                                <table class="table" id="table_facing_road">
                                                    <tr>
                                                        <th style="border-top: none; vertical-align: middle;" class="col-lg-3">Details of facing road(s)<span class="text-danger">*</span></th>
                                                        <th style="border-top: none; vertical-align: middle;" class="col-lg-3">Details of facing road(s)<span class="text-danger">*</span></th>
                                                        <th style="border-top: none; vertical-align: middle;" class="col-lg-2">Width of facing road <span class="text-danger">*</span></th>
                                                        <th style="border-top: none; vertical-align: middle;" class="col-lg-2">Unit <span class="text-danger">*</span></th>
                                                        <th style="border-top: none; vertical-align: middle;" class="col-lg-3">Condition of the road(s) <span class="text-danger">*</span></th>
                                                    </tr>
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_road_details where post_property_id=$post_property_id");
                                                    while($road_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $property_facing= $road_details['property_facing'] ;
                                                        $direction_road= $road_details['direction_road'] ;
                                                        $facing_road= $road_details['facing_road'] ;
                                                        $facing_road_unit= $road_details['facing_road_unit'] ;
                                                        $facing_road_condition= $road_details['facing_road_condition'] ;
                                                    ?>
                                                    <!--`id`, `post_property_id`, `property_facing`, `direction_road`, `facing_road`, `facing_road_unit`, `facing_road_condition` SELECT * FROM `users_post_road_details` WHERE 1-->
                                                        <tr>
                                                            <td>
                                                                <select class="form-control" name="property_facing[]" required>
                                                                    <option selected>Select Options</option>
                                                                    <option value="North" <?php if($property_facing=='North') echo 'selected';?>>North</option>
                                                                    <option value="South" <?php if($property_facing=='South') echo 'selected';?>>South</option>
                                                                    <option value="East" <?php if($property_facing=='East') echo 'selected';?>>East</option>
                                                                    <option value="West" <?php if($property_facing=='West') echo 'selected';?>>West</option>
                                                                    <option value="North-East" <?php if($property_facing=='North-East') echo 'selected';?>>North-East</option>
                                                                    <option value="North-West" <?php if($property_facing=='North-West') echo 'selected';?>>North-West</option>
                                                                    <option value="South-East" <?php if($property_facing=='South-East') echo 'selected';?>>South-East</option>
                                                                    <option value="South-West" <?php if($property_facing=='South-West') echo 'selected';?>>South-West</option>
                                                                </select>
                                                            </td>
                                                            <td><input class="form-control" type="text" name="direction_road[]" value="<?php echo $direction_road;?>"  placeholder="Direction of faceing road *" required onKeyUp="convert_data_to_upper(this);"></td>
                                                            <td><input class="form-control" type="text" name="facing_road[]" value="<?php echo $facing_road;?>" placeholder="Enter the width *"  required onKeyUp="convert_data_to_upper(this);"></td>
                                                            <td>
                                                                <select class="form-control" name="facing_road_unit[]" required>
                                                                    <option selected>Choose</option>
                                                                    <option value="Feet" <?php if($facing_road_unit=='Feet') echo 'selected';?>>Feet</option>
                                                                    <option value="Meter" <?php if($facing_road_unit=='Meter') echo 'selected';?>>Meter</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select class="form-control" name="facing_road_condition[]" required>
                                                                    <option selected>Choose</option>
                                                                    <option value="Kutcha" <?php if($facing_road_condition=='Kutcha') echo 'selected';?> >Kutcha</option>
                                                                    <option value="Pucca" <?php if($facing_road_condition=='Pucca') echo 'selected';?> >Pucca</option>
                                                                    <option value="Semi-pucca" <?php if($facing_road_condition=='Semi-pucca') echo 'selected';?> >Semi-pucca</option>
                                                                </select>
                                                            </td>
                                                                            
                                                            <?php
                                                            if($flg_adrv==0)
                                                            {  ?>
                                                            <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_facing_road_btn" id="add_facing_road_btn" value="Add"></td>
                                                            <?php
                                                            $flg_adrv=1;
                                                            }
                                                            else 
                                                            { ?>
                                                            <td><input class="btn btn-danger" type="button" name="remove_facing_road_btn" id="remove_facing_road_btn" value="Remove"></td>                                                        
                                                            <?php
                                                            }
                                                            ?>
                                                                    
                                                        </tr>
                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>
                                                        <tr>
                                                            <!--`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `facing_road_condition` SELECT * FROM `users_post_road_details` WHERE 1-->
                                                            <td>
                                                                <select class="form-control" name="property_facing[]" required>
                                                                    <option value="" selected disabled="none">Select Options</option>
                                                                    <option value="North">North</option>
                                                                    <option value="South">South</option>
                                                                    <option value="East">East</option>
                                                                    <option value="West">West</option>
                                                                    <option value="North-East">North-East</option>
                                                                    <option value="North-West">North-West</option>
                                                                    <option value="South-East">South-East</option>
                                                                    <option value="South-West">South-West</option>
                                                                </select>
                                                            </td>
                                                            <td><input class="form-control" type="text" name="direction_road[]"   placeholder="Direction of faceing road *" required onKeyUp="convert_data_to_upper(this);"></td>
                                                            <td><input class="form-control" type="text" name="facing_road[]" placeholder="Enter the width *"  required onKeyUp="convert_data_to_upper(this);"></td>
                                                            <td>
                                                                <select class="form-control" name="facing_road_unit[]" required>
                                                                    <option value="" selected disabled="none">Choose</option>
                                                                    <option value="Feet">Feet</option>
                                                                    <option value="Meter">Meter</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select class="form-control" name="facing_road_condition[]" required>
                                                                    <option value="" selected disabled="none" >Choose</option>
                                                                    <option value="Kutcha">Kutcha</option>
                                                                    <option value="Pucca">Pucca</option>
                                                                    <option value="Semi-pucca">Semi-pucca</option>
                                                                </select>
                                                            </td>            
                                                            <td><input class="btn btn-primary pl-4 pr-4 " type="button" name="add_facing_road_btn" id="add_facing_road_btn" value="Add"></td>
                                                        
                                                        </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                            

                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                        <h5 class="heading-3">Location Advantage (highlight the nearby landmarks)</h5>
                                                </div>


                                                <table class="table" id="table_metro_station">
                                                    <tr>
                                                        <th  style="border-top: none; vertical-align: middle;" class="col-lg-7">Landmarks (mention the names) <span class="text-danger">*</span></th>
                                                        <th  style="border-top: none; vertical-align: middle;" class="col-lg-4">Distance from the property (km / mtr) <span class="text-danger">*</span></th>
                                                        <th  style="border-top: none; vertical-align: middle;" class="col-lg-1"></th>
                                                    </tr>
                                                    
                                                    <!--`id`, `post_property_id`, `metro_station_name`, `metro_station_distance` SELECT * FROM `users_post_metro_details` WHERE 1 -->
                                                    
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_metro_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $metro_station_name= $f_details['metro_station_name'] ;
                                                        $metro_station_distance= $f_details['metro_station_distance'] ;
                                                    ?>

                                                        <tr>
                                                            <td>
                                                                <input type="text" name="metro_station_name[]" class="form-control" value="<?php echo $metro_station_name;?>" placeholder="Close to metro station ( please write the name – optional ) ">
                                                            </td>
                                                            <td>
                                                                <input type="text"  name="metro_station_distance[]" class="form-control" value="<?php echo $metro_station_distance;?>" placeholder=" km / mtr">
                                                            </td>
                                                                    
                                                            <?php
                                                            if($flg_adrv==0)
                                                            {  ?>
                                                            <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_metro_station_btn" id="add_metro_station_btn" value="Add"></td>
                                                            <?php
                                                            $flg_adrv=1;
                                                            }
                                                            else 
                                                            { ?>
                                                             
                                                            <td><input class="btn btn-danger" type="button" name="remove_metro_station_btn" id="remove_metro_station_btn" value="Remove"></td>                                                    
                                                            <?php
                                                            }
                                                            ?>
                                                            
                                                        </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

                                                        <tr>
                                                            <td>
                                                                <input type="text" name="metro_station_name[]" class="form-control" placeholder="Close to metro station ( please write the name – optional ) ">
                                                            </td>
                                                            <td>
                                                                <input type="text"  name="metro_station_distance[]" class="form-control" placeholder=" km / mtr">
                                                            </td>
                                                                            
                                                            <td><input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_metro_station_btn" id="add_metro_station_btn" value="Add"></td>
                                                        </tr>

                                                    <?php
                                                    }
                                                    ?>

                                                </table>

                                                 <table class="table" id="table_school_distance">
                                                 <!-- `id`, `post_property_id`, `school_name`, `school_distance` SELECT * FROM `users_post_school_details` WHERE 1-->   
                                                     <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_school_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $school_name= $f_details['school_name'] ;
                                                        $school_distance= $f_details['school_distance'] ;
                                                    ?>

                                                        <tr>
                                                            <td class="col-lg-7">
                                                                <input type="text" name="school_name[]" value="<?php echo $school_name; ?>" class="form-control" 
                                                                placeholder="Close to Schools ( please write the name – optional ) ">
                                                            </td>
                                                            <td class="col-lg-4">
                                                                <input type="text"  name="school_distance[]" value="<?php echo $school_distance; ?>" class="form-control" 
                                                                placeholder=" km / mtr">
                                                            </td>
                                                                            

                                                            <?php
                                                            if($flg_adrv==0)
                                                            {  ?>
                                                            <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_school_distance_btn" id="add_school_distance_btn" value="Add"></td>
                                                            <?php
                                                            $flg_adrv=1;
                                                            }
                                                            else 
                                                            { ?>
                                                            <td><input class="btn btn-danger" type="button" name="remove_school_distance_btn" id="remove_school_distance_btn" value="Remove"></td>                                                    
                                                            <?php
                                                            }
                                                            ?>

                                                        </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>


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


                                                    <?php
                                                    }
                                                    ?>
                                                </table>

                                                 <table class="table" id="table_hospital_distance">
                                                    
                                                    <!-- `id`, `post_property_id`, `hospital_name`, `hospital_distance` SELECT * FROM `users_post_hospital_details` WHERE 1 -->
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_hospital_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $hospital_name= $f_details['hospital_name'] ;
                                                        $hospital_distance= $f_details['hospital_distance'] ;
                                                    ?>


                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="hospital_name[]" value="<?php echo $hospital_name ;?>" class="form-control" 
                                                            placeholder="Close to Hospital / Nuring Homes ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="hospital_distance[]" value="<?php echo $hospital_distance ;?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>

                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_hospital_distance_btn" id="add_hospital_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_hospital_distance_btn" id="remove_hospital_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>    
                                                        
                                                    </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>


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

                                                    <?php
                                                    }
                                                    ?>
                                                 </table>

                                                 <table class="table" id="table_railway_distance">
                                                    <!--`id`, `post_property_id`, `railway_station_name`, `railway_station_distance` SELECT * FROM `users_post_railway_details` WHERE 1-->
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_railway_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $railway_station_name= $f_details['railway_station_name'] ;
                                                        $railway_station_distance= $f_details['railway_station_distance'] ;
                                                    ?>

                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="railway_station_name[]" value="<?php echo $railway_station_name ;?>" class="form-control" 
                                                            placeholder="Close to Railway station ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="railway_station_distance[]" value="<?php echo $railway_station_distance ;?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_railway_distance_btn" id="add_railway_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_railway_distance_btn" id="remove_railway_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>   
                                                        
                                                    </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="railway_station_name[]" class="form-control" 
                                                            placeholder="Close to Railway station ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="railway_station_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_railway_distance_btn" id="add_railway_distance_btn" value="Add">
                                                        </td>
                                                    </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                 </table>

                                                 <table class="table" id="table_airport_distance">
                                                    <!--`id`, `post_property_id`, `airport_name`, `airport_distance` SELECT * FROM `users_post_airport_details` WHERE 1 -->
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_airport_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $airport_name= $f_details['airport_name'] ;
                                                        $airport_distance= $f_details['airport_distance'] ;
                                                    ?>

                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="airport_name[]" value="<?php echo $airport_name; ?>" class="form-control" 
                                                            placeholder="Close to Airport ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="airport_distance[]" value="<?php echo $airport_distance; ?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>

                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_airport_distance_btn" id="add_airport_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_airport_distance_btn" id="remove_airport_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>                  
                                                    </tr>


                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

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

                                                    <?php
                                                    }
                                                    ?>

                                                 </table>

                                                 <table class="table" id="table_mall_distance">
                                                        <!--`id`, `post_property_id`, `mall_station_name`, `mall_station_distance` SELECT * FROM `users_post_mall_details` WHERE 1 -->
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_mall_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $mall_station_name= $f_details['mall_station_name'] ;
                                                        $mall_station_distance= $f_details['mall_station_distance'] ;
                                                    ?>

                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="mall_station_name[]" value="<?php echo $mall_station_name ;?>" class="form-control" 
                                                            placeholder="Close to Mall ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="mall_station_distance[]" value="<?php echo $mall_station_distance ;?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>

                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_mall_distance_btn" id="add_mall_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_mall_distance_btn" id="remove_mall_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>                  
                                                    </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="mall_station_name[]" class="form-control" 
                                                            placeholder="Close to Mall ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="mall_station_distance[]" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                                        
                                                        <td  class="col-lg-1">
                                                            <input class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_mall_distance_btn" id="add_mall_distance_btn" value="Add">
                                                        </td>
                                                    </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                 </table>

                                                 <table class="table" id="table_highway_distance">
                                                    <!--`id`, `post_property_id`, `highway_name`, `highway_distance` SELECT * FROM `users_post_highway_details` WHERE 1 -->
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_highway_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $highway_name= $f_details['highway_name'] ;
                                                        $highway_distance= $f_details['highway_distance'] ;
                                                    ?>


                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="highway_name[]" value="<?php echo $highway_name ; ?>" class="form-control" 
                                                            placeholder="Close to Highway ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="highway_distance[]" value="<?php echo $highway_distance ; ?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_highway_distance_btn" id="add_highway_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_highway_distance_btn" id="remove_highway_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>      
                                                    </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

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

                                                    <?php
                                                    }
                                                    ?>
                                                 </table>

                                                 <table class="table" id="table_religious_establishment_distance">
                                                        <!--`id`, `post_property_id`, `religious_establishment_name`, `religious_establishment_distance` SELECT * FROM `users_post_religious_establishment_details` WHERE 1 -->
                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_religious_establishment_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $religious_establishment_name= $f_details['religious_establishment_name'] ;
                                                        $religious_establishment_distance= $f_details['religious_establishment_distance'] ;
                                                    ?>
                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="religious_establishment_name[]" value="<?php echo $religious_establishment_name; ?>" class="form-control" 
                                                            placeholder="Close to any religious Establishment like Temple / Church / Mosque etc. ( please write the name – optional )">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="religious_establishment_distance[]" value="<?php echo $religious_establishment_distance; ?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>
                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_religious_establishment_distance_btn" id="add_religious_establishment_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_religious_establishment_distance_btn" id="remove_religious_establishment_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>             

                                                    </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

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

                                                    <?php
                                                    }
                                                    ?>


                                                 </table>

                                                 <table class="table" id="table_others_distance">
                                                        <!--`id`, `post_property_id`, `others_name`, `others_distance` SELECT * FROM `users_post_others_details` WHERE 1 -->

                                                    <?php
                                                    $flg_adrv=0;
                                                    $road_details_sql=mysqli_query($conn,"SELECT * FROM users_post_others_details where post_property_id=$post_property_id");
                                                    while($f_details=mysqli_fetch_array($road_details_sql))
                                                    {
                                                        $others_name= $f_details['others_name'] ;
                                                        $others_distance= $f_details['others_distance'] ;
                                                    ?>

                                                    <tr>
                                                        <td class="col-lg-7">
                                                            <input type="text" name="others_name[]" value="<?php echo $others_name ; ?>" class="form-control" 
                                                            placeholder="Others (please write the name with its activity – optional)">
                                                        </td>
                                                        <td class="col-lg-4">
                                                            <input type="text"  name="others_distance[]" value="<?php echo $others_distance ; ?>" class="form-control" 
                                                            placeholder=" km / mtr">
                                                        </td>

                                                        <?php
                                                        if($flg_adrv==0)
                                                        {  ?>
                                                        <td><input class="btn btn-primary pl-4 pr-4" type="button" name="add_others_distance_btn" id="add_others_distance_btn" value="Add"></td>
                                                        <?php
                                                        $flg_adrv=1;
                                                        }
                                                        else 
                                                        { ?>
                                                        <td><input class="btn btn-danger" type="button" name="remove_others_distance_btn" id="remove_others_distance_btn" value="Remove"></td>                                                  
                                                        <?php
                                                        }
                                                        ?>             
                                                    </tr>

                                                    <?php
                                                    }
                                                    if($flg_adrv==0)
                                                    {  
                                                    ?>

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

                                                    <?php
                                                    }
                                                    ?>
                                                 </table>



                                                <div class="col-lg-12">
                                                    <h5 class="heading-2">Suggest a property feature</h5>
                                                    <div class="form-group message">
                                                        <label>(adding description will increase your
                                                            visibility)</label>
                                                        <textarea class="form-control" cols="30" rows="10"
                                                            name="suggest_property_feature"
                                                            placeholder="Enter your USP’s (unique selling proposition) here."><?php if(isset($_REQUEST['xedit'])) {echo $suggest_property_feature;}?></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <h5>Best Deal</h5>
                                                    <div class="form-group">
                                                        <input type="text" name="best_deal" value="<?php if(isset($_REQUEST['xedit'])) {echo $best_deal;}?>" cols="" class="form-control"
                                                            placeholder="Why do you think that yours is the best deal?">
                                                    </div>
                                                </div>




                                                <div class="col-lg-12">
                                                    <h5>Direct EMI</h5>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="">Percentage of Down Payment</label>
                                                                <input type="text" name="down_payment_percentage" max=""   value="<?php if(isset($_REQUEST['xedit'])) {echo $down_payment_percentage;}?>"  class="form-control" placeholder="0 – 100%">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                            <label for="">Rate of Interest</label>
                                                                <input type="text" name="rate_interest" max=""  value="<?php if(isset($_REQUEST['xedit'])) {echo $rate_interest;}?>"  class="form-control" placeholder="0 – 15%">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                            <label for="">Maximum number of EMI(s)</label>
                                                                <input type="text" name="no_of_installment" max=""  value="<?php if(isset($_REQUEST['xedit'])) {echo $no_of_installment;}?>"  class="form-control" placeholder="0 – 300 months">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 pt-4">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                            <label for="">Installment Amount Month</label>
                                                                <input type="text" name="installment_amount_month" max=""  value="<?php if(isset($_REQUEST['xedit'])) {echo $installment_amount_month;}?>" class="form-control" placeholder="0 – 180 days">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label>Will you provide registration of the property after making the down payment?</label>
                                                                        <input type="radio" class="reg_after_downpayment_yn" id="reg_after_downpayment_yn" name="reg_after_downpayment_yn"
                                                                            value="1"   <?php if(isset($_REQUEST['xedit'])) {if($reg_after_downpayment_yn=='1') echo "checked";}?> >
                                                                        <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                                        <input type="radio" class="reg_after_downpayment_yn" id="reg_after_downpayment_yn" name="reg_after_downpayment_yn"
                                                                            value="0"   <?php if(isset($_REQUEST['xedit'])) {if($reg_after_downpayment_yn=='0') echo "checked";}?> >
                                                                        <label for="No">No</label>
                                                        </div>
                                                        <div class="col-lg-3">
                                                        <label>If you provide registration, who will keep the original deed?</label>
                                                                        <input type="radio" class="reg_original_deed_yn" id="reg_original_deed_yn" name="reg_original_deed_yn"
                                                                            value="1"  <?php if(isset($_REQUEST['xedit'])) {if($reg_original_deed_yn=='1') echo "checked";}?>>
                                                                        <label for="Yes">Party ?</label>&nbsp;&nbsp;
                                                                        <input type="radio" class="reg_original_deed_yn" id="reg_original_deed_yn" name="reg_original_deed_yn"
                                                                            value="0"  <?php if(isset($_REQUEST['xedit'])) {if($reg_original_deed_yn=='0') echo "checked";}?>>
                                                                        <label for="No">You ?</label>
                                                        </div>
                                                        
                                                        <div class="col-lg-3">
                                                            <label for="">Is there the need of any third party as guarantor?</label>

                                                            <input type="radio" class="third_party_gurantor_yn" id="third_party_gurantor_yn" name="third_party_gurantor_yn"
                                                                value="1" <?php if(isset($_REQUEST['xedit'])) {if($third_party_gurantor_yn=='1') echo "checked";}?>>
                                                            <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                            <input type="radio" class="third_party_gurantor_yn" id="third_party_gurantor_yn" name="third_party_gurantor_yn"
                                                                value="0" <?php if(isset($_REQUEST['xedit'])) {if($third_party_gurantor_yn=='0') echo "checked";}?>>
                                                            <label for="No">No</label>
                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="col-lg-12 col-md-12 mt-4">
                                                    
                                                    <div class="form-group">
                                                    <textarea class="form-control" cols="30" rows="10"
                                                            name="others_terms_conditions"
                                                            placeholder="Please write down other terms and conditions here"><?php if(isset($_REQUEST['xedit'])) {echo $others_terms_conditions;}?></textarea>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-lg-12 col-md-12">
                                                    <h5>Hot Offer</h5>
                                                    <div class="form-group">
                                                        <input type="text" name="hot_offer" value="<?php if(isset($_REQUEST['xedit'])) {echo $hot_offer;}?>" cols="" class="form-control"
                                                            placeholder="Please mention the offer with validity and terms and conditions">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <h5>Under Construction</h5>
                                                    <input type="radio" class="under_construction_yn" id="under_construction_yn" name="under_construction_yn"
                                                        value="1" <?php if(isset($_REQUEST['xedit'])) {if($under_construction_yn=='1') echo "checked";}?>>
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="under_construction_yn" id="under_construction_yn" name="under_construction_yn"
                                                        value="0" <?php if(isset($_REQUEST['xedit'])) {if($under_construction_yn=='0') echo "checked";}?>>
                                                    <label for="No">No</label>                                                        
                                                
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <h5>Sold out</h5>
                                                   
                                                    <input type="radio" class="sold_out_yn" id="sold_out_yn" name="sold_out_yn"
                                                        value="1" <?php if(isset($_REQUEST['xedit'])) {if($sold_out_yn=='1') echo "checked";}?>>
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="sold_out_yn" id="sold_out_yn" name="sold_out_yn"
                                                        value="0" <?php if(isset($_REQUEST['xedit'])) {if($sold_out_yn=='0') echo "checked";}?>>
                                                    <label for="No">No</label>                                                        
                                                
                                                </div>
                                                <div class="col-lg-12 pt-3">
                                                    <h5 class="heading-3">Please provide correct information, otherwise your listing might be blocked.</h5>
                                                </div>
                                            </div>

                                    </div>











                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <?php if(isset($_REQUEST['xedit'])) { ?><button class="btn btn-success" type="submit" name="update" >Update</button><?php } else {?><button class="btn btn-success" type="submit" name="submit" >Submit</button><?php } ?>
                                        </div>                                        
                                    </div>
                            
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--========== Upload Form section End================-->








<!--========== Display Data section Start============-->

<!--========== Display Data section End============-->





<!--=========== End PAGE CONTENT======================================================================-->








<!-- Nav header side =========================================-->
        <?php include 'dashboard_Footer.php'; ?>
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
    <script src="../assets/js/dynamic_update_form_customize.js"></script>
</body>

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



</html>