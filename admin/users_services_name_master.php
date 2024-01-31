<?php
include_once("../db/conn.php");
require_once("../db/admin_sequre.php");

if(isset($_POST['delete']))	
{
    $services_id=$_POST['services_id'];
    $qury=mysqli_query($conn,"DELETE FROM `users_services_name_master` WHERE services_id='$services_id'");
    header("location:users_services_name_master.php?msg=Successfully deleted");
        
}

if(isset($_POST['submit']))
{
//`services_id`, `account_sub_type`, `services_name` SELECT * FROM `users_services_name_master` WHERE 1
    $account_sub_type= $_POST['account_sub_type'] ;
    $services_name= $_POST['services_name'] ;



    $sql="INSERT INTO users_services_name_master (account_sub_type, services_name)
    VALUES ('$account_sub_type', '$services_name')";
    $query=mysqli_query($conn,$sql);
    if($query){
    
        header("Location:users_services_name_master.php?msg=New record submited successfully");
    
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }

}

if(isset($_POST['update']))
{
              //`services_id`, `account_sub_type`, `services_name` SELECT * FROM `users_services_name_master` WHERE 1                                           
        $services_id=trim($_POST['services_id']);
        $account_sub_type= $_POST['account_sub_type'] ;
        $services_name= $_POST['services_name'] ;

        $update=mysqli_query($conn,"update  users_services_name_master  set account_sub_type='$account_sub_type',  services_name='$services_name'  where services_id='$services_id'");


    if($update)
    {
        $err="Successfully updated";
        header("location:users_services_name_master.php?msg=".$err);

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
    <title>Services Name</title>
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
    <!-- PAGE LEVEL STYLES-->
    <script language="javascript">

        function myFunction() {
            if (confirm("Are you sure to delete?") == true) {            
            return true;
            } else {
                return false;
                
            }
        }



        function convert_data_to_upper(x)
        {
      
	    x.value=x.value.toUpperCase();
        }
 
 
        function check_numeric(x)
        {
            var str="-0123456789.";
            i=0;
            number_of_decimal_point=0;
            while(i<x.value.length)
                {
                    //alert(x.value);
                    if(str.indexOf(x.value.charAt(i))==-1)
                        {
                        x.value=x.value.substring(0,i);
                        return false;
                        }
                    if(".".indexOf(x.value.charAt(i))!=-1)
                        {
                        number_of_decimal_point++;
                        if(number_of_decimal_point>1)
                            {
                            x.value=x.value.substring(0,i);
                            return false;
                            }
                        }
                    i++;
                }
         }

        function check_decimal(x)
        {
            var str="0123456789.";
            i=0;
            number_of_decimal_point=0;
            while(i<x.value.length)
                {
                    //alert(x.value);
                    if(str.indexOf(x.value.charAt(i))==-1)
                        {
                        x.value=x.value.substring(0,i);
                        return false;
                        }
                    if(".".indexOf(x.value.charAt(i))!=-1)
                        {
                        number_of_decimal_point++;
                        if(number_of_decimal_point>1)
                            {
                            x.value=x.value.substring(0,i);
                            return false;
                            }
                        }
                    i++;
                }
	 
        }
</script>
</head>

<body class="fixed-navbar">

<?php if(isset($_REQUEST['xedit']))
         {
             //`services_id`, `account_sub_type`, `services_name` SELECT * FROM `users_services_name_master` WHERE 1
           $services_id=$_REQUEST['services_id'];
		   $qre=mysqli_query($conn,"SELECT * FROM users_services_name_master where services_id=$services_id");
		   if($fetch=mysqli_fetch_array($qre))
			{
			  $services_id=$fetch['services_id'];
			  $account_sub_type=$fetch['account_sub_type'];
              $services_name=$fetch['services_name'];

			}
		 
}
?>
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
                   <h4 style="text-transform: uppercase;">Users Services Name Master</h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->









<!--=========== Start Party Details===============================-->





            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Upload Service</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                            
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
                                        <form action="" method="POST" enctype="multipart/form-data" >
                                            <input type="hidden" id="services_id" name="services_id"  readonly="readonly" value="<?php if(isset($_REQUEST['xedit'])) {echo $services_id;}?>" />    

                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>Account Sub Type<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="account_sub_type" id="account_sub_type">
                                                        <option selected>Select your type</option>
                                                    <?php
                                                        //`services_id`, `account_sub_type`, `services_name` SELECT * FROM `users_services_name_master` WHERE 1
                                                    //`account_type_id`, `account_type`, `account_sub_type` SELECT * FROM `users_account_type_master` WHERE 1
                                                    $sql_ctgy="SELECT * FROM `users_account_type_master` WHERE 1";
                                                    $query_ctgy=mysqli_query($conn,$sql_ctgy);
                                                    while($ctgy=mysqli_fetch_array($query_ctgy)) 
                                                    {?>
                                                        <option value="<?php echo $ctgy['account_sub_type'];?>" <?php if(isset($_REQUEST['xedit'])) if($ctgy['account_sub_type']==$account_sub_type) echo 'selected';?>><?php echo $ctgy['account_sub_type'];?></option>
                                                    <?php
                                                    }
                                                    ?>  
                                                    </select>
                                                </div> 
                                                <div class="col-sm-4 form-group">
                                                    <label>Service Name <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="services_name" value="<?php if(isset($_REQUEST['xedit'])) {echo $services_name;}?>" placeholder="Enter service name">
                                                </div>  




                                            </div>
                                            <div class="form-group">
                                            <?php if(isset($_REQUEST['xedit'])) { ?><button class="btn btn-success" type="submit" name="update" >Update</button><?php } else {?><button class="btn btn-success" type="submit" name="submit" >Submit</button><?php } ?>
                                            </div>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Service Details</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="">Account Sub Type</th>
                                            <th class="">Service Name</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php
                                //`services_id`, `account_sub_type`, `services_name` SELECT * FROM `users_services_name_master` WHERE 1
                                        $sql1="SELECT * FROM users_services_name_master order by account_sub_type,services_name";
                                        $query1=mysqli_query($conn,$sql1);
                                        while($prd=mysqli_fetch_array($query1)) 
                                        {?>
                                            <tr>
                                            
                                                <td><b><?php echo $prd['account_sub_type'];?></b></td>

                                                <td><b><?php echo $prd['services_name'];?></b></td>
                                                
                                                <form method="post" action="" enctype="multipart/form-data" onsubmit="return myFunction();">          
                                                    <input type="hidden" name="services_id" value="<?php echo $prd['services_id'];?>" />

                                                <td class="d-flex"><a href="users_services_name_master.php?xedit=1&services_id=<?php echo $prd['services_id'];?>"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:25px;"></i></a><button  style="border:none; color:#007bff" type="submit" name="delete"><i class="fa fa-trash" aria-hidden="true" style="font-size:25px;"></i></a></button></td>
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
<!--=========== End Party Details===============================-->








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