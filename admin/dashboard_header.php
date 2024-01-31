<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- START HEADER-->
        <header class="header">
            <div class="page-brand" style="background-color:#00a7f3;">
                <a class="link" href="index.html">
                    <span class="brand">Admin
                        <span class="brand-tip"></span>
                    </span>
                    <span class="brand-mini">AC</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li class="header-name">
                        <h3><b>3 BIGHA</b></h3>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">

                <!-- START Notification TOOLBAR--> 
                <!--<li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>-->



                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="dashboard-source/assets/img/admin-avatar.png" />
                            <span></span>Admin
                            
                            <i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-cog"></i>Settings</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar" style="background-color:#2379bd; position:fixed;">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="dashboard-source/assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Admin</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a  href="dashboard.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a  href="users_account_type_master.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">User Account Type </span>
                        </a>
                    </li>
                    <li>
                        <a  href="users_services_name_master.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">User Services Name </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"class="text-light"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Materials</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="users_services_supplier_type.php">Materials Type</a>
                            </li>
                            <li>
                                <a href="users_services_supplier_category.php">Materials category</a>
                            </li>
                            <li>
                                <a href="users_services_supplier_sub_category.php">Materials Sub-category</a>
                            </li>
                            <li>
                                <a href="users_services_supplier_variation.php">Materials Variation</a>
                            </li>
                            <li>
                                <a href="users_services_supplier_sub_variation.php">Materials Sub Variation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="loacation_details_master.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Location Details Master</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php" style="color:#fff;"><i class="sidebar-item-icon fa fa-sign-out"></i>
                            <span class="nav-label">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->