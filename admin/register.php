<?php include('../functions/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Admin Panel</title>
	<!-- Favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="assets/css/app.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/pages/extra_pages.css" rel="stylesheet" />
</head>

<body class="login-page">
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="register.php">
				    
					
					<span class="login100-form-title p-b-34 p-t-27">
						Registracija
					</span>
					<div class="row">
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Unesite korisničko ime">
								<input class="input100" type="text" name="username" placeholder="Korisničko ime" value="<?php echo $username; ?>" required>
								<i class="material-icons focus-input1001">person</i>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Unesite email">
								<input class="input100" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required>
								<i class="material-icons focus-input1001">person</i>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Unesite lozinku">
								<input class="input100" type="password" name="password_1" placeholder="Lozinka" required>
								<i class="material-icons focus-input1001">person</i>
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Unesite lozinku ponovo">
								<input class="input100" type="password" name="password_2" placeholder="Potvrdite lozinku" required>
								<i class="material-icons focus-input1001">person</i>
							</div>
						</div>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="register_btn">
							Registracija
						</button>
					</div>
					<?php echo display_error(); ?>
					<div class="text-center p-t-50">
						<a class="txt1" href="login.php">
							Već imate kreiran račun?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="assets/js/app.min.js"></script>
	<!-- Extra page Js -->
	<script src="assets/js/pages/examples/pages.js"></script>
</body>

</html>