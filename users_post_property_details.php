<?php
include_once("db/conn.php");
require_once("db/user_sequre.php");

/*
    `post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, `property_city`,
    `property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, 
    `plot_lenght`, `plot_lenght_unit`, `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, 
    `prossession_by`, `layout_sketch_map`, `property_image_1`, `property_image_2`, `property_video`, `property_location_link`, 
    `property_current_location`, `property_ownership`, `property_approved_by`, `expected_price`, `price_per_unit`, `all_inclusive_price_yn`, 
    `tax_govt_charges_yn`, `price_negotiable_yn`, `about_property`, `maintenance_staff_yn`, `water_storage_yn`, `running_water_facility_yn`, 
    `rain_water_harvesting_yn`, `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`,
    `overlooking_pool_yn`, `overlooking_club_yn`, `overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, 
    `property_gated_society_name`, `property_facing`, `corner_property_yn`, 

//======================Dynamick Fields Start ====================================================================================================//

    <!--`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `facing_road_condition` SELECT * FROM `users_post_road_details` WHERE 1-->
    <!--`id`, `post_property_id`, `metro_station_name`, `metro_station_distance` SELECT * FROM `users_post_metro_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `school_name`, `school_distance` SELECT * FROM `users_post_school_details` WHERE 1-->
    <!--`id`, `post_property_id`, `hospital_name`, `hospital_distance` SELECT * FROM `users_post_hospital_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `railway_station_name`, `railway_station_distance` SELECT * FROM `users_post_railway_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `airport_name`, `airport_distance` SELECT * FROM `users_post_airport_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `mall_station_name`, `mall_station_distance` SELECT * FROM `users_post_mall_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `highway_name`, `highway_distance` SELECT * FROM `users_post_highway_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `religious_establishment_name`, `religious_establishment_distance` SELECT * FROM `users_post_religious_establishment_details` WHERE 1 -->
    <!--`id`, `post_property_id`, `others_name`, `others_distance` SELECT * FROM `users_post_others_details` WHERE 1 -->

//======================Dynamick Fields End =====================================================================================================//

    
    `suggest_property_feature`, `best_deal`, `down_payment_percentage`, `rate_interest`, `no_of_installment`, `installment_amount_month`,
    `reg_after_downpayment_yn`, `reg_original_deed_yn`, `third_party_gurantor_yn`, `others_terms_conditions`, `hot_offer`, `under_construction_yn`,
    `sold_out_yn` SELECT * FROM `users_post_property_details` WHERE 1
*/

if(isset($_POST['preview_next']))
{
     $user_id= $_POST['user_id'] ;
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
     if(isset($_FILES['layout_sketch_map'])){
        $errors= array();
        $layout_sketch_map=$_FILES['layout_sketch_map']['name'];
        $layout_sketch_map_temp=$_FILES['layout_sketch_map']['tmp_name'];
        if(empty($errors)==true){
            move_uploaded_file($layout_sketch_map_temp,"user_dashboard/upload_property_documents/".$layout_sketch_map);
        }
      

     }

     //property_image_1 / 2 File /* Only Jpg or Png Upload */
     if(isset($_FILES['layout_sketch_map'])){
        $errors= array();
        $layout_sketch_map=$_FILES['layout_sketch_map']['name'];
            $layout_sketch_map_temp=$_FILES['layout_sketch_map']['tmp_name'];
            if(empty($errors)==true){
            move_uploaded_file($layout_sketch_map_temp,"user_dashboard/upload_property_documents/".$layout_sketch_map);
            }
     

     }
     if(isset($_FILES['property_image_1'])){
        $errors= array();
        $property_image_1=$_FILES['property_image_1']['name'];
        $property_image_1_temp=$_FILES['property_image_1']['tmp_name'];
        if(empty($errors)==true){
        move_uploaded_file($property_image_1_temp,"user_dashboard/upload_property_images/".$property_image_1);
        }
   
     }
     if(isset($_FILES['property_image_2'])){
        $errors= array();
        $property_image_2=$_FILES['property_image_2']['name'];
        $property_image_2_temp=$_FILES['property_image_2']['tmp_name'];
        if(empty($errors)==true){
        move_uploaded_file($property_image_2_temp,"user_dashboard/upload_property_images/".$property_image_2);
        }
      
     }
     //property_video File /* Only Video Upload */
     if(isset($_FILES['property_video'])){
        $errors= array();
        $property_video=$_FILES['property_video']['name'];
        $property_video_temp=$_FILES['property_video']['tmp_name'];
        if(empty($errors)==true){
        move_uploaded_file($property_video_temp,"user_dashboard/upload_property_videos/".$property_video);
        }
      
     }


     $property_location_link= $_POST['property_location_link'] ; 
     $property_current_location= $_POST['property_current_location'] ; 
     $property_ownership= $_POST['property_ownership'] ; 
     $property_approved_by= $_POST['property_approved_by'] ; 
     $expected_price= $_POST['expected_price'] ; 
     $price_per_unit= $_POST['price_per_unit'] ; 
     $all_inclusive_price_yn= $_POST['all_inclusive_price_yn'] ; 
     $tax_govt_charges_yn= $_POST['tax_govt_charges_yn'] ; 
     $price_negotiable_yn= $_POST['price_negotiable_yn'] ; 
     $about_property= $_POST['about_property'] ; 
     $maintenance_staff_yn= $_POST['maintenance_staff_yn'] ; 
     $water_storage_yn= $_POST['water_storage_yn'] ; 
     $running_water_facility_yn= $_POST['running_water_facility_yn'] ; 
     $rain_water_harvesting_yn= $_POST['rain_water_harvesting_yn'] ; 
     $feng_shui_vaastu_complaint_yn= $_POST['feng_shui_vaastu_complaint_yn'] ; 
     $proper_drainage_system_yn= $_POST['proper_drainage_system_yn'] ; 
     $solar_power_plant_yn= $_POST['solar_power_plant_yn'] ; 
     $solar_street_light_yn= $_POST['solar_street_light_yn'] ; 
     $overlooking_pool_yn= $_POST['overlooking_pool_yn'] ; 
     $overlooking_club_yn= $_POST['overlooking_club_yn'] ; 
     $overlooking_park_garden_yn= $_POST['overlooking_park_garden_yn'] ; 
     $overlooking_main_road_yn= $_POST['overlooking_main_road_yn'] ; 
     $property_gated_society_yn= $_POST['property_gated_society_yn'] ; 
     $property_gated_society_name= $_POST['property_gated_society_name'] ; 
     $corner_property_yn= $_POST['corner_property_yn'] ; 
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


    $sql="INSERT INTO users_post_property_details (user_id, post_date, property_list, property_type, property_state, property_district, property_city, property_locality, property_sub_locality, apartment_socity, plot_no, plot_area, plot_area_unit, plot_lenght, plot_lenght_unit, plot_breadth, plot_breadth_unit, boundry_yn, no_open_side, any_construction_yn, prossession_by, layout_sketch_map, property_image_1, property_image_2, property_video, property_location_link, property_current_location, property_ownership, property_approved_by, expected_price, price_per_unit, all_inclusive_price_yn, tax_govt_charges_yn, price_negotiable_yn, about_property, maintenance_staff_yn, water_storage_yn, running_water_facility_yn, rain_water_harvesting_yn, feng_shui_vaastu_complaint_yn, proper_drainage_system_yn, solar_power_plant_yn, solar_street_light_yn, overlooking_pool_yn, overlooking_club_yn, overlooking_park_garden_yn, overlooking_main_road_yn, property_gated_society_yn, property_gated_society_name, corner_property_yn, suggest_property_feature, best_deal, down_payment_percentage, rate_interest, no_of_installment, installment_amount_month, reg_after_downpayment_yn, reg_original_deed_yn, third_party_gurantor_yn, others_terms_conditions, hot_offer, under_construction_yn, sold_out_yn)
    VALUES ('$user_id', '$post_date', '$property_list', '$property_type', '$property_state', '$property_district', '$property_city', '$property_locality', '$property_sub_locality', '$apartment_socity', '$plot_no', '$plot_area', '$plot_area_unit', '$plot_lenght', '$plot_lenght_unit', '$plot_breadth', '$plot_breadth_unit', '$boundry_yn', '$no_open_side', '$any_construction_yn', '$prossession_by', '$layout_sketch_map', '$property_image_1', '$property_image_2', '$property_video', '$property_location_link', '$property_current_location', '$property_ownership', '$property_approved_by', '$expected_price', '$price_per_unit', '$all_inclusive_price_yn', '$tax_govt_charges_yn', '$price_negotiable_yn', '$about_property', '$maintenance_staff_yn', '$water_storage_yn', '$running_water_facility_yn', '$rain_water_harvesting_yn', '$feng_shui_vaastu_complaint_yn', '$proper_drainage_system_yn', '$solar_power_plant_yn', '$solar_street_light_yn', '$overlooking_pool_yn', '$overlooking_club_yn', '$overlooking_park_garden_yn', '$overlooking_main_road_yn', '$property_gated_society_yn', '$property_gated_society_name', '$corner_property_yn', '$suggest_property_feature', '$best_deal', '$down_payment_percentage', '$rate_interest', '$no_of_installment', '$installment_amount_month', '$reg_after_downpayment_yn', '$reg_original_deed_yn', '$third_party_gurantor_yn', '$others_terms_conditions', '$hot_offer', '$under_construction_yn', '$sold_out_yn')";
    $query=mysqli_query($conn,$sql);


    $sql2="SELECT max(post_property_id) as max_post_property_id  FROM users_post_property_details";
    $max_post_property_id=0;

    $query2=mysqli_query($conn,$sql2);
    if($f2=mysqli_fetch_array($query2)) 
                $max_post_property_id=$f2['max_post_property_id'];


    if($query)
    {
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
                        VALUES ($max_post_property_id, '$property_facing', '$direction_road', '$facing_road','$facing_road_unit','$facing_road_condition')";
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
                        VALUES ($max_post_property_id,'$metro_station_name','$metro_station_distance')";
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
                        VALUES ($max_post_property_id,'$school_name','$school_distance')";
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
                        VALUES ($max_post_property_id,'$hospital_name','$hospital_distance')";
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
                        VALUES ($max_post_property_id,'$railway_station_name','$railway_station_distance')";
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
                        VALUES ($max_post_property_id,'$airport_name','$airport_distance')";
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
                        VALUES ($max_post_property_id,'$mall_station_name','$mall_station_distance')";
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
                        VALUES ($max_post_property_id,'$highway_name','$highway_distance')";
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
                        VALUES ($max_post_property_id,'$religious_establishment_name','$religious_establishment_distance')";
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
                        VALUES ($max_post_property_id,'$others_name','$others_distance')";
                        $insert2=mysqli_query($conn,$sql1);
                      }
                   $i++;
                }
        //end of others_name


        header("Location:users_preview_post_property_details.php?post_property_id=".$max_post_property_id);
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>3 BIGHA | Post Property</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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


    <script>

        function handleFileDocument() {
        const fileInput = document.getElementById('layout_sketch_map');
        const file = fileInput.files[0];

        if (file) {
                const fileSizeInBytes = file.size;
                const maxSizeInBytes = 4 * 1024 * 1024; // 4 MB
                const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

                if (fileSizeInBytes > maxSizeInBytes) {
                alert('File size is too large. Please select a document file smaller than 4 MB.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
                }

                if (!allowedTypes.includes(file.type)) {
                alert('Invalid file type. Please select a valid document file.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
                }
            }
        }
        function handleFileImage1() {
            const fileInput = document.getElementById('property_image_1');
            const file = fileInput.files[0];

            if (file) {
            const fileSizeInBytes = file.size;
            const maxSizeInBytes = 1 * 1024 * 1024; // 1 MB
            const allowedTypes = ['image/jpeg', 'image/jpg']; // Mime types for JPEG files

            if (fileSizeInBytes > maxSizeInBytes) {
                alert('File size is too large. Please select a JPG file smaller than 1 MB.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
            }

            if (!allowedTypes.includes(file.type)) {
                alert('Invalid file type. Please select a valid JPG file.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
            }
            }
        }
        function handleFileImage2() {
            const fileInput = document.getElementById('property_image_2');
            const file = fileInput.files[0];

            if (file) {
            const fileSizeInBytes = file.size;
            const maxSizeInBytes = 1 * 1024 * 1024; // 1 MB
            const allowedTypes = ['image/jpeg', 'image/jpg']; // Mime types for JPEG files

            if (fileSizeInBytes > maxSizeInBytes) {
                alert('File size is too large. Please select a JPG file smaller than 1 MB.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
            }

            if (!allowedTypes.includes(file.type)) {
                alert('Invalid file type. Please select a valid JPG file.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
            }
            }
        }




        function handleFileVideo() {
            const fileInput = document.getElementById('property_video');
            const file = fileInput.files[0];
            if (file) {
                const fileSizeInBytes = file.size;
                const maxSizeInBytes = 15 * 1024 * 1024; // 15 MB
                const allowedTypes = ['video/mp4', 'video/mpeg', 'video/webm']; // Adjust as needed

                if (fileSizeInBytes > maxSizeInBytes) {
                alert('File size is too large. Please select a video file smaller than 15 MB.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
                }

                if (!allowedTypes.includes(file.type)) {
                alert('Invalid file type. Please select a valid video file.');
                // Optionally, you can clear the file input
                fileInput.value = '';
                return; // Stop further processing
                }
            }
        }
    </script>
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


<?php
/*
    `post_property_id`, `user_id`, `post_date`, `property_list`, `property_type`, `property_state`, `property_district`, 
    `property_city`, `property_locality`, `property_sub_locality`, `apartment_socity`, `plot_no`, `plot_area`, `plot_area_unit`, 
    `plot_lenght`, `plot_lenght_unit`, `plot_breadth`, `plot_breadth_unit`, `boundry_yn`, `no_open_side`, `any_construction_yn`, 
    `prossession_by`, `layout_sketch_map`, `property_image_1`, `property_image_2`, `property_video`, `property_location_link`, 
    `property_current_location`, `property_ownership`, `property_approved_by`, `expected_price`, `price_per_unit`, `all_inclusive_price_yn`, 
    `tax_govt_charges_yn`, `price_negotiable_yn`, `about_property`, `maintenance_staff_yn`, `water_storage_yn`, `running_water_facility_yn`, 
    `rain_water_harvesting_yn`, `feng_shui_vaastu_complaint_yn`, `proper_drainage_system_yn`, `solar_power_plant_yn`, `solar_street_light_yn`,
    `overlooking_pool_yn`, `overlooking_club_yn`, `overlooking_park_garden_yn`, `overlooking_main_road_yn`, `property_gated_society_yn`, 
    `property_gated_society_name`, `property_facing`, `corner_property_yn`, `suggest_property_feature`, `best_deal`, `down_payment_percentage`, 
    `rate_interest`, `no_of_installment`, `installment_amount_month`, `reg_after_downpayment_yn`, `reg_original_deed_yn`, `
    third_party_gurantor_yn`, `others_terms_conditions`, `hot_offer`, `under_construction_yn`, `sold_out_yn` 
    SELECT * FROM `users_post_property_details` WHERE 1
*/


$user_sql="SELECT * FROM users WHERE user_id='$session_user_id'";
$user_query=mysqli_query($conn,$user_sql);
if($fetch=mysqli_fetch_array($user_query)){
    $user_id=$fetch['user_id'];
    //$post_date=$fetch['post_date'];
    $full_name=$fetch['full_name'];
?>


    <!-- User page start -->
    <div class="user-page submit-property pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>(Sell / Rent / Lease your property in simple steps)</h2>
                    <div class="search-area contact-2 pt-3">
                        <div class="search-area-inner">
                            <div class="search-contents ">




                                <form method="post" action=""  enctype="multipart/form-data">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    <input type="hidden" name="post_date" value="<?php echo date("jS \of F Y"); ?>">



                                    <h3 class="heading-3">Tell us about your property</h3>
                                    <div class="row mb-30">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label> I / We, 
                                                    <?php echo $full_name;?>, want to list property to –</label>


                                                <div>
                                                    <input type="radio" class="check_property_option" id="check_property_option" name="property_list"
                                                        value="Sell">
                                                    <label for="Sell">Sell</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_property_option" id="check_property_option" name="property_list"
                                                        value="Rent">
                                                    <label for="Rent">Rent</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_property_option" id="check_property_option" name="property_list"
                                                        value="Lease">
                                                    <label for="Lease">Lease</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_property_option" id="check_property_option" name="property_list" 
                                                    value="Lease">
                                                    <label for="Paying Guest">Paying Guest</label>

                                                </div>

                                            </div>
                                        </div>



                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Property Type <span class="text-danger">*</span></label>
                                                        <select class="selectpicker search-fields" name="property_type" required>
                                                            <option selected="selected">Select Option</option>
                                                           
                                                                <option value="Residential">Land / Plot - Residential</option>
                                                                <option value="Commercial">Land / Plot - Commercial</option>
                                                                <option value="Agricultural">Land / Plot - Agricultural</option>
                                                                <option value="Industrial">Land / Plot - Industrial</option>
                                                                <option value="Land / Plot Others" >Land / Plot - Others</option>
                                                          

                                                           
                                                                <option value="Independent / Builder Floor">House(s) - Independent / Builder Floor</option>
                                                                <option value="Independent House / Villa">House(s) - Independent House / Villa</option>
                                                                <option value="Farm House">House(s) - Farm House</option>
                                                                <option value="Bunglow">House(s) - Bunglow</option>
                                                                <option value="Office Space">House(s) - Office Space</option>
                                                                <option value="Shop">House(s) - Shop</option>
                                                                <option value="House Others" >House(s) - Others</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>                                         
                                            </div>
                                        </div>

                                                
                                        <div class="col-lg-12 col-md-12">
                                            <h3 class="heading-3">Basic Details</h3>
                                            <h5>Location Details</h5>
                                        </div>
                                        <!-- Connect to  database-->
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <input list="browsers1"  class="form-control"   name="property_state" id="property_state"  placeholder="State *" required />
                                                <datalist id="browsers1">
                                                    <?php
                                                    //`loacation_details_id`, `state`, `district`, `city`, `locality` 
                                                    //SELECT * FROM `loacation_details_master` WHERE 1

                                                    $q=mysqli_query($conn,"select  Distinct state  from loacation_details_master order by state");
                                                    while($f=mysqli_fetch_array($q))
                                                    {?>
                                                        <option value="<?php echo $f['state'];?>">
                                                    <?php
                                                    }
                                                    ?>
                                                </datalist>  
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input list="browsers2"  class="form-control"   name="property_district" id="property_district"  placeholder="District *" required />
                                                <datalist id="browsers2">
                                                    <?php
                                                    //`loacation_details_id`, `state`, `district`, `city`, `locality` 
                                                    //SELECT * FROM `loacation_details_master` WHERE 1

                                                    $q=mysqli_query($conn,"select  Distinct district  from loacation_details_master order by district");
                                                    while($f=mysqli_fetch_array($q))
                                                    {?>
                                                        <option value="<?php echo $f['district'];?>">
                                                    <?php
                                                    }
                                                    ?>
                                                </datalist>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input list="browsers3"  class="form-control"   name="property_city" id="property_city"  placeholder="City *" required />
                                                <datalist id="browsers3">
                                                    <?php
                                                    //`loacation_details_id`, `state`, `district`, `city`, `locality` 
                                                    //SELECT * FROM `loacation_details_master` WHERE 1

                                                    $q=mysqli_query($conn,"select  Distinct city  from loacation_details_master order by city");
                                                    while($f=mysqli_fetch_array($q))
                                                    {?>
                                                        <option value="<?php echo $f['city'];?>">
                                                    <?php
                                                    }
                                                    ?>
                                                </datalist>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input list="browsers4"  class="form-control"   name="property_locality" id="property_locality"  placeholder="Locality *" required />
                                                <datalist id="browsers4">
                                                    <?php
                                                    //`loacation_details_id`, `state`, `district`, `city`, `locality` 
                                                    //SELECT * FROM `loacation_details_master` WHERE 1

                                                    $q=mysqli_query($conn,"select  Distinct locality  from loacation_details_master order by locality");
                                                    while($f=mysqli_fetch_array($q))
                                                    {?>
                                                        <option value="<?php echo $f['locality'];?>">
                                                    <?php
                                                    }
                                                    ?>
                                                </datalist>  
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="property_sub_locality" class="form-control"
                                                    placeholder="Sub Locality (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="apartment_socity" class="form-control"
                                                    placeholder="Apartment / Society (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="plot_no" class="form-control"
                                                    placeholder="Plot Nos. (optional)">
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12">
                                            <h3 class="heading-3">Property Profile</h3>
                                        </div>
                                        <div class="col-lg-10 col-md-2">
                                            <div class="form-group">
                                                <label>Tell us about your property</label>
                                                <input type="text" name="plot_area" cols="" class="form-control"
                                                    placeholder="Plot Area *" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <label>&nbsp;</label>
                                            <select class="selectpicker search-fields" name="plot_area_unit" required>
                                                <option selected><span style="color:red;">Choose</span> </option>
                                                <option value="Sq. ft.">Sq. ft.</option>
                                                <option value="Sq. Mtr.">Sq. Mtr.</option>
                                            </select>
                                        </div>





                                        <div class="col-lg-12 pt-3">
                                            <h5>Property Dimension (optional)</h5>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" name="plot_lenght" class="form-control"
                                                    placeholder="Length of Plot *" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <label>&nbsp;</label>
                                            <select class="selectpicker search-fields" name="plot_lenght_unit" required>
                                                <option selected>Choose</option>
                                                <option value="Feet">Feet</option>
                                                <option value="Meter">Meter</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" name="plot_breadth" class="form-control"
                                                    placeholder="Breadth of Plot *" required>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <label>&nbsp;</label>
                                            <select class="selectpicker search-fields" name="plot_breadth_unit" required>
                                                <option selected>Choose</option>
                                                <option value="Feet">Feet</option>
                                                <option value="Meter">Meter</option>
                                            </select>
                                        </div>




                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Is there a boundary / guard wall around the property? <span class="text-danger">*</span></label>
                                                <div>

                                                    <input type="radio" class="check_boundary_option" id="check_boundary_option" name="boundry_yn"
                                                        value="1">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_boundary_option" id="check_boundary_option" name="boundry_yn"
                                                        value="0">
                                                    <label for="No">No</label>&nbsp;&nbsp;


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-5">
                                            <div class="form-group">
                                                <label>Nos. of open sides <span class="text-danger">*</span></label>
                                                <div>

                                                    <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                        value="1">
                                                    <label for="Yes">1</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                        value="2">
                                                    <label for="No">2</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                        value="3">
                                                    <label for="Yes">3</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_opensides_option" id="check_opensides_option" name="no_open_side"
                                                        value="3+">
                                                    <label for="No">3+</label>&nbsp;&nbsp;

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Any construction done on this property? <span class="text-danger">*</span></label>
                                                <div>

                                                    <input type="radio" class="check_cons_done_option" id="check_cons_done_option" name="any_construction_yn"
                                                        value="1">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="check_cons_done_option" id="check_cons_done_option" name="any_construction_yn"
                                                        value="0">
                                                    <label for="No">No</label>&nbsp;&nbsp;


                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Possession by</label>
                                                <select class="selectpicker search-fields" name="prossession_by">
                                                    <option selected>Expected by</option>
                                                    <option value="Immediate">Immediate</option>
                                                    <option value="Within 3 months">Within 3 months</option>
                                                    <option value="Within 6 months">Within 6 months</option>
                                                    <option value="By 2024">By 2024</option>
                                                    <option value="By 2025">By 2025</option>
                                                    <option value="By 2026">By 2026</option>
                                                    <option value="By 2027">By 2027</option>
                                                    <option value="By 2028">By 2028</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 pt-4">
                                            <h5><br> You can upload only the property Images.</h5>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                <label class="m-0" for="">Layout / Sketch Map <span class="text-danger">*</span></label>
                                                    <div class="text-danger">
                                                        <small>Upload Only PDF File ( Max 4MB )</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- Only PDF Upload -->
                                                        <input type="file" class="form-control" name="layout_sketch_map" id="layout_sketch_map" accept=".pdf, .doc, .docx" onchange="handleFileDocument()"required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                <label  class="m-0" for="">Image of the Particular Property <span class="text-danger">*</span></label>
                                                    <div class="text-danger">
                                                        <small>Upload Only JPG / PNG File ( Max 1MB )</small>
                                                    </div>
                                                    <div class="form-group">
                                                         <!-- Only image Upload -->
                                                        <input type="file" class="form-control" name="property_image_1" id="property_image_1"  accept=".jpg, .jpeg" onchange="handleFileImage1()" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                <label class="m-0" for="">Image of the Particular Property <span class="text-danger">*</span></label>
                                                    <div class="text-danger">
                                                        <small>Upload Only JPG / PNG File ( Max 1MB )</small>
                                                    </div>
                                                    <div class="form-group">
                                                         <!-- Only image Upload -->
                                                        <input type="file" class="form-control" name="property_image_2" id="property_image_2"  accept=".jpg, .jpeg" onchange="handleFileImage2()" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                <label class="m-0" for="">Videography of the Property <span class="text-danger">*</span> </label>
                                                    <div class="text-danger">
                                                        <small>Upload Only MP4 File ( Max 10-15MB )</small>
                                                    </div>
                                                    <div class="form-group">
                                                         <!-- Only Video Upload -->
                                                        <input type="file" class="form-control"  name="property_video" id="property_video" accept="video/*" onchange="handleFileVideo()" required>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="text" name="property_location_link" class="form-control" placeholder="Share the link of the Location of your property">
                                        </div>
                                        <div class="col-lg-1">
                                            <h5 style="text-align:center; padding-top:1rem;">Or</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="property_current_location" id="current_location" class="form-control" placeholder="Please click find your current location"> 
                                        </div>
                                        <div class="col-lg-2">
                                            <input type="button" class="btn btn-primary mt-2" name="btn" value="Find Your Location" onClick="getLocation();" >
                                        </div>
                                        


                                        <div class="col-lg-12 col-md-12 pt-4">
                                            <h2 class="heading-3">Other Features</h2>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Ownership <span class="text-danger">*</span></label>
                                                <select class="selectpicker search-fields" name="property_ownership" required>
                                                    <option selected>Select option</option>
                                                    <option value="Freehold">Freehold</option>
                                                    <option value="Lease hold">Lease hold</option>
                                                    <option value="Co-op. Society">Co-op. Society</option>
                                                    <option value="Power of Attorney">Power of Attorney</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label>Which authority has approved this property?</label>
                                                <input type="text" name="property_approved_by" class="form-control"
                                                    placeholder="Local authority (please write the name of the authority if it is known to you) - optional">

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>Price Details <span class="text-danger">*</span></label>
                                                <input type="text" name="expected_price" class="form-control"
                                                    placeholder="₹ Expected Price" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <input type="text" name="price_per_unit" class="form-control"
                                                    placeholder="₹ Price per sq. ft. / mtr." required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox"  id="all_inclusive_price_yn"  name="all_inclusive_price_yn" value="1">
                                                            <label class="form-check-label" for="all_inclusive_price_yn">All inclusive Price</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" id="tax_govt_charges_yn" name="tax_govt_charges_yn" value="1">
                                                            <label class="form-check-label" for="tax_govt_charges_yn">Tax & Govt. charges excluded</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" id="price_negotiable_yn" name="price_negotiable_yn" value="1">
                                                            <label class="form-check-label" for="price_negotiable_yn">Price Negotiable</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <h3 class="heading-3">What makes your property unique? <span class="text-danger">*</span></h3>
                                                    <div class="form-group message">
                                                        <label>Adding description will increase your visibility (Type Minimum 200 character) </label>
                                                        <textarea class="form-control" cols="30" rows="10"
                                                            name="about_property"
                                                            placeholder="Share some details about your property like spacious room, well maintained facilities." required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 col-md-12">
                                            <h3 class="heading-3">Add amenities / unique features</h3>

                                            <h5 class="heading-2">Amenities</h5>

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="maintenance_staff_yn" value="1" 
                                                                id="maintenance_staff_yn" >
                                                            <label class="form-check-label" for="maintenance_staff_yn">
                                                                Maintenance Staff
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="rain_water_harvesting_yn" value="1"
                                                                id="rain_water_harvesting_yn">
                                                            <label class="form-check-label" for="rain_water_harvesting_yn">
                                                                Rain water harvesting
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="solar_power_plant_yn" value="1"
                                                                id="solar_power_plant_yn">
                                                            <label class="form-check-label" for="solar_power_plant_yn">
                                                                Solar Power Plant 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="water_storage_yn" value="1"
                                                                id="water_storage_yn">
                                                            <label class="form-check-label" for="water_storage_yn">
                                                                Water Storage
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="feng_shui_vaastu_complaint_yn" value="1"
                                                                id="feng_shui_vaastu_complaint_yn">
                                                            <label class="form-check-label" for="feng_shui_vaastu_complaint_yn">
                                                                Feng Shui / Vaastu Complaint
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="solar_street_light_yn" value="1"
                                                                id="solar_street_light_yn">
                                                            <label class="form-check-label" for="solar_street_light_yn">
                                                                Solar Street light
                                                            </label>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="running_water_facility_yn" value="1"
                                                                id="running_water_facility_yn">
                                                            <label class="form-check-label" for="running_water_facility_yn">
                                                                Running Water facility
                                                            </label>
                                                        </div>
                                                    </div>
                                                <!--
                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="others_1">
                                                            <label class="form-check-label" for="others_1">
                                                                Others (please specify)
                                                            </label>
                                                        </div>
                                                    </div>
                                                -->

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="proper_drainage_system_yn" value="1"
                                                                id="proper_drainage_system_yn">
                                                            <label class="form-check-label" for="proper_drainage_system_yn">
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
                                                            <input class="form-check-input" type="checkbox" name="overlooking_pool_yn" value="1"
                                                                id="overlooking_pool_yn">
                                                            <label class="form-check-label" for="overlooking_pool_yn">
                                                                Pool
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="overlooking_park_garden_yn" value="1"
                                                                id="overlooking_park_garden_yn">
                                                            <label class="form-check-label" for="overlooking_park_garden_yn">
                                                                Park / Garden
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4">

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="overlooking_club_yn" value="1"
                                                                id="overlooking_club_yn">
                                                            <label class="form-check-label" for="overlooking_club_yn">
                                                                Club
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check checkbox-theme">
                                                            <input class="form-check-input" type="checkbox" name="overlooking_main_road_yn" value="1"
                                                                id="overlooking_main_road_yn">
                                                            <label class="form-check-label" for="overlooking_main_road_yn">
                                                                Main Road
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--        
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
                                                -->
                                            </div>

                                            <h5 class="heading-2">Other Facilities</h5>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <!-- If yes then show input field  down-->
                                                        <h6>Is the property in a gated society ? <span class="text-danger">*</span></h6>                                      
                                                        <div>
                                                            <input type="radio" class="checkoption" id="show" name="property_gated_society_yn"
                                                                value="1" checked>
                                                            <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                            <input type="radio" class="checkoption" id="hide" name="property_gated_society_yn"
                                                                value="0" >
                                                            <label for="No">No</label>&nbsp;&nbsp;
                                                        </div>
                                                    </div>
                                                </div>  
                                                                                             
                                            </div>
                                        </div>
                                        <div class="col-lg-12" >
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6" id="property_gated_society_name">
                                                    <div class="form-group">
                                                        <input type="text" name="property_gated_society_name"  class="form-control"
                                                            placeholder="If yes, name the society" required>
                                                    </div>
                                                </div>   
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="form-group">
                                                    
                                                        <div class="form-check checkbox-theme">
                                                            
                                                            <input class="form-check-input" type="checkbox" name="corner_property_yn" value="1"
                                                                id="corner_property_yn">
                                                            <label class="form-check-label" for="corner_property_yn">
                                                                Corner Property
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                             
                                            </div>
                                        </div>
 

                                        <div class="col-lg-12">
                                            <div class="row"  id="details_facing_road">
                                                <table class="table table-bordered" id="table_facing_road">
                                                    <tr>
                                                    
                                                        <th class="col-lg-2">Property facing<span class="text-danger">*</span></th>
                                                        <th class="col-lg-3">Details of facing road(s) <span class="text-danger">*</span></th>
                                                        <th class="col-lg-2">Width of facing road <span class="text-danger">*</span></th>
                                                        <th class="col-lg-2">Unit <span class="text-danger">*</span></th>
                                                        <th class="col-lg-2">Condition of the road(s) <span class="text-danger">*</span></th>
                                                        <th class="col-lg-0"></th>

                                                    </tr>
                                                    <!--`id`, `post_property_id`, `facing_road`, `facing_road_unit`, `facing_road_condition` SELECT * FROM `users_post_road_details` WHERE 1-->
                                                    <tr>
                                                        <td>
                                                            <select class="selectpicker search-fields" name="property_facing[]" required>
                                                                <option selected>Select Options</option>
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
                                                        <td><input class="form-control" type="text" name="direction_road[]" placeholder="Direction of faceing road *" required onKeyUp="convert_data_to_upper(this);"></td>
                                                        <td><input class="form-control" type="text" name="facing_road[]" placeholder="Enter width *" required onKeyUp="convert_data_to_upper(this);"></td>
                                                        <td>
                                                            <select class="selectpicker search-fields" name="facing_road_unit[]" required>
                                                                <option selected>Choose</option>
                                                                <option value="Feet">Feet</option>
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
                                                                        
                                                        <td><button class="btn btn-primary pl-4 pr-4 mt-2" type="button" name="add_facing_road_btn" id="add_facing_road_btn"><i class="fa-solid fa-plus"></i></button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            




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
                                                        <!--`id`, `post_property_id`, `metro_station_name`, `metro_station_distance` SELECT * FROM `users_post_metro_details` WHERE 1 -->
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
                                                        <!-- `id`, `post_property_id`, `school_name`, `school_distance` SELECT * FROM `users_post_school_details` WHERE 1-->
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
                                                        <!-- `id`, `post_property_id`, `hospital_name`, `hospital_distance` SELECT * FROM `users_post_hospital_details` WHERE 1 -->
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
                                                        <!--`id`, `post_property_id`, `railway_station_name`, `railway_station_distance` SELECT * FROM `users_post_railway_details` WHERE 1-->
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
                                                 </table>

                                                 <table class="table table-bordered" id="table_airport_distance">
                                                    <tr>
                                                        <!--`id`, `post_property_id`, `airport_name`, `airport_distance` SELECT * FROM `users_post_airport_details` WHERE 1 -->
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
                                                        <!--`id`, `post_property_id`, `mall_station_name`, `mall_station_distance` SELECT * FROM `users_post_mall_details` WHERE 1 -->
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
                                                 </table>

                                                 <table class="table table-bordered" id="table_highway_distance">
                                                    <tr>
                                                        <!--`id`, `post_property_id`, `highway_name`, `highway_distance` SELECT * FROM `users_post_highway_details` WHERE 1 -->
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
                                                        <!--`id`, `post_property_id`, `religious_establishment_name`, `religious_establishment_distance` SELECT * FROM `users_post_religious_establishment_details` WHERE 1 -->
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
                                                        <!--`id`, `post_property_id`, `others_name`, `others_distance` SELECT * FROM `users_post_others_details` WHERE 1 -->
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
                                                            name="suggest_property_feature"
                                                            placeholder="Enter your USP’s (unique selling proposition) here."></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <h5>Best Deal</h5>
                                                    <div class="form-group">
                                                        <input type="text" name="best_deal" cols="" class="form-control"
                                                            placeholder="Why do you think that yours is the best deal?">
                                                    </div>
                                                </div>




                                                <div class="col-lg-12">
                                                    <h5>Direct EMI</h5>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <div>
                                                                    <input type="radio" id="show2" name="direct_emi_yn"
                                                                        value="1" checked>
                                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                                    <input type="radio" id="hide2" name="direct_emi_yn"
                                                                        value="0" >
                                                                    <label for="No">No</label>&nbsp;&nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row" id="direct_emi_box">
                                                        <div class="col-lg-12 pt-4">
                                                        <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="">Percentage of Down Payment</label>
                                                                        <input type="text" name="down_payment_percentage" max=""  value="" class="form-control" placeholder="0 – 100%">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                    <label for="">Rate of Interest</label>
                                                                        <input type="text" name="rate_interest" max=""  value="" class="form-control" placeholder="0 – 15%">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="form-group">
                                                                    <label for="">Maximum number of EMI(s)</label>
                                                                        <input type="text" name="no_of_installment" max=""  value="" class="form-control" placeholder="0 – 300 months">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 pt-4">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <div class="form-group">
                                                                    <label for="">Installment Amount Month</label>
                                                                        <input type="text" name="installment_amount_month" max=""  value="" class="form-control" placeholder="0 – 180 days">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                <label>Will you provide registration of the property after making the down payment?</label>
                                                                                <input type="radio" class="reg_after_downpayment_yn" id="reg_after_downpayment_yn" name="reg_after_downpayment_yn"
                                                                                    value="1">
                                                                                <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                                                <input type="radio" class="reg_after_downpayment_yn" id="reg_after_downpayment_yn" name="reg_after_downpayment_yn"
                                                                                    value="0">
                                                                                <label for="No">No</label>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                <label>If you provide registration, who will keep the original deed?</label>
                                                                                <input type="radio" class="reg_original_deed_yn" id="reg_original_deed_yn" name="reg_original_deed_yn"
                                                                                    value="1">
                                                                                <label for="Yes">Party ?</label>&nbsp;&nbsp;
                                                                                <input type="radio" class="reg_original_deed_yn" id="reg_original_deed_yn" name="reg_original_deed_yn"
                                                                                    value="0">
                                                                                <label for="No">You ?</label>
                                                                </div>
                                                                
                                                                <div class="col-lg-3">
                                                                    <label for="">Is there the need of any third party as guarantor?</label>

                                                                    <input type="radio" class="third_party_gurantor_yn" id="third_party_gurantor_yn" name="third_party_gurantor_yn"
                                                                        value="1">
                                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                                    <input type="radio" class="third_party_gurantor_yn" id="third_party_gurantor_yn" name="third_party_gurantor_yn"
                                                                        value="0">
                                                                    <label for="No">No</label>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-lg-12 col-md-12 mt-4">
                                                            <div class="form-group">
                                                            <textarea class="form-control" cols="30" rows="10"
                                                                    name="others_terms_conditions"
                                                                    placeholder="Please write down other terms and conditions here"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                


                                                

                                                
                                                <div class="col-lg-12 col-md-12">
                                                    <h5>Hot Offer</h5>
                                                    <div class="form-group">
                                                        <input type="text" name="hot_offer" cols="" class="form-control"
                                                            placeholder="Please mention the offer with validity and terms and conditions">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <h5>Under Construction</h5>
                                                    <input type="radio" class="under_construction_yn" id="under_construction_yn" name="under_construction_yn"
                                                        value="1">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="under_construction_yn" id="under_construction_yn" name="under_construction_yn"
                                                        value="0">
                                                    <label for="No">No</label>                                                        
                                                
                                                </div>
                                                <div class="col-lg-3 col-md-12">
                                                    <h5>Sold out</h5>
                                                   
                                                    <input type="radio" class="sold_out_yn" id="sold_out_yn" name="sold_out_yn"
                                                        value="1">
                                                    <label for="Yes">Yes</label>&nbsp;&nbsp;
                                                    <input type="radio" class="sold_out_yn" id="sold_out_yn" name="sold_out_yn"
                                                        value="0">
                                                    <label for="No">No</label>                                                        
                                                
                                                </div>
                                                <div class="col-lg-12 pt-3">
                                                    <h5 class="heading-3">Please provide correct information, otherwise your listing might be blocked.</h5>
                                                </div>
                                            </div>

                                            <div class="row pt-5">
                                                <div class="col-lg-12">
                                                    <button type="submit" name="preview_next" class="btn btn-4" style="float:right;">Preview & Next</button>
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


<?php
}
?>














    <!-- Feeter-->
    <?php  include ("website_Footer.php"); ?>
    <!-- Feeter-->

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



    
    <script>
        const property_gated_society_name = document.getElementById('property_gated_society_name');

        function handleRadioClick() {
        if (document.getElementById('show').checked) {
            property_gated_society_name.style.display = 'block';
        } else {
            property_gated_society_name.style.display = 'none';
        }
        }

        const property_gated_society_yn = document.querySelectorAll('input[name="property_gated_society_yn"]');
        property_gated_society_yn.forEach(radio => {
        radio.addEventListener('click', handleRadioClick);
        });

    </script>


    <script>
        const direct_emi_box = document.getElementById('direct_emi_box');

        function handleRadioClick() {
        if (document.getElementById('show2').checked) {
            direct_emi_box.style.display = 'block';
        } else {
            direct_emi_box.style.display = 'none';
        }
        }

        const direct_emi_yn = document.querySelectorAll('input[name="direct_emi_yn"]');
        direct_emi_yn.forEach(radio => {
        radio.addEventListener('click', handleRadioClick);
        });

    </script>

</body>

</html>