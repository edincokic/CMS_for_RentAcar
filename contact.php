<?php include("includes/header.php"); ?>
	<!-- hs Navigation End -->
	<!-- btc tittle Wrapper Start -->
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>Kontakt</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="index.php">Naslovna</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li>Kontakt</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- xs offer car tabs Start -->
	<div class="x_contact_title_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
						<h4>budimo u kontaktu</h4>
						<h3>Kontakt informacije</h3>
						<p></p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="fa fa-map-marker"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">Adresa</a></h3>
							<p>Grad Srebrenik, 75350 Srebrenik</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="flaticon-phone-call"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">Telefon</a></h3>
							<p>+387 35 645 820</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
					<div class="x_contact_title_icon_cont_main_box">
						<div class="x_contact_title_icon">	<i class="flaticon-mail-send"></i>
						</div>
						<div class="x_contact_title_icon_cont">
							<h3><a href="#">Email</a></h3>
							<p><a href="#">info@rentacarhotelpark.ba</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- map section End -->
	<!-- xs offer car tabs Start -->
	<!--<div class="x_contact_title_main_wrapper float_left padding_tb_100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
						<h4>get in touch</h4>
						<h3>Leave A Message</h3>
						<p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
							<br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>
					</div>
				</div>
				<div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="contect_form1">
						<input type="text" placeholder="First Name *">
					</div>
				</div>
				<div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="contect_form2">
						<input type="text" placeholder="Last Name *">
					</div>
				</div>
				<div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="contect_form2">
						<input type="email" placeholder="Email *">
					</div>
				</div>
				<div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="contect_form2">
						<input type="text" placeholder="Phone *">
					</div>
				</div>
				<div class="col-xl-10 offset-xl-1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="contect_form4">
						<textarea rows="4" placeholder="Write Comment"></textarea>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="contect_btn contect_btn_contact">
						<ul>
							<li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	
<!-- map section start -->
	<div class="map_main_wrapper">
		<div id="map"></div>
	</div>
<!-- custom js-->
	<script>
		function initMap() {
		            var uluru = {
		                lat: 44.7041667,
		                lng: 18.4914224
		            };
		            var map = new google.maps.Map(document.getElementById('map'), {
		                zoom: 17,
		                scrollwheel: false,
		                center: uluru
		            });
		            var marker = new google.maps.Marker({
		                position: uluru,
		                map: map
		            });
		        }
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCly9ivKUe9oHTb7xAIphBU5yrAD340_pg&callback=initMap">
	</script>
	
	<?php include("includes/footer.php"); ?>