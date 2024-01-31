<?php
include_once("../db/conn.php");
require_once("../db/user_sequre.php");
//`equipment_id`, `user_id`, `services_name`, `what_it_does`, `capacity`, `equipment_image`, `rate_per`, `price`,
// `decription`, `payment_options` SELECT * FROM `uers_services` WHERE 1


$select_sql="SELECT * FROM `users` WHERE user_id='$session_user_id'";
$select_query=mysqli_query($conn,$select_sql);
if($fetch=mysqli_fetch_array($select_query)) {
  $user_id=$fetch['user_id'];
  }


//`equipment_id`, `user_id`, `services_name`, `what_it_does`, `capacity`, `equipment_image`, `rate_per`, `price`,
// `decription`, `payment_options` SELECT * FROM `uers_services` WHERE 1

  if(isset($_POST['delete']))	
  {
         $equipment_id=$_POST['equipment_id'];
         
        $qury=mysqli_query($conn,"DELETE FROM `uers_services` WHERE equipment_id='$equipment_id'");
        header("location:uers_services.php?err=Successfully deleted");
          
  }
  
  if(isset($_POST['submit']))
  {
      $services_name= $_POST['services_name'] ;
      $what_it_does= $_POST['what_it_does'] ;
      $capacity= $_POST['capacity'] ;
      $rate_per= $_POST['rate_per'] ;
      $price= $_POST['price'] ;
      $decription= $_POST['decription'] ;
      $payment_options= $_POST['payment_options'] ;
  
      if(isset($_FILES['equipment_image'])){
        $errors= array();
        $equipment_image=$_FILES['equipment_image']['name'];
        $equipment_image_temp=$_FILES['equipment_image']['tmp_name'];
        if(empty($errors)==true){
            move_uploaded_file($equipment_image_temp,"equipment_image/".$equipment_image);
        }
      }
      $sql="INSERT INTO uers_services (user_id, services_name, what_it_does, capacity, equipment_image, rate_per, price, decription, payment_options)
      VALUES ('$user_id', '$services_name', '$what_it_does', '$capacity', '$equipment_image', '$rate_per', '$price', '$decription', '$payment_options')";
      $query=mysqli_query($conn,$sql);
      if($query){
      
          header("Location:uers_services.php?msg=New record submited successfully");
      
      }
      else{
          echo "Failed: " . mysqli_error($conn);
      }
  
  }
  
  if(isset($_POST['update']))
  {
                                                           
          $equipment_id=trim($_POST['equipment_id']);
          $services_name= $_POST['services_name'] ;
          $what_it_does= $_POST['what_it_does'] ;
          $capacity= $_POST['capacity'] ;
          $rate_per= $_POST['rate_per'] ;
          $price= $_POST['price'] ;
          $decription= $_POST['decription'] ;
          $payment_options= $_POST['payment_options'] ;
  

          if(!empty($_FILES['equipment_image']['name'])){
            $errors= array();
            $equipment_image=$_FILES['equipment_image']['name'];
            $equipment_image_temp=$_FILES['equipment_image']['tmp_name'];
            if(empty($errors)==true){
                move_uploaded_file($equipment_image_temp,"equipment_image/".$equipment_image);
                $update1=mysqli_query($conn,"update  uers_services  set equipment_image='$equipment_image' where equipment_id='$equipment_id'");
            }
          }

          $update=mysqli_query($conn,"update  uers_services  set services_name='$services_name', what_it_does='$what_it_does', capacity='$capacity', rate_per='$rate_per', price='$price', decription='$decription', payment_options='$payment_options'  where equipment_id='$equipment_id'");
                 
  
      if($update)
      {
          header("location:uers_services.php?msg=Updated Successfully");
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


    <?php if(isset($_REQUEST['xedit']))
         {
//`equipment_id`, `user_id`, `services_name`, `what_it_does`, `capacity`, `equipment_image`, `rate_per`, `price`,
// `decription`, `payment_options` SELECT * FROM `uers_services` WHERE 1
           $equipment_id=$_REQUEST['equipment_id'];
		   $qre=mysqli_query($conn,"SELECT * FROM uers_services where equipment_id=$equipment_id");
		   if($fetch=mysqli_fetch_array($qre))
			{
              $equipment_id=$fetch['equipment_id'];
			  $services_name=$fetch['services_name'];
			  $what_it_does=$fetch['what_it_does'];
              $capacity=$fetch['capacity'];
              $equipment_image=$fetch['equipment_image'];
              $rate_per=$fetch['rate_per'];
              $price=$fetch['price'];
              $decription=$fetch['decription'];
              $payment_options=$fetch['payment_options'];
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
                   <h4>Rental Services</h4>
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
                                <div class="ibox-title">Equipments Rental Services</div>
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
                            //`equipment_id`, `user_id`, `services_name`, `what_it_does`, `capacity`, `equipment_image`, `rate_per`, `price`,
                            // `decription`, `payment_options` SELECT * FROM `uers_services` WHERE 1

                            -->
                            <div class="ibox-body">
                                <form action="" method="post"   enctype="multipart/form-data">
                                <input type="hidden" id="equipment_id" name="equipment_id"  readonly="readonly" value="<?php if(isset($_REQUEST['xedit'])) {echo $equipment_id;}?>" />    
                                
                                <div class="row">
                                    <div class="col-lg-4 form-group">
                                        <label>Name of the Equipment <span class="text-danger">*</span></label>
                                       
                                        <select class="form-control" name="services_name" id="services_name" required>
                                        <option value=""> Select Service</option>
                                        <?php
                                        //`services_id`, `account_sub_type`, `services_name`SELECT * FROM `users_services_name_master` WHERE 1
                                        $sql_ctgy="SELECT * FROM `users_services_name_master` WHERE account_sub_type='Equipments Rental Services'";
                                        $query_ctgy=mysqli_query($conn,$sql_ctgy);
                                        while($ctgy=mysqli_fetch_array($query_ctgy)) 
                                        {?>
                                            <option value="<?php echo $ctgy['services_name'];?>" <?php if(isset($_REQUEST['xedit'])) if($ctgy['services_name']==$services_name) echo 'selected';?>><?php echo $ctgy['services_name'];?></option>
                                        <?php
                                        }
                                        ?>  
                                        </select>
                                            
                                      
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>What it Does  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="what_it_does" value="<?php if(isset($_REQUEST['xedit'])) {echo $what_it_does;}?>" placeholder="Enter e.g. per floor / sq.ft. / sq.mtr. / level">                                                   
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Capacity / Efficiency <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="capacity" value="<?php if(isset($_REQUEST['xedit'])) {echo $capacity;}?>" placeholder="Enter e.g. 100 holes per hour">                                                   
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Image / Video<span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" name="equipment_image" value="<?php if(isset($_REQUEST['xedit'])) {echo $equipment_image;}?>" placeholder="Enter e.g. 100 holes per hour">                                                   
                                        <?php if(isset($_REQUEST['xedit'])) {?> <img src="equipment_image/<?php echo $equipment_image;?>" width="100px;"/> <?php } ?>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Rate as per  <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="rate_per" value="<?php if(isset($_REQUEST['xedit'])) {echo $rate_per;}?>" placeholder="Enter e.g. R.s 100 per hour (day / week / month)">                                                   
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label>Price <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="price" value="<?php if(isset($_REQUEST['xedit'])) {echo $price;}?>" placeholder="Enter e.g. 1000 ">                                                   
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="decription" id="" cols="1" rows="3" placeholder="Please write about your service"><?php if(isset($_REQUEST['xedit'])) {echo $decription;}?></textarea>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label>Easy Payment Options <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="payment_options" id="" cols="1" rows="3" placeholder="Please write your bank account details and UPI ID"><?php if(isset($_REQUEST['xedit'])) {echo $payment_options;}?></textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <?php if(isset($_REQUEST['xedit'])) { ?><button class="btn btn-success" type="submit" name="update" >Update</button><?php } else {?><button class="btn btn-success" type="submit" name="submit" >Submit</button><?php } ?>
                                        </div>                                        
                                    </div> 
                                    </form>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--========== Upload Form section End================-->








<!--========== Display Data section Start============-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Services Details</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Service Name</th>
                                            <th>what_it_does</th>
                                            <th>capacity</th>
                                            <th width="60px">equipment_image</th>
                                            <th>rate_per</th>
                                            <th>price</th>
                                            <th>Description</th>
                                            <th>payment_options</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php
//`equipment_id`, `user_id`, `services_name`, `what_it_does`, `capacity`, `equipment_image`, `rate_per`, `price`,
// `decription`, `payment_options` SELECT * FROM `uers_services` WHERE 1
                                           
                                        $sql="SELECT * FROM `uers_services` WHERE user_id=$user_id order by equipment_id DESC";
                                        $query=mysqli_query($conn,$sql);
                                        while($prod=mysqli_fetch_array($query)) 
                                        {?>
                                        
                                            <tr>
                                                <td><b><?php echo $prod['services_name'];?></b></td>
                                                <td><b><?php echo $prod['what_it_does'];?></b></td>
                                                <td><b><?php echo $prod['capacity'];?></b></td>
                                                <td><b><img src="equipment_image/<?php echo $prod['equipment_image'];?>" alt="" width="100%"></b></td>
                                                <td><b><?php echo $prod['rate_per'];?></b></td>
                                                <td><b><?php echo $prod['price'];?></b></td>
                                                <td><b><?php echo $prod['decription'];?></b></td>
                                                <td><b><?php echo $prod['payment_options'];?></b></td>

                                                <form method="post" action="" enctype="multipart/form-data" onsubmit="return myFunction();">          
                                                    <input type="hidden" name="equipment_id" value="<?php echo $prod['equipment_id'];?>" />

                                                <td class="d-flex"><a href="uers_services.php?xedit=1&equipment_id=<?php echo $prod['equipment_id'];?>"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:25px;"></i></a><button  style="border:none; color:#007bff" type="submit" name="delete"><i class="fa fa-trash" aria-hidden="true" style="font-size:25px;"></i></a></button></td>
                                              </form>
                                            </tr>
                                        <?php
                                        }
                                        ?>    

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>
            </div>
<!--========== Display Data section End============-->





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
</body>

</html>