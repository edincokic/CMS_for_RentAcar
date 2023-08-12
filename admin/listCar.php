<?php
include('../functions/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Morate se prijaviti";
	header('location: login.php');
}

$sql = "SELECT * FROM cars";
$result = $db->query($sql);





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
                    
                    <li>
                        <a href="index.php">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Kontrolna ploča</span>
                        </a>
                    </li>
                    <li class="active">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Lista</strong> vozila</h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="addCar.php">
                                        <button class="btn btn-md btn-primary">Dodaj</button>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Slika</th>
                                            <th>Naziv</th>
                                            <th>Kratak opis</th>
                                            <th>Cijena</th>
                                            <th>Akcija</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                      <?php
                                            
                                            
                                            
                                            if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {
                                                  
                                              
                                                echo"<tr>
                                                                    <td>". $row["id"]."</td>
                                                                    <td><img style='width:100px;height:50px;object-fit: cover;' src='../uploads/".$row["image"]."'></td>
                                                                    <td>". $row["name"]."</td>
                                                                    <td>". $row["short_desc"]."</td>
                                                                    <td>". $row["price"]."KM</td>
                                                                    <td>
                                                                        
                                                                        <a href='../single.php?id=".$row["id"]."' target='_blank' data-toggle='tooltip' data-placement='top' title='Pogledaj'>
                                                                        <button type='button' class='btn bg-green btn-circle waves-effect waves-circle waves-float'>
                                                                            <i class='material-icons'>remove_red_eye</i>
                                                                        </button>
                                                                        </a>
                                                                    
                                                                        <a href='editCar.php?id=".$row["id"]."' data-toggle='tooltip' data-placement='top' title='Uredi'>
                                                                        <button class='btn bg-blue btn-circle waves-effect waves-circle waves-float'>
                                                                            <i class='material-icons'>mode_edit</i>
                                                                        </button>
                                                                        </a>
                                                                    
                                                                        <a href='#' data-toggle='tooltip' data-placement='top' title='Obriši'>
                                                                        <button data-toggle='modal'
                                        data-target='#removeCarModal".$row["id"]."' type='button' class='btn bg-red btn-circle waves-effect waves-circle waves-float'>
                                                                            <i class='material-icons'>clear</i>
                                                                        </button>
                                                                        </a>
                                                                        
                                                                        
                                                                        
                                                                    </td>
                                                                  </tr>";
                                             ?>
                                             
                                             <div class="modal fade" id="removeCarModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Obriši vozilo
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Da li ste sigurni da želite da obrišete vozilo?</p>
                                                </div>
                                                <div class="modal-footer">
                                                   
                                                    <a href="deleteCar.php?id=<?php echo $row['id']; ?>">
                                                    <button type="button"
                                                        class="btn btn-info waves-effect">DA</button></a>
                                                   
                                                    <button type="button" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">NE</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            <?php  }
                                            } 
                                            $db->close();
                                            ?>
                                  
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
  
                                    
    
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    <!-- Plugins Js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/table.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/charts/jquery-knob.js"></script>
    <script src="assets/js/pages/sparkline/sparkline-data.js"></script>
    <script src="assets/js/pages/medias/carousel.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>