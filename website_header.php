<!--<div class="page_loader"></div>-->


<!-- Top header start -->

<header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-sm-7">
                <div class="list-inline">
                    <!--<a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+91 96146 57110</a>-->
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>enquire.3bigha@gmail.com</a>
                    <!--<a href="#" class="mr-0 d-none-992"><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Mahishbathan (Battala)
                        Cooch Behar, West Bengal</a>-->
                </div>
            </div>
            <div class="col-lg-6 col-md-3 col-sm-5">
                <ul class="top-social-media pull-right">
                    <?php if(!isset($_SESSION['user_id'])){ ?>
                        <li>
                            <a href="user_login.php" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                        </li>
                        <li>
                            <a href="user_register.php" class="sign-in"><i class="fa fa-user"></i> Register</a>
                        </li>
                    <?php } else { 
                        // `user_id`, `full_name`, `business_name`, `mobile_no`, `email`, `account_type`, `real_estate_type`,
                        // `building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * FROM `users` WHERE 1
                         $h_u=$_SESSION['user_id'];
                         $sql1="select * from users where user_id='$h_u'";
                         $query1=mysqli_query($conn,$sql1);
                         $name_header="";
                         if($f=mysqli_fetch_array($query1))
                         $name_header=$f['full_name'];
                         $n=strpos($name_header," ");
                         if($n>0)
                         $name_header=substr($name_header,0,$n);
                        ?>
                        <li>
                            <a href="user_dashboard/dashboard.php" class="user-name"><i class="bi bi-person-circle"></i> <?php echo  $name_header;?></a>
                        </li>
                        <li>
                            <a href="user_dashboard/dashboard.php" class="user-name"><i class="bi bi-person-lines-fill"></i></i> My Profile</a>
                        </li>
                        <li>
                            <a href="user_logout.php" class="log-out"><i class="fa fa-power-off" aria-hidden="true"></i> Logout </a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->










<!--=====================Desktom Menu====================================================-->


<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="index.php">
                        <img src="assets/img/logos/black-logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav justify-content-end ml-auto"
                        
                        >
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Properties
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Land / Plot</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Residential">Residential</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Commercial">Commercial</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Agricultural">Agricultural</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Industrial">Industrial</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Building / Residential</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Apartment">Apartment</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Bunglow">Bunglow</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Fram House">Fram House</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Commercial Space">Commercial Space</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Independent / Builder Floor">Independent / Builder Floor</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Independent House / Villa">Independent House / Villa</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Farm House">Farm House</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Bunglow">Bunglow</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Office Space">Office Space</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Residential">Shop</a></li>
                                            <li><a class="dropdown-item" href="view_listed_properties.php?property_type=House Others">Others</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            

                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Other Real Estate Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="uers_services_details.php">Rental Services</a></li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Building Material</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="">Manufacturer</a></li>
                                            <li><a class="dropdown-item" href="">Distributor</a></li>
                                            <li><a class="dropdown-item" href="">Dealer</a></li>
                                            <li><a class="dropdown-item" href="">Shop / Store</a></li>
                                            <li><a class="dropdown-item" href="">Genaral Order Suppiler</a></li>
                                        </ul>
                                    </li>                                    
                                    

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Building Making Service Provider</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="ubms_architect_details.php">Architect / Civil Engineer</a></li>
                                            <li><a class="dropdown-item" href="ubms_meson_laborers_details.php">Mason / Laborers</a></li>
                                            <li><a class="dropdown-item" href="ubms_carpenter_details.php">Carpenter</a></li>
                                            <li><a class="dropdown-item" href="ubms_electrician_details.php">Electrician</a></li>
                                            <li><a class="dropdown-item" href="ubms_plumber_details.php">Plumber</a></li>
                                            <li><a class="dropdown-item" href="ubms_painter_details.php">Painter</a></li>
                                            <li><a class="dropdown-item" href="ubms_interior_designer_details.php">Interior Designer</a></li>
                                            <li><a class="dropdown-item" href="ubms_exterior_designer_details.php">Exterior Designer</a></li>
                                            <li><a class="dropdown-item" href="ubms_tile_settar_details.php">Tile Setter</a></li>
                                            <li><a class="dropdown-item" href="ubms_insulator_details.php">Insulator</a></li>
                                            <li><a class="dropdown-item" href="ubms_framing_contractor_details.php">Framing Contractor</a></li>
                                            <li><a class="dropdown-item" href="ubms_roofer_details.php">Roofer</a></li>
                                            <li><a class="dropdown-item" href="ubms_cabinet_maker_details.php">Cabinet Maker</a></li>
                                            <li><a class="dropdown-item" href="ubms_plasterer_details.php">Plasterer</a></li>
                                            <li><a class="dropdown-item" href="ubms_general_contractor_details.php">General Contractor</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Legal Service Provider</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="uls_lawyer_details.php">Lawyer / Advocate</a></li>
                                            <li><a class="dropdown-item" href="uls_surveyor_details.php">Surveyor / Amin</a></li>
                                            <li><a class="dropdown-item" href="uls_valuer_details.php">Valuer</a></li>
                                        
                                        </ul>
                                    </li>

                                    
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">
                                    About Us
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">
                                    Contact Us
                                </a>
                            </li>
                            
                            <li class="nav-item sb2">
                                <a class="nav-link" href="users_post_property_details.php">
                                    Post Property
                                </a>
                           <!-- <button type="button" class="btn  submit-btn" data-toggle="modal" data-target="#exampleModalCenter"> Post Property</button>-->
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->










<!--=====================Mobile Menu====================================================-->


<!-- Sidenav start -->


<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="assets/img/logos/black-logo.png" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <ul class="menu-list">
                <li><a href="index.php" class="active pt0">Home</a></li>


                <li>
                    <a href="#">Properties<em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Land / Plot<em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Residential">Residential</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Commercial">Commercial</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Agricultural">Agricultural</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Industrial">Industrial</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Building / Residential <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Apartment">Apartment</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Bunglow">Bunglow</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Fram House">Fram House</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Commercial Space">Commercial Space</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Independent / Builder Floor">Independent / Builder Floor</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Independent House / Villa">Independent House / Villa</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Farm House">Farm House</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Bunglow">Bunglow</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Office Space">Office Space</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=Residential">Shop</a></li>
                                <li><a class="dropdown-item" href="view_listed_properties.php?property_type=House Others">Others</a></li>
                            
                            </ul>
                        </li>
                    </ul>


                </li>

                <li>
                    <a href="#">Other Real Estate Services<em class="fa fa-chevron-down"></em></a>
                    <ul>
                    
                        <li><a class="dropdown-item" href="uers_services_details.php">Rental Services</a></li>

                        <li>
                            <a href="#">Building Material <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="">Manufacturer</a></li>
                                <li><a class="dropdown-item" href="">Distributor</a></li>
                                <li><a class="dropdown-item" href="">Dealer</a></li>
                                <li><a class="dropdown-item" href="">Shop / Store</a></li>
                                <li><a class="dropdown-item" href="">Genaral Order Suppiler</a></li>
                            </ul>
                        </li>






                        <li>
                            <a href="#">Building Making Service Provider<em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="ubms_architect_details.php">Architect / Civil Engineer</a></li>
                                <li><a class="dropdown-item" href="ubms_meson_laborers_details.php">Mason / Laborers</a></li>
                                <li><a class="dropdown-item" href="ubms_carpenter_details.php">Carpenter</a></li>
                                <li><a class="dropdown-item" href="ubms_electrician_details.php">Electrician</a></li>
                                <li><a class="dropdown-item" href="ubms_plumber_details.php">Plumber</a></li>
                                <li><a class="dropdown-item" href="ubms_painter_details.php">Painter</a></li>
                                <li><a class="dropdown-item" href="ubms_interior_designer_details.php">Interior Designer</a></li>
                                <li><a class="dropdown-item" href="ubms_exterior_designer_details.php">Exterior Designer</a></li>
                                <li><a class="dropdown-item" href="ubms_tile_settar_details.php">Tile Setter</a></li>
                                <li><a class="dropdown-item" href="ubms_insulator_details.php">Insulator</a></li>
                                <li><a class="dropdown-item" href="ubms_framing_contractor_details.php">Framing Contractor</a></li>
                                <li><a class="dropdown-item" href="ubms_roofer_details.php">Roofer</a></li>
                                <li><a class="dropdown-item" href="ubms_cabinet_maker_details.php">Cabinet Maker</a></li>
                                <li><a class="dropdown-item" href="ubms_plasterer_details.php">Plasterer</a></li>
                                <li><a class="dropdown-item" href="ubms_general_contractor_details.php">General Contractor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Legal Service Provider <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a class="dropdown-item" href="uls_lawyer_details.php">Lawyer / Advocate</a></li>
                                <li><a class="dropdown-item" href="uls_surveyor_details.php">Surveyor / Amin</a></li>
                                <li><a class="dropdown-item" href="uls_valuer_details.php">Valuer</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li>
                <!--<button type="button" class="btn  submit-btn" data-toggle="modal" data-target="#exampleModalCenter"> Post Property</button>-->
                    <a href="users_post_property_details.php">Post Property</a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <?php if(!isset($_SESSION['user_name'])){ ?>
            <div class="media">
                <i class="fa fa-user"></i>
                <div class="media-body">
                    <a href="user_register.php">Register</a>
                </div>
            </div>
            <div class="media">
                <i class="fa fa-sign-in"></i>
                <div class="media-body">
                    <a href="user_login.php">Login</a>
                </div>
            </div>
            <?php } else { 
                        // `user_id`, `full_name`, `business_name`, `mobile_no`, `email`, `account_type`, `real_estate_type`,
                        // `building_provider_type`, `legal_provider_type`, `verify_otp`, `login_time` SELECT * FROM `users` WHERE 1
                        $h_u=$_SESSION['user_name'];
                        $sql1="select * from users where mobile_no='$h_u'";
                        $query1=mysqli_query($conn,$sql1);
                        $name_header="";
                        if($f=mysqli_fetch_array($query1))
                        $name_header=$f['full_name'];
                        $n=strpos($name_header," ");
                        if($n>0)
                        $name_header=substr($name_header,0,$n);
                       ?>
                       
            <div class="media">
                <i class="fa fa-user"></i>
                <div class="media-body">
                    <a href="user_dashboard/update_profile.php"> <?php echo  $name_header;?></a>
                </div>
            </div>
            <div class="media">
                <i class="bi bi-speedometer"></i>
                <div class="media-body">
                    <a href="user_dashboard/dashboard.php">Dashboard</a>
                </div>
            </div>
            <div class="media  mb-0">
                <i class="fa fa-power-off"></i>
                <div class="media-body">
                    <a href="user_login.php">Logout</a>
                </div>
            </div>
            <?php  } ?>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="media">
                <i class="fa fa-envelope"></i>
                <div class="media-body">
                    <a href="#">enquire.3bigha@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>











