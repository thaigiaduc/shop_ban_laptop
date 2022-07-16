<?php 
session_start();
include("connect.php");
if(!isset($_SESSION['usernamead'])){
    
    header('Location: login.php');} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ISTORE - Dashboard</title>
    <meta name="description" content="Dashboard | ISTORE">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.php" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span>ISTORE ADMIN</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Doe</b>
                                    <span>New message received</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Michael Smith</b>
                                    <span>New message received</span>
                                    <small class="text-muted">18 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="mail-all.html" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>John Lenons</b>
                                    <span>New message received</span>
                                    <small class="text-muted">Yesterday, 18:27</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="mail-all.html" class="dropdown-item notify-item notify-all">
                                View All Messages
                            </a>

                        </div>

                    </li>

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="notif-bullet"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>
                                        <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>John Doe</b>
                                    <span>User registration</span>
                                    <small class="text-muted">3 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michael Cox</b>
                                    <span>Task 2 completed</span>
                                    <small class="text-muted">12 minutes ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <div class="notify-icon bg-faded">
                                    <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                </div>
                                <p class="notify-details">
                                    <b>Michelle Dolores</b>
                                    <span>New job completed</span>
                                    <small class="text-muted">35 minutes ago</small>
                                </p>
                            </a>

                            <!-- All-->
                            <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                            </a>

                        </div>
                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>
                                    <small>Settings</small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 1</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 2</b>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <i class="fas fa-cog"></i>
                                    <b>Settings 3</b>
                                </p>
                            </a>

                        </div>

                    </li>


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hello, <?php echo $_SESSION['usernamead']; ?></small>
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="profile.php" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <a href="../index.php" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Shop</span>
                            </a>
                            <!-- item-->
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>
                        <li class="submenu">
                            <a class="active" href="index.php">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <?php
                        $idquyen=$_SESSION['idquyen'];
                        $sql="SELECT * FROM quyenhan WHERE ma_chucvu='$idquyen'";
                        $query=mysqli_query($con,$sql);

                        $sql1="SELECT * FROM link_quyen WHERE ma_chucvu='$idquyen'";
                        $query1=mysqli_query($con,$sql1);
                        $mangchohau=array();    
                        $mangchohau1=array(); 
                        
                        $icon="SELECT * FROM icon WHERE ma_chucvu='$idquyen'";
                        $queryicon=mysqli_query($con,$icon);
                        while($rowic=mysqli_fetch_field($queryicon)){
                            array_push($mangchohau1, $rowic->name);
                        }
                        while($row1=mysqli_fetch_field($query1)){
                                array_push($mangchohau, $row1->name);
                                
                        }
                        $i=0;
                        while($row=mysqli_fetch_field($query)){
                            if($row->max_length==1){    
                                
                        ?>

                        <li class="submenu">
                        
                            <a class="active" href="<?php echo $mangchohau[$i];  ?>">
                            
                                <span><?php echo $mangchohau1[$i]; ?> <?php echo $row->name; ?> </span>
                            </a>
                            
                        </li>
                        <?php 
                            }
                            $i++;
                        }
                        ?>
                        <!-- <li class="submenu">
                            <a href="users.html">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="blog.html">
                                <i class="fas fa-file-alt"></i>
                                <span> Blog </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="mail-all.html">
                                <span class="label radius-circle bg-danger float-right">18</span>
                                <i class="fas fa-envelope"></i>
                                <span> Mailbox </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="slider.html">
                                <i class="fas fa-photo-video"></i>
                                <span> Slider </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="charts.html">
                                <i class="fas fa-chart-line"></i>
                                <span> Charts </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-laptop"></i>
                                <span> User Interface </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="ui-icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips and Popovers</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fab fa-wpforms"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="forms-general.html">General Elements</a>
                                </li>
                                <li>
                                    <a href="forms-select2.html">Select2</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Form Validation</a>
                                </li>
                                <li>
                                    <a href="forms-text-editor.html">Text Editors</a>
                                </li>
                                <li>
                                    <a href="forms-upload.html">Multiple File Upload</a>
                                </li>
                                <li>
                                    <a href="forms-datetime-picker.html">Date and Time Picker</a>
                                </li>
                                <li>
                                    <a href="forms-color-picker.html">Color Picker</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-file-image"></i>
                                <span> Multimedia </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="media-fancybox.html">
                                        <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                                </li>
                                <li>
                                    <a href="media-masonry.html">Masonry</a>
                                </li>
                                <li>
                                    <a href="media-lightbox.html">Lightbox</a>
                                </li>
                                <li>
                                    <a href="media-owl-carousel.html">Owl Carousel</a>
                                </li>
                                <li>
                                    <a href="media-image-magnifier.html">Image Magnifier</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="fas fa-star"></i>
                                <span> Plugins </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="star-rating.html">Star Rating</a>
                                </li>
                                <li>
                                    <a href="range-sliders.html">Range Sliders</a>
                                </li>
                                <li>
                                    <a href="tree-view.html">Tree View</a>
                                </li>
                                <li>
                                    <a href="sweetalert.html">SweetAlert</a>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="counter-up.html">Counter-Up</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <i class="far fa-copy"></i>
                                <span> Example Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="page-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="page-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="page-blank.html">Blank Page</a>
                                </li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#">
                                <span class="label radius-circle bg-primary float-right">9</span>
                                <i class="fas fa-indent"></i>
                                <span> Menu Levels </span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>Second Level</span>
                                    </a>
                                </li>
                                <li class="submenu">
                                    <a href="#">
                                        <span>Third Level</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span>Third Level Item</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Third Level Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <li class="submenu">
                                <a class="pro" href="pro.html">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span> PRO Version </span>
                                </a>
                            </li>

                            <li class="submenu">
                                <a target="_blank" href="https://nura24.com">
                                    <i class="fas fa-th"></i>
                                    <span> Nura24 Free Suite </span>
                                </a>
                            </li> -->

                        </li>

                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    
                    <!-- end row -->


                    <!-- <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="far fa-user float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                                <h1 class="m-b-20 text-white counter">487</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-purple">
                                <i class="fas fa-download float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Downloads</h6>
                                <h1 class="m-b-20 text-white counter">290</h1>
                                <span class="text-white">12 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fas fa-shopping-cart float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                                <h1 class="m-b-20 text-white counter">320</h1>
                                <span class="text-white">25 Today</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-info">
                                <i class="far fa-envelope float-right text-white"></i>
                                <h6 class="text-white text-uppercase m-b-20">Messages</h6>
                                <h1 class="m-b-20 text-white counter">58</h1>
                                <span class="text-white">5 New</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- end row -->


                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-chart-bar"></i> Chart 1</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">
                                    <canvas id="comboBarLineChart"></canvas>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div> -->
                            <!-- end card-->
                        <!-- </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-chart-bar"></i> Chart 2</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">
                                    <canvas id="barChart"></canvas>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div> -->
                            <!-- end card-->
                        <!-- </div>
                    </div> -->
                    <!-- end row -->



                    <!-- <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-history"></i> Tasks progress</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>

                                <div class="card-body">
                                    <p class="font-600 mb-1">Task completed <span class="text-info pull-right"><b>100%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 1 <span class="text-primary pull-right"><b>95%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 2 <span class="text-primary pull-right"><b>88%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="88">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 3 <span class="text-info pull-right"><b>75%</b></span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-info" role="progressbar" style="width: 78%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 4 <span class="text-info pull-right"><b>70%</b></span>
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 5 <span class="text-warning pull-right"><b>68%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="68">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 6 <span class="text-warning pull-right"><b>65%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 7 <span class="text-danger pull-right"><b>55%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 8 <span class="text-danger pull-right"><b>40%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40">
                                        </div>
                                    </div>

                                    <div class="mb-3"></div>

                                    <p class="font-600 mb-1">Task 9 <span class="text-danger pull-right"><b>20%</b></span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-xs bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
                            </div> -->
                            <!-- end card-->
                        <!-- </div>


                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-envelope"></i> Latest messages</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>

                                <div class="card-body">

                                    <div class="widget-messages nicescroll" style="height: 550px;">
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">John Doe</p>
                                                <p class="message-item-msg">Hello. I want to buy your product</p>
                                                <p class="message-item-date">11:50 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Ashton Cox</p>
                                                <p class="message-item-msg">Great job for this task</p>
                                                <p class="message-item-date">14:25 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Colleen Hurst</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">13:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Fiona Green</p>
                                                <p class="message-item-msg">Nice to meet you</p>
                                                <p class="message-item-date">15:45 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Donna Snider</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">15:45 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Garrett Winters</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">15:45 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Herrod Chandler</p>
                                                <p class="message-item-msg">Hello! I'm available for this job</p>
                                                <p class="message-item-date">15:45 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Jena Gaines</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">15:45 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Airi Satou</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">15:45 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Brielle Williamson</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">15:45 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Jena Gaines</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">16:30 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="message-item">
                                                <p class="message-item-user">Airi Satou</p>
                                                <p class="message-item-msg">I have a new project for you</p>
                                                <p class="message-item-date">18:55 AM</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
                            </div> -->
                            <!-- end card-->
                        <!-- </div> -->

                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-crown"></i> Set power</h3>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                     
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>                                                 
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Họ và tên</th>
                                                    <th>Chức vụ</th>
                                                    <th>Quản lý sản phẩm</th>
                                                    <th>Quản lý user</th>
                                                    <th>Thêm sản phẩm</th>
                                                    <th>Quản lý đơn hàng</th>
                                                    <th>Thống kê</th>
                                                    <th>Thêm users</th>
                                                    <th>Set quyền</th>
                                                    <th>Confirm</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                            <?php 
                                                $us="SELECT * FROM tai_khoan WHERE power='nhan vien' or power='admin'";
                                                $quer=mysqli_query($con,$us);
                                                $idquyen=$_SESSION['idquyen'];
                                                
                                                
                                                while($rows=mysqli_fetch_array($quer)){
                                                    if($rows['status']!='xoa'){
                                            ?>
                                            <td><?php echo $rows['ID']; ?></td>
                                            <td><?php echo $rows['username']; ?></td>
                                            <td><?php echo $rows['hoten']; ?></td>
                                            <td><?php echo $rows['power']; ?></td>
                                            <form method='POST' action="xulysetquyen.php?id=<?php echo $rows['ID']; ?>" >
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqla="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $querya=mysqli_query($con,$sqla);
                                                    while($ro=mysqli_fetch_array($querya)){
                                                        if($ro[1]==1){
                                                            echo "<input type='checkbox' name='quyen1' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen1'>";
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqlb="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $queryb=mysqli_query($con,$sqlb);
                                                    while($ro=mysqli_fetch_array($queryb)){
                                                        if($ro[2]==1){
                                                            echo "<input type='checkbox' name='quyen2' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen2'>";
                                                        }
                                                    }
                                                
                                                
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqlc="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $queryc=mysqli_query($con,$sqlc);
                                                    while($ro=mysqli_fetch_array($queryc)){
                                                        if($ro[3]==1){
                                                            echo "<input type='checkbox' name='quyen3' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen3'>";
                                                        }
                                                    }    
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqld="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $queryd=mysqli_query($con,$sqld);
                                                    while($ro=mysqli_fetch_array($queryd)){
                                                        if($ro[4]==1){
                                                            echo "<input type='checkbox' name='quyen4' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen4'>";
                                                        }
                                                    }
                                                
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqle="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $querye=mysqli_query($con,$sqle);
                                                    while($ro=mysqli_fetch_array($querye)){
                                                        if($ro[5]==1){
                                                            echo "<input type='checkbox' name='quyen5' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen5'>";
                                                        }
                                                    }
                                                
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqlf="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $queryf=mysqli_query($con,$sqlf);
                                                    while($ro=mysqli_fetch_array($queryf)){
                                                        if($ro[6]==1){
                                                            echo "<input type='checkbox' name='quyen6' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen6'>";
                                                        }
                                                    }
                                                
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $d=$rows['ID'];
                                                    $sqlg="SELECT * FROM quyenhan WHERE ma_chucvu='$d'";
                                                    $queryg=mysqli_query($con,$sqlg);
                                                    while($ro=mysqli_fetch_array($queryg)){
                                                        if($ro[7]==1){
                                                            echo "<input type='checkbox' name='quyen7' value='check' checked>";
                                                        }else{
                                                            echo "<input type='checkbox' name='quyen7'>";
                                                        }
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <input type='submit' name='submit' value='Set' onclick="return confirm('Are you sure');">
                                            </td>
                                            </tr>
                                            </form>
                                            <?php } } ?>
                                            
                                            
                                        </table>
                                        
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                    <!-- </div> -->
                    <!-- end row-->

                <!-- </div> -->
                <!-- END container-fluid -->

            <!-- </div> -->
            <!-- END content -->

        <!-- </div> -->
        <!-- END content-page -->

        <footer class="footer">
            <span class="text-right">                
                Copyright <a target="_blank" href="#">Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>

        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/admin.js"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Counter-Up-->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="assets/data/data_datatables.js"></script>

    <!-- Charts data -->
    <script src="assets/data/data_charts_dashboard.js"></script>
    
    <!-- END Java Script for this page -->

</body>

</html>
