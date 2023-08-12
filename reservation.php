<?php include("functions/functions.php"); 
include("includes/header.php");

    if(isset($_POST["submit"])){
        $sql = "INSERT INTO reservations (name,price,image,username,email,phone,days,message)VALUES('".$_POST["carname"]."','".$_POST["carprice"]."','".$_POST["carimg"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["days"]."','".$_POST["message"]."')";
            
        if (mysqli_query($db, $sql)) {
           echo '
           
           
           
           <div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>REZERVACIJA</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="index.php">Naslovna</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li><a href="cars.php">Automobili</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Rezervacija</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="x_title_num_mian_Wrapper float_left">
		<div class="container">
			<div class="x_title_inner_num_wrapper float_left">
				<div class="x_title_num_heading">
					<h3>Izaberite vozilo</h3>
					<p>Pratite korake</p>
				</div>
				<div class="x_title_num_heading_cont">
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num x_icon_num2">
							<p>1</p>
						</div>
						<h5>Vozilo</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper2">
						<div class="x_icon_num x_icon_num2">
							<p>2</p>
						</div>
						<h5>Detaljne informacije</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num2">
							<p>3</p>
						</div>
						<h5>Rezervacija</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num2">
							<p>4</p>
						</div>
						<h5>Potvrda rezervacije</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
						<div class="x_icon_num">
							<p>5</p>
						</div>
						<h5>Gotovo!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- btc tittle Wrapper End -->
	<!-- x tittle num Wrapper Start -->
	<div class="x_contact_title_main_wrapper float_left padding_tb_100" style="padding-top:0">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box" style="margin-top: 0;">
						<div class="x_contact_title_icon">	
						</div>
						<div class="x_contact_title_icon_cont">
						    <h3><a href="#">USPJEŠNO!</a></h3>
							
							<p>Rezervisali ste vozilo, očekujte uskoro poziv za potvrdu rezervacije. Hvala!</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
           
           
           
           ';
        } else {
           echo "Greška: " . $sql . "" . mysqli_error($db);
        }
        $db->close();
    }

?>

<style>.nice-select{
width: 100%;
    height: 50px;
    margin-top: 30px;
    padding-left: 20px;
    line-height: 50px;
    box-shadow: 0px 0 8px rgba(0, 0, 0, 0.1);
  
    font-size: inherit;
}

.nice-select .list{
width: 100%;
}

.x_contact_title_icon_cont_main_box:hover .btn-warning{
    background: #fff;
    color:#e4af1b;
}

.btn-warning{
    color: #fff;
    background: #e4af1b;
    border-color: #e4af1b;
    margin-top: 20px;
}

.btn-warning i{
    padding-left: 5px;
}

</style>

	<!-- btc tittle Wrapper Start -->
	

                                                  
    <?php 
    
    $sql = "SELECT * FROM cars WHERE id = '" . $_GET['id'] . "'";
    $result = $db->query($sql);
                                            
    if ($result->num_rows > 0) {
                                             
        while($row = $result->fetch_assoc()) {
                                                  
         
                                                
                                             
    ?>         
                    									
                                             
           
	
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>REZERVACIJA</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="index.php">Naslovna</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li><a href="cars.php">Automobili</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Rezervacija</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- x tittle num Wrapper Start -->
	<div class="x_contact_title_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	
						</div>
						<div class="x_contact_title_icon_cont">
						    <h3><a href="#">Izabrano vozilo</a></h3>
							<img style="display:block;height: 150px;
    width: 200px;
    object-fit: cover;" src="uploads/<?php echo $row["image"]; ?>">
    <h3><a href="#"><?php echo $row["name"]; ?></a></h3>
							<p><?php echo $row["price"]; ?>,00 KM / dan</p>
							<p>Opis: <?php echo $row["description"]; ?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	
						</div>
						<div class="x_contact_title_icon_cont">
						     <h3><a href="#">Popunite formular</a></h3>
						     <form method="POST" action="">
						         <input type="hidden" name="carname" value="<?php echo $row["name"]; ?>">
						         <input type="hidden" name="carprice" value="<?php echo $row["price"]; ?>">
						         <input type="hidden" name="carimg" value="<?php echo $row["image"]; ?>">
						    <div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="contect_form1">
						<input type="text" name="username" placeholder="Ime i prezime" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="contect_form2">
						<input type="email" name="email" placeholder="Email" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="contect_form2">
						<input type="text" name="phone" placeholder="Broj telefona" required>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" >
					<div class="contect_form2">
						<select  name="days" required>
                            <option selected disabled>Broj dana</option>
                            <option value="1 dan">1</option>
                            <option value="2 dana">2</option>
                            <option value="3 dana">3</option>
                            <option value="4 dana">4</option>
                            <option value="5 dana">5</option>
                            <option value="6 dana">6</option>
                            <option value="7 dana">7</option>
                            <option value="8 dana">8</option>
                            <option value="9 dana">9</option>
                            <option value="10 dana">10</option>
                            <option value="11 dana">11</option>
                            <option value="12 dana">12</option>
                            <option value="13 dana">13</option>
                            <option value="14 dana">14</option>
                          </select>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="contect_form4">
						<textarea rows="4" name="message" placeholder="Dodatne informacije"></textarea>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="contect_btn contect_btn_contact">
						<button class="btn btn-md btn-warning " type="submit" name="submit">Pošalji <i class="fa fa-arrow-right"></i></button>
					</div>
				</div></div></form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	

	<?php 
	
        }
    } 
    $db->close();  
    
    ?>
	

<?php include("includes/footer.php"); ?>