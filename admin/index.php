<?php
include('../functions/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Morate se prijaviti";
	header('location: login.php');
}




$result = $db->query("SELECT COUNT(*) FROM cars");
$row = $result->fetch_row();

$result2 = $db->query("SELECT COUNT(*) FROM reservations");
$row2 = $result2->fetch_row();




?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Admin Panel</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/styles/all-themes.css" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index.php">
                    
                    <span class="logo-name">Admin Panel</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <img src="assets/images/img_avatar3.png" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <?php  if (isset($_SESSION['user'])) : ?>
                                            <i class="material-icons">person</i><?php echo $_SESSION['user']['username']; ?>
                                            <?php endif ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.php?logout='1'">
                                            <i class="material-icons">power_settings_new</i>Odjava
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="assets/images/img_avatar3.png" class="img-circle user-img-circle"
                                    alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <?php  if (isset($_SESSION['user'])) : ?>
                            <div class="sidebar-userpic-name"> <?php echo $_SESSION['user']['username']; ?> </div>
                            <div class="profile-usertitle-job "><?php echo ucfirst($_SESSION['user']['user_type']); ?> </div>
                            <?php endif ?>
                        </div>
                    </li>
                    
                    <li class="active">
                        <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Kontrolna ploča</span>
                        </a>
                    </li>
                    <li>
                        <a href="listCar.php">
                            <i class="fas fa-car"></i>
                            <span>Lista vozila</span>
                        </a>
                    </li>
                    <li>
                        <a href="listReservations.php">
                            <i class="fas fa-users"></i>
                            <span>Lista rezervacija</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </div>
    <section class="content">
        <div class="container-fluid">
            
            
            <div class="row clearfix">
                <!-- Task Info -->
                
                
                <div class="col-lg-6 col-sm-6">
                    <div class="counter-box text-center white" style="min-height: auto">
                        <div class="text font-17 m-b-5">Ukupno vozila</div>
                        <h3 class="m-b-10"><?php echo $row[0]; ?></h3>
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-6">
                    <div class="counter-box text-center white" style="min-height: auto">
                        <div class="text font-17 m-b-5">Ukupno rezervacija</div>
                        <h3 class="m-b-10"><?php echo $row2[0]; ?></h3>
                        
                    </div>
                </div>
                
            
                
                
                
                
            </div>
        </div>
    </section>
    <!-- Plugins Js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/charts/jquery-knob.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <script src="assets/js/pages/medias/carousel.js"></script>
</body>