<?php
include_once("../db/conn.php");
require_once("../db/admin_sequre.php");



 //`account_type_id`, `account_type`, `account_sub_type` SELECT * FROM `users_account_type_master` WHERE 1
if(isset($_POST['submit']))
{
    $account_type= $_POST['account_type'] ;
    $account_sub_type= $_POST['account_sub_type'] ;

    $sql="INSERT INTO users_account_type_master (account_type, account_sub_type)
    VALUES ('$account_type', '$account_sub_type')";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("Location:users_account_type_master.php?msg=New record submited successfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Users Account Type Master</title>
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
    </script>
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
                   <h4 style="text-transform: uppercase;">Users Account Type Master</h4>
                </div>
            </div>
<!--=========== End Indigator Bar===============================-->









<!--=========== Start Party Details===============================-->





            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Upload Type</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                            
                                        <form action="" method="POST" enctype="multipart/form-data" >
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>Account Type <span class="text-danger">*</span></label>
                                                    <select  class="form-control" name="account_type" id="">
                                                        <option selected value="0">Select Your Type</option>
                                                        <option value="Real Estate Personnels">Real Estate Personnels</option>
                                                        <option value="Building Material Supplier">Building Material Supplier</option>
                                                        <option value="Building Making Service Provider">Building Making Service Provider</option>
                                                        <option value="Legal Service Provider">Legal Service Provider</option>
                                                    </select>
                                                </div>  
                                                <div class="col-sm-4 form-group">
                                                    <label>Account Sub Type <span class="text-danger">*</span></label>
                                                    <select  class="form-control" name="account_sub_type" id="">

                                                    <optgroup label="Real Estate Personnels">
                                                        <option selected value="0">Select Your Type</option>
                                                        <option value="Broker">Broker</option>
                                                        <option value="Agent">Agent</option>
                                                        <option value="Owner">Owner</option>
                                                        <option value="Builder / Promoter">Builder / Promoter</option>
                                                    </optgroup>

                                                    <optgroup label="Building Material Supplier">
                                                        <option value="Manufacturer">Manufacturer</option>
                                                        <option value="Distributor">Distributor</option>
                                                        <option value="Dealer">Dealer</option>
                                                        <option value="Shop / Store ">Shop / Store </option>
                                                        <option value="Genaral Order Suppiler">Genaral Order Suppiler</option>
                                                    </optgroup>

                                                    <optgroup label="Building Making Service Provider">
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
                                                    </optgroup>

                                                    <optgroup label="Legal Service Provider">
                                                        <option value="Advocate / Solicitor">Advocate / Solicitor</option>
                                                        <option value="Surveyor / Amin">Surveyor / Amin</option>
                                                        <option value="Valuer">Valuer</option>
                                                    </optgroup>
                                                    </select>
                                                </div>  

                                            </div>
                                            <div class="form-group">
                                            <button class="btn btn-success" type="submit" name="submit" >Submit</button>
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
                                <div class="ibox-title">User Account Type Details</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="">Account Type ID</th>
                                            <th class="">Account Type</th>
                                            <th class="">Account Sub Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php
                                    //`account_type_id`, `account_type`, `account_sub_type` SELECT * FROM `users_account_type_master` WHERE 1
                                        $sql1="SELECT * FROM users_account_type_master order by account_type,account_sub_type";
                                        $query1=mysqli_query($conn,$sql1);
                                        while($prd=mysqli_fetch_array($query1)) 
                                        {?>
                                            <tr>
                                                <td><b><?php echo $prd['account_type_id'];?></b></td>
                                                <td><b><?php echo $prd['account_type'];?></b></td>
                                                <td><b><?php echo $prd['account_sub_type'];?></b></td>
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