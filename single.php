<?php include("functions/functions.php"); 
include("includes/header.php");
?>

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
						<h1><?php echo $row["name"]; ?></h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li><a href="#">Cars</a>  <i class="fa fa-angle-right"></i>
								</li>
								<li><?php echo $row["name"]; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- btc tittle Wrapper End -->
	<!-- x tittle num Wrapper Start -->
	<div class="x_title_num_mian_Wrapper float_left">
		<div class="container">
			<div class="x_title_inner_num_wrapper float_left">
				<div class="x_title_num_heading">
					<h3>Izaberite vozilo</h3>
					<p>Pratite korake</p>
				</div>
				<div class="x_title_num_heading_cont">
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
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
						<div class="x_icon_num x_icon_num3">
							<p>3</p>
						</div>
						<h5>Rezervacija</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num3">
							<p>4</p>
						</div>
						<h5>Potvrda rezervacije</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
						<div class="x_icon_num x_icon_num3">
							<p>5</p>
						</div>
						<h5>Gotovo!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x tittle num Wrapper End -->
	<!-- x car book sidebar section Wrapper Start -->
	<div class="x_car_book_sider_main_Wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="x_car_detail_main_wrapper float_left">
								<div class="lr_bc_slider_first_wrapper">
									<div class="owl-carousel owl-theme">
										<div class="item">
											<div class="lr_bc_slider_img_wrapper">
												<img src="uploads/<?php echo $row["image"]; ?>" alt="fresh_food_img">
											</div>
										</div>
										<div class="item">
											<div class="lr_bc_slider_img_wrapper">
												<img src="images/bc3.jpg" alt="fresh_food_img">
											</div>
										</div>
										<div class="item">
											<div class="lr_bc_slider_img_wrapper">
												<img src="images/bc4.jpg" alt="fresh_food_img">
											</div>
										</div>
									</div>
								</div>
								<div class="x_car_detail_slider_bottom_cont float_left">
									<div class="x_car_detail_slider_bottom_cont_left">
										<h3><?php echo $row["name"]; ?></h3>
										
									</div>
									<div class="x_car_detail_slider_bottom_cont_right">
										<h3><?php echo $row["price"]; ?></h3>
										<p><span>KM</span> 
											<br>/ dan</p>
									</div>
									<div class="x_car_detail_slider_bottom_cont_center float_left">
										<p><?php echo $row["short_desc"]; ?>
											<br>
											<br><?php echo $row["description"]; ?></p>
									</div>
									
									<div class="x_avanticar_btn float_left">
										<ul>
											<li><a href="reservation.php?id=<?php echo $row["id"]; ?>">Rezerviši <i class="fa fa-arrow-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="x_ln_car_heading_wrapper x_ln_car_heading_wrappercsss float_left">
									<h3>Pregledajte još</h3>
								</div>
								<div class="btc_ln_slider_wrapper btc_ln_slider_wrapper_cs">
									<div class="owl-carousel owl-theme">
									    <?php
                                            $sql = "SELECT * FROM cars ORDER BY id DESC LIMIT 9";
                                            $result = $db->query($sql);
                                            
                                            
                                            if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {
                                                  
                                                echo '<div class="item">
                    									<div class="x_car_offer_main_boxes_wrapper float_left margintop_zero">
                    										<div class="x_car_offer_starts float_left">
                    										</div>
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
										
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x car book sidebar section Wrapper End -->

	<?php 
	
        }
    } 
    $db->close();  
    
    ?>
	

<?php include("includes/footer.php"); ?>