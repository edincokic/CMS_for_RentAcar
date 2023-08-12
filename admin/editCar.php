<?php
include('../functions/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Morate se prijaviti";
	header('location: login.php');
}

    if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM cars WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$short_desc = $n['short_desc'];
			$description = $n['description'];
			$image = $n['image'];
			$price = $n['price'];
			$discount = $n['discount'];
		}
	}
	
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$short_desc = $_POST['short_desc'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];

	mysqli_query($db, "UPDATE cars SET name='$name', short_desc='$short_desc' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: listCar.php');
}

    if(isset($_POST["submit"])){
        
        $coverFile = $_FILES['image']['name'];
        $ctmp_dir = $_FILES['image']['tmp_name'];
        $coverSize = $_FILES['image']['size'];
        
        if(empty($coverFile)){
         $error[] = "Izaberi sliku!";
        }
        else
        {
         $upload_dir = '../uploads/'; // upload directory
        
         $imgExt = strtolower(pathinfo($coverFile,PATHINFO_EXTENSION)); // get image extension
        
         // valid image extensions
         $valid_extensions = array('png', 'jpg', 'jpeg'); // valid extensions
        
         // rename uploading image
         $image = rand(1000,1000000).".".$imgExt;
        
         // allow valid image file formats
         if(in_array($imgExt, $valid_extensions)){
          // Check file size '5MB'
          if($coverSize < 5000000)    {
           move_uploaded_file($ctmp_dir,$upload_dir.$image);
          }
          else{
           $error[] = "Slika je previse velika! Max 5MB";
          }
         }
         else{
          $error[] = "Dozvoljeni formati su PNG, JPG i JPEG!";
         }
        }
               
        $sql = "INSERT INTO cars (name, short_desc, description, price, discount, image)VALUES('".$_POST["name"]."','".$_POST["short_desc"]."','".$_POST["description"]."','".$_POST["price"]."','".$_POST["discount"]."','".$image."')";
            
        if (mysqli_query($db, $sql)) {
           echo "Vozilo je unešeno u bazu.";
        } else {
           echo "Greška: " . $sql . "" . mysqli_error($db);
        }
        $db->close();
        
        }
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Admin Panel</title>
   <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Colorpicker Css -->
    <link href="assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <!-- Multi Select Css -->
    <link href="assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/form.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
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
                                <strong>Dodaj</strong> vozilo</h2>
                            
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" class="test" method="POST" action="" enctype="multipart/form-data">
                                <h2 class="card-inside-title">1. Osnovne informacije</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Naziv" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="short_desc" id="short_desc"
                                                        placeholder="Kratak opis" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize" name="description" placeholder="Detaljan opis" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <h2 class="card-inside-title">2. Fotografija</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Izaberi fotografije</span>
                                                <input type="file" multiple="" name="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate valid" name="image" type="text" placeholder="Izaberi jednu ili više fotografija">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="card-inside-title">3. Cijena</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="price" placeholder="Cijena" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="discount" placeholder="Sniženje">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                        <div class="col-sm-12">
                                        <button type="submit" name="update" class="btn btn-primary m-t-15 waves-effect">DODAJ</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Plugins Js -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/form.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
</body>