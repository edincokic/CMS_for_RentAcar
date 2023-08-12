<?php include('functions/functions.php'); ?>
<?php include("includes/header.php"); ?>
	<!-- hs Navigation End -->
	<!-- hs Slider Start -->
	<div class="slider-area float_left">
		<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-captions caption-1">
						<div class="container">
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="content">
										<h2 data-animation="animated fadeInLeft">Vrhunska ponuda<br>
vozila na jednom mjestu</h2>
										<p data-animation="animated bounceInUp">Pronađite idealno vozilo za Vas u samo par koraka.
										</p>
										<div class="hs_effect_btn">
											<ul>
												<li data-animation="animated flipInX"><a href="cars.php">vozila <i class="fa fa-arrow-right"></i></a>
												</li>
												<li data-animation="animated flipInX"><a href="contact.php">kontakt <i class="fa fa-arrow-right"></i></a>
												</li>
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span>
					</li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
					</li>
					<li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
					</li>
				</ol>
				<div class="carousel-nevigation">
					<a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">	<i class="fa fa-angle-left"></i>
					</a>
					<a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i>
					</a>
				</div>-->
			</div>
		</div>
	</div>
	<!-- xs Slider bottom title Start -->
	<div class="x_slider_bottom_title_main_wrapper">
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-phone-call"></i>
			<h3><a href="#">24 / 7 PODRŠKA</a></h3>
			<p>Za sve dodatne informacije<br>stojimo Vam na raspolaganju 24/7.</p>
		</div>

		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-checklist"></i>
			<h3><a href="#">REZERVACIJA ONLINE</a></h3>
			<p>Brza rezervacija popunjavam forme<br> ili nas jednostavno pozovite.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-car-trip"></i>
			<h3><a href="#">ŠIROK SPEKTAR</a></h3>
			<p>Širok spektar automobila kako bismo<br> zadovoljili svakog klijenta.</p>
		</div>
		<div class="x_slider_bottom_box_wrapper">	<i class="flaticon-list"></i>
			<h3><a href="#">USLOVI NAJMA</a></h3>
			<p>Detaljne uslove najma možete<br> pogledati ovdje.</p>
		</div>
	</div>
	<!-- xs Slider bottom title End -->
	<!-- xs offer car tabs Start -->
	<div class="x_offer_car_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper float_left">
						<h4>RENT A CAR</h4>
						<h3>IZABERITE VOZILO</h3>
						<p>Ispod se nalazi lista dostupnih vozila za rentanje, za više informacija kontaktirajte nas putem<br> našeg kontakt telefona ili kontakt forme.</p>
					</div>
				</div>
				<div class="col-md-12">
					<!--<div class="x_offer_tabs_wrapper">
						<ul class="nav nav-tabs">
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home"> Best Offers</a>
							</li>
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#menu1"> ECONOMIC CARS</a>
							</li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2"> premium cars</a>
							</li>
						</ul>
					</div>-->
					<div class="tab-content">
						<div id="home" class="tab-pane active">
							<div class="row">
								<!-- car -->
								
								 <?php
                                            $sql = "SELECT * FROM cars ORDER BY id DESC LIMIT 8";
                                            $result = $db->query($sql);
                                            
                                            
                                            if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {
                                                  
                                                echo '<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    									<div class="x_car_offer_main_boxes_wrapper float_left">
                    										
                    										<div class="x_car_offer_img float_left">
                    											<img src="uploads/'. $row["image"].'" alt="img">
                    										</div>
                    										<div class="x_car_offer_price float_left">
                    											<div class="x_car_offer_price_inner">
                    											<h6><i class="fa fa-tag"></i> &nbsp;'. $row["discount"].'% sniženje</h6>
                    												<h3>'. $row["price"].'KM</h3>
                    												<p><span></span>
                    													<br>/ dan</p>
                    											</div>
                    										</div>
                    										<div class="x_car_offer_heading float_left">
                    											<h2><a href="#">'. $row["name"].'</a></h2>
                    											<p>'. $row["short_desc"].'</p>
                    										</div>
                    										
                    										<div class="x_car_offer_bottom_btn float_left">
                    											<ul>
                    												<li><a href="reservation.php?id='.$row['id'].'">Rezerviši</a>
                    												</li>
                    												<li><a href="single.php?id='.$row['id'].'">Detalji</a>
                    												</li>
                    											</ul>
                    										</div>
                    									</div>
                    								</div>'; 
                                             
                                              }
                                            } 
                                            $db->close();
                                            ?>
								
								
								<div class="col-md-12">
									<div class="x_tabs_botton_wrapper float_left">
										<ul>
											<li><a href="cars.php">Sva vozila <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- xs offer car tabs End -->

	<!-- x counter Wrapper Start -->
	<div class="x_counter_main_wrapper">
		<div class="x_counter_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_counter_car_heading_wrapper float_left">
						<h4>PROCES REZERVACIJE</h4>
						<h3>KAKO REZERVISATI?</h3>
						<p>Proces rezervacije vozila te iznajmljivanja istog je jednostavan.</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper">
						<div class="x_icon"> <i class="flaticon-sedan-car-front"></i>
						</div>
						<h5><span>1.</span> <a href="#"> odaberite vozilo</a></h5>
						<p>Izaberite neko od ponuđenih vozila.</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper">
						<div class="x_icon"> <i class="flaticon-calendar"></i>
						</div>
						<h5><span>2.</span> <a href="#">popunite formular</a></h5>
						<p>Popunite formular sa svojim podacima.</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper">
						<div class="x_icon"> <i class="flaticon-multiple-users-silhouette"></i>
						</div>
						<h5><span>3.</span> <a href="#">potvrdite rezervaciju</a></h5>
						<p>Kontaktirat ćemo Vas kako bismo potvrdili rezervaciju.</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
						<div class="x_icon"> <i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i>
						</div>
						<h5><span>4.</span> <a href="#">uživajte u vožnji</a></h5>
						<p>I to je to. Uživajte u vožnji te sretno u putu!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x counter Wrapper End -->
	<!-- x booking Wrapper Start -->
	<!--<div class="x_booking_main_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="x_book_logo_wrapper float_left">
						<img src="images/white_logo.png" alt="logo">
					</div>
				</div>
				<div class="col-md-6">
					<div class="x_book_logo_heading_wrapper float_left">
						<h3>Book on AutoRez Now!</h3>
						<p>The Most User Centric Rental Theme on the Market.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="x_book_logo_btn float_left">
						<ul>
							<li><a href="#">See All Cars <i class="fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- x booking Wrapper End -->

	<!-- btc team Wrapper Start -->
	<div class="x_why_main_wrapper">
		<div class="x_why_img_overlay"></div>
		<div class="container">
			<div class="x_why_left_main_wrapper">
				<img src="images/w1.png" alt="car_img">
			</div>
			<div class="x_why_right_main_wrapper">
				<h3>Zašto odabrati nas?</h3>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, rem a quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate cursus a sit amt mauris. Morbi accumsan ipsum velit.
					<br>
					<br>This is Photoshop's version of Lorem Ipsum. Proin gravida n vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum tor. This is Photoshop's version of Lorem Ipsum.</p>
				<ul>
					<li><a href="#">pročitajte više <i class="fa fa-arrow-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- btc team Wrapper End -->
	<!--js Start-->

	<?php include("includes/footer.php"); ?>
