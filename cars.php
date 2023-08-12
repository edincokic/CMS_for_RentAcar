<?php 

include("functions/functions.php");
include("includes/header.php");


?>




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
                                            $sql = "SELECT * FROM cars ORDER BY id DESC ";
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
                    											<div class="x_car_offer_price_inner">';
                    											if (!$row["discount"]>0){
                                                                  echo '<h6>&nbsp;</h6>';  
                                                                }
                    											 else{
                    											     
                    											     echo '<h6><i class="fa fa-tag"></i> &nbsp;'. $row["discount"].'% sniženje</h6>';
                    											 }
                    											 echo'
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
                    												<li><a href="#">Rezerviši</a>
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


<?php include("includes/footer.php"); ?>