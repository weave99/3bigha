<?php
include_once 'db/conn.php';
require_once 'db/sequre_page.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Profile</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <link href="assets/css/dashboard.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
    .profile-social a {
        font-size: 16px;
        margin: 0 10px;
        color: #999;
    }

    .profile-social a:hover {
        color: #485b6f;
    }

    .profile-stat-count {
        font-size: 22px
    }
    </style>
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

    <div class="page-wrapper">

    <!-- Nav header side =========================================-->
    <?php include 'header.php'; ?>
    <!-- Nav header side =========================================-->


        <!-- END SIDEBAR-->
        <div class="content-wrapper">

            <div class="row pt-2 text-center" style="background-color:#00a7f3; color:#fff; font-width:700;">
                <div class="col-lg-12">
                   <h4>Profile</h4>
                </div>
            </div>

            <?php
                if(strcmp(strtoupper($zone_session),"ADMIN")==0 || strcmp(strtoupper($zone_session),"EMPLOYEE")==0)
                { 
            ?>
            <!--================== Employee & Admin Profile Menu =========================================-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="assets/img/personal_pic/<?php echo $header_photo;?>" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10"><?php echo $user_id_session;?></h5>
                                <div class="m-b-20 text-muted"><?php echo  $header_degisnation;?></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Update Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user"></i> Personal Details</h5>

                                                <div class="m-b-5">
                                                    <div class="h4 mt-3">Name : <?php echo $user_id_session;?></div>
                                                </div>
                                                <ul class="list-group list-group-full list-group-divider">
                                                    <li class="list-group-item">Degisnation :  <?php echo  $header_degisnation;?> </li>
                                                    <li class="list-group-item">Date of Joining : <?php echo  $header_doj;?></li>
                                                    <li class="list-group-item">Salary : <?php echo  $header_salary;?></li>
                                                    <li class="list-group-item">Pan No. <?php echo  $header_pan_no;?></li>
                                                    <li class="list-group-item">Contact No : <?php echo  $header_contact_no;?></li>
                                                    <li class="list-group-item">Email Id : <?php echo  $header_email_id;?></li>
                                                    <li class="list-group-item">Address : <?php echo  $header_address;?></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="tab-2">
                                        <form action="" method="post">                                        
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="emp_name" id="emp_name" placeholder="Enter name" onKeyUp="convert_data_to_upper(this);" value="<?php echo $user_id_session;?>" required>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Degisnation</label>
                                                    <input class="form-control" type="text" name="degisnation" id="degisnation"   placeholder="" value="<?php echo $header_degisnation;?>" required>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Change profile picture</label>
                                                    <input class="form-control" type="file" name="emp_photo" id="emp_photo"   placeholder="" value="<?php echo $header_photo;?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>Date of joining</label>
                                                    <input class="form-control" type="date" name="doj" id="doj"   placeholder="" value="<?php echo $header_doj;?>">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Salary</label>
                                                    <input class="form-control" type="text" name="salary" id="salary"   placeholder="" value="<?php echo $header_salary;?>">
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Pan No.</label>
                                                    <input class="form-control" type="text" name="pan_no" id="pan_no"   placeholder="" value="<?php echo $header_pan_no;?>">
                                                </div>
                                            </div>
                                            <div class="row">
   
                                                <div class="col-sm-6 form-group">
                                                    <label>Contact No.</label>
                                                    <input class="form-control" type="text" name="contact_no"  id="contact_no" placeholder="" value="<?php echo $header_contact_no;?>">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Email Id</label>
                                                    <input class="form-control" type="text" name="email_id"  id="email_id" placeholder="" value="<?php echo $header_email_id;?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" name="address" id="address" cols="30" rows="2"> <?php echo $header_address;?></textarea>
                                          
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
                </div>
            </div>
            <!--================== Employee & Admin Profile Menu =========================================-->
            <?php     
                }
                else if(strcmp(strtoupper($zone_session),"CLIENT")==0)
                { 
            ?>

            <!--================== Client Profile Menu =========================================-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="assets/img/personal_pic/<?php echo $header_photo;?>" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10"><?php echo $user_id_session;?></h5>
                                <div class="m-b-20 text-muted"><?php echo  $header_degisnation;?></div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Update Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user"></i> Personal Details</h5>

                                                <div class="m-b-5">
                                                    <div class="h4 mt-3">Name : <?php echo $user_id_session;?></div>
                                                </div>
                                                <ul class="list-group list-group-full list-group-divider">
                                                    <li class="list-group-item">Degisnation :  <?php echo  $header_degisnation;?> </li>
                                                    <li class="list-group-item">Contact No : <?php echo  $header_contact_no;?></li>
                                                    <li class="list-group-item">Email Id : <?php echo  $header_email_id;?></li>
                                                    <li class="list-group-item">Address : <?php echo  $header_address;?></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                    <form action="" method="post">                                        
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="emp_name" id="emp_name" placeholder="Enter name" onKeyUp="convert_data_to_upper(this);" value="<?php echo $user_id_session;?>" required>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Degisnation</label>
                                                    <input class="form-control" type="text" name="degisnation" id="degisnation"   placeholder="" value="<?php echo $header_degisnation;?>" required>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Change profile picture</label>
                                                    <input class="form-control" type="file" name="emp_photo" id="emp_photo"   placeholder="" value="<?php echo $header_photo;?>">
                                                </div>
                                            </div>
                                            <div class="row">
   
                                                <div class="col-sm-6 form-group">
                                                    <label>Contact No.</label>
                                                    <input class="form-control" type="text" name="contact_no"  id="contact_no" placeholder="" value="<?php echo $header_contact_no;?>">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Email Id</label>
                                                    <input class="form-control" type="text" name="email_id"  id="email_id" placeholder="" value="<?php echo $header_email_id;?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" name="address" id="address" cols="30" rows="2"> <?php echo $header_address;?></textarea>
                                          
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
                    
                </div>
            </div>
            <!--================== Client Profile Menu =========================================-->
            <?php
                }
            ?>

            
            <!-- END PAGE CONTENT-->
        <!-- Nav header side =========================================-->
        <?php include 'footer.php'; ?>
        <!-- Nav header side =========================================-->
        </div>
    </div>

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="./assets/js/scripts/profile-demo.js" type="text/javascript"></script>
</body>

</html>