<?php
include_once("../db/conn.php");
require_once("../db/user_sequre.php");

$select_sql="SELECT * FROM `users` WHERE user_id='$session_user_id'";
$select_query=mysqli_query($conn,$select_sql);
if($fetch=mysqli_fetch_array($select_query)) {
  $user_id=$fetch['user_id'];
  }


   //`supplier_id`, `user_id`, `supplier_type`, `category_name`, `sub_category_name`, `variation_1`, `sub_variation_1`,
   //`variation_2`, `sub_variation_2`, `variation_3`, `sub_variation_3`, `variation_4`, `sub_variation_4`, 
   //`variation_5`, `sub_variation_5`, `brand_manufacturer`, `price_per`, `price`, `price_discount`, 
   //`price_after_discount` `meterial_image`, `delivery_within`, `delivery_time`, `order_qty`, `decription`
   // SELECT * FROM `ubm_supplier` WHERE 1

  if(isset($_POST['update']))
  {
    $supplier_id= $_POST['supplier_id'] ;                           
    $supplier_type= $_POST['supplier_type'] ;
    $category_name= $_POST['category_name'] ;
    $sub_category_name= $_POST['sub_category_name'] ;

    $brand_manufacturer= $_POST['brand_manufacturer'];
    $price_per=$_POST['price_per'];
    $price= $_POST['price'] ;
    $price_discount= $_POST['price_discount'] ;
    $price_after_discount= $_POST['price_after_discount'] ;
    $delivery_within= $_POST['delivery_within'] ;
    $delivery_time= $_POST['delivery_time'] ;
    $order_qty= $_POST['order_qty'] ;
    $decription= $_POST['decription'] ;
    $payment_options= $_POST['payment_options'] ;
    $count= $_POST['count'];
    



          if(!empty($_FILES['meterial_image']['name'])){
            $errors= array();
            $meterial_image=$_FILES['meterial_image']['name'];
            $meterial_image_temp=$_FILES['meterial_image']['tmp_name'];
            if(empty($errors)==true){
                move_uploaded_file($meterial_image_temp,"meterial_image/".$meterial_image);
                $update1=mysqli_query($conn,"update  ubm_supplier  set meterial_image='$meterial_image' where supplier_id='$supplier_id'");
            }
          }

          $update=mysqli_query($conn,"update  ubm_supplier  set  brand_manufacturer='$brand_manufacturer', price_per='$price_per', price='$price', price_discount='$price_discount', price_after_discount='$price_after_discount', delivery_within='$delivery_within', delivery_time='$delivery_time', order_qty='$order_qty', decription='$decription', payment_options='$payment_options'  where supplier_id='$supplier_id'");
                 
  
      if($update)
      {

        $delete_1=mysqli_query($conn,"DELETE FROM ubm_supplier_variation WHERE supplier_id='$supplier_id'");

        $i=0;
        while($i<$count*1)
        {
            if(isset($_POST['variation_id'][$i]))
              {
                    $variation_id=trim($_POST['variation_id'][$i]);
                    $subvariation_id=trim($_POST['subvariation_id'][$i]);
                    //`id`, `supplier_id`, `variation_id`, `sub_variation_id` SELECT * FROM `ubm_supplier_variation` WHERE 1
                    $sql1="INSERT INTO ubm_supplier_variation (supplier_id, variation_id, subvariation_id)
                    VALUES ($supplier_id, '$variation_id', '$subvariation_id')";
                    $insert2=mysqli_query($conn,$sql1);
            }
           $i++;
        }


          header("location:ubm_supplier.php?msg=Updated Successfully");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- PAGE LEVEL STYLES-->
    <script language="javascript">

    function myFunction() {
        if (confirm("Are you sure to delete?") == true) {            
        return true;
        } else {
            return false;
            
        }
    }

    function set_supplier_type(){
        var supplier_type=document.getElementById("supplier_type").value;
        if(supplier_type!=""){
            window.location.href="ubm_supplier.php?supplier_type="+supplier_type;
        }
    }
    function set_supplier_category(){
        
        var supplier_type=document.getElementById("supplier_type").value;
        var category_name=document.getElementById("category_name").value;
        if(category_name!=""){
            window.location.href="ubm_supplier.php?supplier_type="+supplier_type+"&category_name="+category_name;
        }
    }

    function set_variation_type(k){
        
        //     /*`subvariation_id`, variation_id, `subvariation_name` SELECT * FROM `users_services_supplier_sub_variation` WHERE 1*/
        
        alert("PPP"+k);
        
                var variation_id=document.getElementById("variation_id"+k).value;
                var cnt=document.getElementById("cnt").value;
                var subvariation_id = document.getElementById('subvariation_id'+k);
        
                for (var i = subvariation_id.options.length - 1; i >= 0; i--) {
                    subvariation_id.remove(i);
          }
        
        
        
                i=0;
                while(i*1<cnt*1)
                {
                    i++;
                    vid=document.getElementById("tvariation_id"+i).value;
                    if(vid==variation_id)
                      {
                       
            var newOption = document.createElement('option');
            newOption.value = document.getElementById("tsubvariation_id"+i).value;
            newOption.text =  document.getElementById("tsubvariation_name"+i).value;
        
          // Append the new option to the select element
          subvariation_id.add(newOption);
                      }
                }
            }

    
    
    </script>
</head>

<body class="fixed-navbar" style="overflow: scroll !important;">
    <div class="page-wrapper">

    <?php if(isset($_REQUEST['xedit']))
         {
            //`supplier_id`, `user_id`, `supplier_type`, `category`, `sub_category`, `variation_1`, `sub_variation_1`,
            //`variation_2`, `sub_variation_2`, `variation_3`, `sub_variation_3`, `variation_4`, `sub_variation_4`, 
            //`variation_5`, `sub_variation_5`, `brand_manufacturer`, `price_per`, `price`, `price_discount`, 
            //`price_after_discount` `meterial_image`, `delivery_within`, `delivery_time`, `order_qty`, `decription`
            // SELECT * FROM `ubm_supplier` WHERE 1
           $supplier_id=$_REQUEST['supplier_id'];
		   $qre=mysqli_query($conn,"SELECT * FROM ubm_supplier where supplier_id=$supplier_id");
		   if($fetch=mysqli_fetch_array($qre))
			{
              $supplier_id=$fetch['supplier_id'];
              $supplier_type= $fetch['supplier_type'] ;
              $category_name= $fetch['category_name'] ;
              $sub_category_name= $fetch['sub_category_name'] ;
              $brand_manufacturer= $fetch['brand_manufacturer'] ;
              $price_per= $fetch['price_per'] ;
              $price= $fetch['price'] ;
              $price_discount= $fetch['price_discount'] ;
              $price_after_discount= $fetch['price_after_discount'] ;
              $meterial_image= $fetch['meterial_image'] ;
              $delivery_within= $fetch['delivery_within'] ;
              $delivery_time= $fetch['delivery_time'] ;
              $order_qty= $fetch['order_qty'] ;
              $decription= $fetch['decription'] ;
              $payment_options= $fetch['payment_options'] ;
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
                   <h4>Building Material Supplier</h4>
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
                                <div class="ibox-title">Building Material</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <?php
                                    if (isset($_GET["msg"])) {
                                    $msg = $_GET["msg"];
                                    
                                    echo'
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>'. $msg . '</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                    }
                                    ?>
                            <!--

                            //`supplier_id`, `user_id`, `supplier_type`, `category_name`, `sub_category_name`, `variation_1`, `sub_variation_1`,
                            //`variation_2`, `sub_variation_2`, `variation_3`, `sub_variation_3`, `variation_4`, `sub_variation_4`, 
                            //`variation_5`, `sub_variation_5`, `brand_manufacturer`, `price_per`, `price`, `price_discount`, 
                            //`price_after_discount` `meterial_image`, `delivery_within`, `delivery_time`, `order_qty`, `decription`
                            // SELECT * FROM `ubm_supplier` WHERE 1

                            -->
                            <div class="ibox-body">
                                <form action="" method="post"  enctype="multipart/form-data">
                                <input type="hidden" id="supplier_id" name="supplier_id"  readonly="readonly" value="<?php if(isset($_REQUEST['xedit'])) {echo $supplier_id;}?>" />    
                                <div class="row">
                                    <div class="col-lg-3 form-group">
                                        <label>Type <span class="text-danger">*</span></label>

                                        <select class="form-control" name="supplier_type" id="supplier_type" required onchange="set_supplier_type();" disabled>
                                        <option value=""> Select Service</option>
                                        <?php
                                        //`type_id`, `supplier_type` SELECT * FROM `users_services_supplier_type` WHERE 1
                                        $sql_ctgy="SELECT * FROM `users_services_supplier_type` WHERE 1";
                                        $query_ctgy=mysqli_query($conn,$sql_ctgy);
                                        while($ctgy=mysqli_fetch_array($query_ctgy)) 
                                        {?>
                                            <option value="<?php echo $ctgy['supplier_type'];?>"<?php if(isset($_REQUEST['supplier_type'])){if($ctgy['supplier_type']==$_REQUEST['supplier_type']) echo 'selected'; }?> > <?php echo $ctgy['supplier_type'];?></option>
                                        <?php
                                        }
                                        ?>  
                                        </select>
                                    </div>


                                    <div class="col-lg-3 form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="category_name" id="category_name" required onchange="set_supplier_category();" disabled>
                                            <option value="">Select category</option>
                                            <?php

                                            //`category_id`, `type_id`, `category_name` SELECT * FROM `users_services_supplier_category` WHERE 1
                                            if(isset($_REQUEST['supplier_type']))
                                            {
                                                $supplier_type=$_REQUEST['supplier_type'];

                                                $sql_ctgy1="SELECT category_name FROM users_services_supplier_category WHERE type_id=(select type_id from users_services_supplier_type where supplier_type='$supplier_type')";
                                                $query_ctgy1=mysqli_query($conn,$sql_ctgy1);
                                                while($ctgy1=mysqli_fetch_array($query_ctgy1)) 
                                                     {?>
                                                        <option value="<?php echo $ctgy1['category_name'];?>"<?php if(isset($_REQUEST['category_name'])){if($ctgy1['category_name']==$_REQUEST['category_name']) echo 'selected'; }?>><?php echo $ctgy1['category_name'];?></option>
                                                     <?php
                                                      }
                                            }
                                            ?>  
                                            
                                        </select>
                                    </div>



                                    <div class="col-lg-3 form-group">
                                        <label>Sub Category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="sub_category_name" id="sub_category_name" disabled>
                                        <option value="">Select sub-category</option>
                                            <?php

                                            if(isset($_REQUEST['category_name']))
                                            {

                                                $category_name=$_REQUEST['category_name'];
                                                //`sub_category_id`, `category_id`, `sub_category_name` SELECT * FROM `users_services_supplier_sub_category` WHERE 1

                                                $sql_ctgy2="SELECT sub_category_name FROM users_services_supplier_sub_category WHERE category_id=(select category_id from users_services_supplier_category where category_name='$category_name')";
                                                $query_ctgy2=mysqli_query($conn,$sql_ctgy2);
                                                while($ctgy2=mysqli_fetch_array($query_ctgy2)) 
                                                     {?>
                                                        <option value="<?php echo $ctgy2['sub_category_name'];?>"<?php if(isset($_REQUEST['sub_category_name'])){if($ctgy2['sub_category_name']==$_REQUEST['sub_category_name']) echo 'selected'; }?>> <?php echo $ctgy2['sub_category_name'];?></option>
                                                     <?php
                                                      }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-3 form-group">
                                        <label>Brand / Manufacturer  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="brand_manufacturer" value="<?php if(isset($_REQUEST['xedit'])) {echo $brand_manufacturer;}?>" placeholder="Enter e.g. ambuja, dalmia etc.">                                                   
                                    </div>

                                
                                    <div class="col-lg-6 form-group">
                                        <div class="row">
                                             <div class="col-lg-6 form-group">
                                                <label>Price as per <span class="text-danger">*</span></label>
                                                <select class="form-control" name="price_per" >
                                                    <option value="">Choose units</option>
                                                    <option value="Piece" <?php if(isset($_REQUEST['xedit'])) if(($price_per) == 'Piece') echo 'selected';?>>Piece</option>
                                                    <option value="KG" <?php if(isset($_REQUEST['xedit'])) if(($price_per) == 'KG') echo 'selected';?>>KG</option>
                                                    <option value="Liter" <?php if(isset($_REQUEST['xedit'])) if(($price_per) == 'Liter') echo 'selected';?>>Liter</option>
                                                    <option value="Pair" <?php if(isset($_REQUEST['xedit'])) if(($price_per) == 'Pair') echo 'selected';?>>Pair</option>   
                                                    
                                                </select>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label>Price  <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="price" value="<?php if(isset($_REQUEST['xedit'])) {echo $price;}?>" placeholder="Enter amount">                                                   
                                            </div>
                                            
                                            <div class="col-lg-6 form-group">
                                                <label>Price Discount  <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="price_discount" value="<?php if(isset($_REQUEST['xedit'])) {echo $price_discount;}?>" placeholder="Enter e.g. 10%">                                                   
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label>Price After Discount  <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="price_after_discount" value="<?php if(isset($_REQUEST['xedit'])) {echo $price_after_discount;}?>" placeholder="Total">                                                   
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label>Image<span class="text-danger">*</span></label>
                                                <input class="form-control" type="file" name="meterial_image" value="<?php if(isset($_REQUEST['xedit'])) {echo $meterial_image;}?>" placeholder="Enter e.g. 100 holes per hour">                                                   
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label>Free Delivery within  <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="delivery_within" value="<?php if(isset($_REQUEST['xedit'])) {echo $delivery_within;}?>" placeholder="Enter e.g. 10KM">                                                   
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label>Delivery Time  <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="delivery_time" value="<?php if(isset($_REQUEST['xedit'])) {echo $delivery_time;}?>" placeholder="Enter e.g. 4 Hours, 12 Hours etc.">                                                   
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label>Minimum Order Quantity  <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="order_qty" value="<?php if(isset($_REQUEST['xedit'])) {echo $order_qty;}?>" placeholder="Enter e.g. 100 bag / 100 cft / lorry / dumper etc. ">                                                   
                                            </div>

                                            <div class="col-lg-12 form-group">
                                                <label>Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="decription" id="" cols="1" rows="1" placeholder="Please write about your product"><?php if(isset($_REQUEST['xedit'])) {echo $decription;}?></textarea>
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <label>Easy Payment Options <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="payment_options" id="payment_options" cols="1" rows="1" placeholder="Please write your bank account details and UPI ID"><?php if(isset($_REQUEST['xedit'])) {echo $payment_options;}?></textarea>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-6 form-group">
                                        <table class="table" id="test">
                                       

<?php
//`id`, `supplier_id`, `variation_id`, `subvariation_id`SELECT * FROM `ubm_supplier_variation` WHERE 1
$sql_1="SELECT * FROM ubm_supplier_variation where supplier_id=$supplier_id order by id";
$qry_1=mysqli_query($conn,$sql_1);
$count=0;
$flg=0;
while($f=mysqli_fetch_array($qry_1)){ 
    $count++;
    $t_variation_id=$f['variation_id'];
    $t_subvariation_id=$f['subvariation_id'];

   
                                     
    ?>
    
                                            
                                           
                                            <tr id="details<?php echo $count;?>">
                                                <td class="d-flex">
                                                    <div class="form-group" style="width:45.83%;  padding-left: 15px; padding-right: 15px;">
                                                        <label>Select Variation<span class="text-danger">*</span></label>
                                                        <select class="form-control" name="variation_id[]" id="variation_id<?php echo $count;?>"  onchange="get_subvariation(<?php echo $count;?>)">

                                                            <?php
                                                            $sql3="SELECT * FROM `users_services_supplier_variation`";
                                                            $query3=mysqli_query($conn,$sql3);
                                                            while($f3=mysqli_fetch_array($query3)) {
                                                                $w_variation_id=$f3['variation_id'];
                                                                $w_variation_name=$f3['variation_name'];
                                                            ?>



                                                            <option value="<?php echo $w_variation_id;?>" <?php if($w_variation_id==$t_variation_id) echo 'Selected';?>><?php echo $w_variation_name;?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                                                                   
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group" style="width:45.83%;  padding-left: 15px; padding-right: 15px;">
                                                        <label>Sub Variation<span class="text-danger">*</span></label>
                                                        <select class="form-control" name="subvariation_id[]" id='sub_variation_id<?php echo $count;?>'>
                                                        <?php
                                                            $sql4="SELECT * FROM `users_services_supplier_sub_variation` where variation_id=$t_variation_id";
                                                            $query4=mysqli_query($conn,$sql4);
                                                            while($f4=mysqli_fetch_array($query4)) {
                                                                $w_subvariation_id=$f4['subvariation_id'];
                                                                $w_subvariation_name=$f4['subvariation_name'];
                                                            ?>



                                                            <option value="<?php echo $w_subvariation_id;?>" <?php if($w_subvariation_id==$t_subvariation_id) echo 'Selected';?>><?php echo $w_subvariation_name;?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                                                           
                                                        </select>
                                                    </div>
                                                    <div class="form-group" style="width:8.3%;">
                                                    <?php
                                                     if($flg==0){
                                                        ?>
                                                        <button type="button" onclick="add()" class="btn btn-primary" style="margin-top:27px;"><i class="fa-solid fa-plus"></i></button>
                                                     <?php
                                                     } else {
                                                        ?>
                                                     
                                                        <button type="button" onclick="remove_row(<?php echo $count;?>)" class="btn btn-danger" style="margin-top:27px;"><i class="fa-solid fa-minus"></i></button>
                                                    <?php
                                                     }
                                                     ?>
                                                     </div>
                                                </td>
                                            </tr>

    <?php
      $flg=1;
    }
    ?>
                                        </table>

                                    </div>
                                    <input type="hidden" name="count" id="count" value="<?php echo $count;?>" >  





                                   







                                    
                                   
                                    
                                    
                                    
                                    

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

    <script src="jquery-3.7.1.min.js"></script>
  <script>
    

    function add() {
      var count = $('#count').val();
      count = parseInt(count) + 1;
      //alert(count);
      $('#count').val(count);
      //console.log(count);
      $('#test').append("<tr id='details" + count + "'>"+
                                               "<td class='d-flex'>"+
                                                    "<div class='form-group' style='width:45.83%;  padding-left: 15px; padding-right: 15px;'>"+
                                                        "<label>Select Variation<span class='text-danger'>*</span></label>"+
                                                        "<select class='form-control' name='variation_id[]' id='variation_id"+count+"'  onchange='get_subvariation("+count+")'>"+
                                                            "<option value='' >choose variation</option>"+
                                                       "</select>"+
                                                    "</div>"+
                                                    "<div class='form-group' style='width:45.83%;  padding-left: 15px; padding-right: 15px;'>"+
                                                        "<label>Sub Variation<span class='text-danger'>*</span></label>"+
                                                        "<select class='form-control' name='subvariation_id[]' id='sub_variation_id"+count+"'>"+
                                                            "<option  value=''>Select sub-variation</option>"+
                                                        "</select>"+
                                                    "</div>"+
                                                    "<div class='form-group' style='width:8.3%;'>"+
                                                        "<button type='button' onclick='remove_row("+count+")' class='btn btn-danger' style='margin-top:27px;'><i class='fa-solid fa-minus'></i></button>"+
                                                   "</div>"+
                                                "</td>"+
                                           "</tr>");
        get_variation(count);
    }
    function get_variation(x){
        $.ajax({
            url:'variation.php',
            data:{'flag':1},
            type:'post',
            success:function(data){
              $('#variation_id'+x).html(data)
            }
            })
    }
    function get_subvariation(x){
        var variation=$('#variation_id'+x).val();
        //alert(variation)
        $.ajax({
            url:'variation.php',
            data:{'flag':2,'variation':variation},
            type:'post',
            success:function(data){
              $('#sub_variation_id'+x).html(data)
            }
            })
    }
    function remove_row(x){
    $('#details'+x).remove();
  }
  </script>
</body>

</html>