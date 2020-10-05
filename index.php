<!DOCTYPE html>
<html>
	<head>
		<title>main project</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/main project/car images/style2.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include 'menu.php'; ?>
		<?php
		if(isset($_POST['formsubmit'])){
			$carname=$_POST['carname'];
			$con = mysqli_connect('localhost','newuser','1234','mainprojectdata');
			$select=mysqli_query($con,"select * from cardata where carname='$carname' ");
			$data=mysqli_fetch_array($select);
			echo($data['caryear']);
		}
		?>
		<!------COURASOL START-----
		-------------
		---------->
		<style type="text/css" media="screen">
			
			#home-form{
				position: absolute;
				width: 350px;
				height: 350px;
				border-radius: 5px;
				top: 25%;
		left: 8%;
		background-color: rgba(255,255,255,0.5);
				}
			.find {
				margin-left: 10px;
		-		padding-left: 0px;
				font-size: 40px;
					text-shadow: 1px 1px 3px black;
				
			}
			#year_to{
				float: left;
			width:47%;
			height: 40px;
			padding-left: 10px;
		margin-left: 6px;
		margin-top: 10px;
			}
			#year_from{
				float: left;
				width: 47%;
				height: 40px;
		padding-left: 15px;
		margin-left: 10px;
		margin-top: 10px;
			}
		.dropdown1{
		padding-left: 15px;
		margin-top: 70px;
		margin-right: 20px;
		width: 21em;
		}
		.dropdown2{
		padding-left: 15px;
		margin-top:20px;
		margin-right: px;
		width: 21em;
			}
		.button1{
			padding-left: 20px;
		margin-top: 20px;
		margin-left: 20px;
		width: 19em;
		height: 50px;
		
		}
		
		#ser-hover:hover{
			box-shadow: 0 0 20px 0 rgba(0, 0, 0,0.3);
			transform: translateY(-20px);
		}
         
         #logo{
                margin-left: 120px;
                margin-top: 40px;

         }
         #tel_num{
         	margin-left: 120px;
                margin-top: 40px;

         }
          #mail{
                margin-left: 120px;
                margin-top: 40px;

         }
          #address{
                margin-left: 120px;
                margin-top: 40px;
         
         }
		
	
		</style>
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>

				</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="c6.jpg" alt="car image" width="100%" height="500">
					<div class="carousel-caption">
						<h3></h3>
						<p></p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="c9.jpg" alt="car image" width="100%" height="500">
					<div class="carousel-caption">
						<h3></h3>
						<p></p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="c2.jpg" alt="car image" width="100%" height="500">
					<div class="carousel-caption">
						<h3></h3>
						<p></p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<!------carousal finished---
		---------
		------>
		<!---form-------->
		<div id ="home-form">
			<form action="index_submit" method="get" accept-charset="utf-8">
				<div class = "find">FIND YOUR CAR</div>
				<input type="number" id="year_from" name="year-from" placeholder="Year From">
				<input type="number" name="year-to" id="year_to" placeholder="Year To">
				<div class="dropdown1">
					<input class="btn btn-light dropdown-toggle button-outline-primary form-control" type="text" id="dropdownMenu2"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Make Selection">
					
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<input class="dropdown-item" type="text">Audi</input>
						<input class="dropdown-item" type="text">porse</input>
						<input class="dropdown-item" type="text">bmv</input>
					</div>
				</div>
				<div class="dropdown2">
					<input class="btn btn-light dropdown-toggle button-outline-primary form-control" type="text" id="dropdownMenu2"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Model Selection">
					
					<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						<input class="dropdown-item" type="text">Audi</input>
						<input class="dropdown-item" type="text">bmw</input>
						<input class="dropdown-item" type="text">porse</input>
					</div>
				</div>
				<button type="button" class="btn btn-outline-dark button1">Search</button>
				
			</form>
		</div>
		<!------ABOUT US PART START--
		---------
		------->
		
		<section class="my-5">
			<div class="py-5">
				<h1 class="text-center">About Us</h1>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="c5.jpg" class="img-fluid" id="aboutimg">
						
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h3>Our MISSION</h3>
						<p>To create a website where viewers can see vintage cars informatiom before purchasing or just for knowledge and excitment for cars.<br>
						VintageCars.com brings buyers and sellers together to easily and safely buy, sell and enjoy classic and collector vehicles. It is a vibrant marketplace built on a technology platform that continues to evolve to meet the needs of all generations of car lovers with innovative solutions, state of the art technology, first-class customer service and a passion for automobiles that powers the company toward continued growth.</p>
						<a href="aboutus.php" class="btn btn-dark">More Info</a>
					</div>
				</div>
			</div>
		</section>
		<!------ABOUT US PART FINISHED--
		--------
		------->
		<!---our services part starts---
		--------
		-------->
		<section class="my-4">
			<div class="py-4">
				<h1 class="text-center">Our Services</h1>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12" id="ser-hover">
						<div class="card">
							<img class="card-img-top" src="cc1.png" alt="Card image">
							<div class="card-body">
								<h2 class="card-title">Jaguar E-Type</h2>
								<h3 class="font-weight-bold">$142,500</h3>
								<a href="car1.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12"id="ser-hover">
						<div class="card">
							<img class="card-img-top" src="cc2.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Chevrolet Corvette</h2>
								<h3 class="font-weight-bold">$159,900</h3>
								<a href="car2.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12" id="ser-hover">
						<div class="card">
							<img class="card-img-top" src="cc3.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Lamborghini Miura</h2>
								<h3 class="card-text">$1,095,000</h3>
								<a href="car3.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
		</section>
		<!----our services part finished--
		-------------------
		------------------->
		<!-----MORE CARS PART STARTS---
		-----------
		--------->
		<section class="my-4">
			<div class="py-4">
				<h1 class="text-center">More Cars</h1>
			</div>
			<div class="container-fluid">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc4.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Porsche 911</h2>
								<h3 class="font-weight-bold">$99,000,000</h3>
								<a href="car4.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc5.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Rolls-Royce Dawn Drophead</h2>
								<h3 class="font-weight-bold">$99,950</h3>
								<a href="car5.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc6.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Mercedes SL 300 Gullwing</h2>
								<h3 class="font-weight-bold">$1,459,000</h3>
								<a href="car6.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					
				<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc7.jpg" alt="Card image">
							<div class="card-body">
								<h2 class="card-title">Ferrari 250 GTO</h2>
								<h3 class="font-weight-bold">$48,400,000</h3>
								<a href="car7.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc8.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Aston Martin DB4</h2>
								<h3 class="font-weight-bold">$1,325,000</h3>
								<a href="car8.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc9.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Ford Model T</h2>
								<h3 class="font-weight-bold">$39,900</h3>
								<a href="car9.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc10.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">Ferrari 308 GTS</h2>
								<h3 class="font-weight-bold">$99,000</h3>
								<a href="car10.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc11.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">DeTomaso Pantera</h2>
								<h3 class="font-weight-bold">$97,950</h3>
								<a href="car11.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="cc12.jpg" alt="Card image" height="300px">
							<div class="card-body">
								<h2 class="card-title">McLaren F1</h2>
								<h3 class="font-weight-bold">$15,600,000</h3>
								<a href="car12.php" class="btn btn-dark">More Details</a>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
		</section>
		<!-----MORE CARS PART FINISHED----
		------------
		---------->
		<!-----SIGN UP PART STARTS----
		------------
		---------->
		<section class="my-4">
			<div class="py-4">
				<h1 class="text-center">Contact Us</h1>
				<div class="w-50 m-auto">
					<form action="userinfo.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" autocomplete="off" class="form-control-range">
							
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="text" name="email" autocomplete="off" class="form-control-range">
							
						</div>
						<div class="form-group">
							<label>Mobile No.</label>
							<input type="text" name="mobile" autocomplete="off" class="form-control-range">
							
						</div>
						<div class="form-group">
							<label>Comments</label>
							<textarea class="form-control" name="comments"></textarea>
							
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
		</section>
		<!-----SIGN UP PART FINISHED----
		------------
		---------->
		<div class=" w100 bg-dark text-white">
			

			
			<!-- Logo & Contact Block -->
				<div>
					<div>
						<a href="index.php">
							<img src="logo1.png" alt="VintageCars.com" id="logo" width="200px"
							height="120px">
						</a>
					</div>
				
				   <div>
						<a href="tel:9910086563" class="text-white">
							<div id="tel_num">9910086563</div></a>
					</div>
					
					<div>
						<a href="mailto:info@classiccars.com">
							<div id="mail" class="text-white">Info@vintagecars.com</div></a>
					</div>
					
					<div>
						<a href="https://goo.gl/maps/EjW3iWinGSw" target="_blank"><div id="address" class="text-white">A-35<br>Gali no-13,Mahendra Park<br>Near Adarsh Nagar Metro</div></a>
						<br><br>
					</div>
				
				<!-- Footer Links Block -->
			
				<div>
					<h3>Information</h3>
					
					<div>
						
						
						<div><a  href="aboutus.php">About ClassicCars.com</a></div>
						
						<div><a href="contact_us.php"><div>Contact Us</div></a></div>

						<div><a href="our_services.php"><div>Our Services</div></a></div>
						
					</div>
				</div>
			


		</div>

	

	

        <!----bootsrap part start-------
		-----------
		------>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<!----bootsrap part finished-------
		-----------
		------>
	</body>
</html>