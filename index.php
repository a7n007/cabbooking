<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Rosario:400,400i,700,700i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-sm-4 py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.php">Taxi</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<?php
	
			if(isset($_SESSION['uname']))
			{

			$ph = $_SESSION['phone'];
			$uname = $_SESSION['uname'];
			$_SESSION['phone'] = $ph;
			echo '
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-4 mr-2 active"><a href="main.php">Book Now</a></li>
				<li class="mr-lg-4 mr-2 active"><a href="cancel.php">Cancel Now</a></li>
				<li class="mr-lg-4 mr-2"><a href="#about">About Us</a></li>
				<li class="mr-lg-4 mr-2"><a href="#services">Services</a></li>
				<li class="mr-lg-4 mr-2"><a href="#tarrifs">Tariffs</a></li>
				<li class="mr-lg-4 mr-2"><a href="feedback.php">Feed back</a></li>
				<li class="mr-lg-4 mr-2"><a href="#">';echo $uname; echo '</a></li>';
			echo '<li class="mr-lg-4 mr-2"><a href="logout.php">Log Out</a></li>
			</ul>';
			
			}
			else
			{echo '
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-4 mr-2"><a href="#about">About Us</a></li>
				<li class="mr-lg-4 mr-2"><a href="#services">Services</a></li>
				<li class="mr-lg-4 mr-2"><a href="#tarrifs">Tariffs</a></li>
				<li class="mr-lg-4 mr-2"><a href="login.php">Login to book</a></li>
				<li class="mr-lg-4 mr-2"><a href="signup.php">Sign up</a></li>
			</ul>';
			}
			?>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

	<!-- banner -->
	<section class="banner w3pvt-banner" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info">
					<div class="w3pvt-logo">
						<h2>Book Your Cab Now</h2>
						<h3>+91 999993299</h3>
						<p class="mt-3"> Always Available, Best Cabs, Safe Journey.</p>
						<br><br>
						<br><br>
						<br><br>
						<br><br>
						<br><br>
						<br><br>
						<br><br>
						<br><br>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //banner -->

	<!-- //what we do -->
	<section class="services py-5" id="services">
		<div class="container py-lg-5 py-3">
			<div class="row service-grid-grids text-center">
				<div class="col-lg-4 col-md-6 service-grid service-grid1">
					<div class="service-icon">
						<span class="fa fa-car"></span>
					</div>
					<h4 class="mt-3">Fast and Safe</h4>
					<p class="mt-3">We ensure that you reach your destination ,Safe and faster!!!</p>
				</div>
				<div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
					<div class="service-icon">
						<span class="fa fa-user"></span>
					</div>
					<h4 class="mt-3">Experienced Drivers</h4>
					<p class="mt-3">We generally recruit Experienced,skilled and trained drivers</p>
				</div>

				<div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
					<div class="service-icon">
						<span class="fa fa-paper-plane"></span>
					</div>
					<h4 class="mt-3">Online Booking</h4>
					<p class="mt-3">We offer online cab booking services.</p>
				</div>

				<div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
					<div class="service-icon">
						<span class="fa fa-car"></span>
					</div>
					<h4 class="mt-3">Safe Journey</h4>
					<p class="mt-3">Have a Safe journey with us :)</p>
				</div>
				<div class="col-lg-4 col-md-6 service-grid service-grid6 mt-5">
					<div class="service-icon">
						<span class="fa fa-cogs"></span>
					</div>
					<h4 class="mt-3">Trusted Cab Service</h4>
					<p class="mt-3">We provide most trusted Cab Services</p>
				</div>

			</div>
		</div>		
	</section>
	<!-- what we do -->

	<!-- tarrifs -->
	<section class="tarrifs py-5" id="tarrifs">
		<div class="container py-md-5">
			<div class="row tarrifs-grid">
				<div class="col-lg-4 col-md-6 text-center">
					<img src="images/taxi1.jpg" alt="" class="img-fluid"/>
					<div class="tarrif-info">
						<h4 class="my-3">Economy Class</h4>
						<p class="para_vl"></p>
						<h5 class="mt-sm-3 mt-2">$16/Km</h5>
					</div>		
				</div>		
				<div class="col-lg-4 col-md-6 text-center">
					<img src="images/taxi2.jpg" alt="" class="img-fluid"/>
					<div class="tarrif-info">
						<h4 class="my-3">Standard Class</h4>
						<p class="para_vl"></p>
						<h5 class="mt-sm-3 mt-2">$20/Km</h5>
					</div>		
				</div>		
				<div class="col-lg-4 col-md-6 text-center mt-lg-0 mt-5">
					<img src="images/taxi1.jpg" alt="" class="img-fluid"/>
					<div class="tarrif-info">
						<h4 class="my-3">Business Class</h4>
						<p class="para_vl"></p>
						<h5 class="mt-sm-3 mt-2">$25/Km</h5>
					</div>		
				</div>		
			</div>		
		</div>		
	</section>
	<!-- //tarrifs -->



	<!-- call us -->
	<section class="customer-call">
		<div class="container">
			<div class="row">
				<div class="col-md-8 py-sm-5 py-4 mt-3">
					<h4 class="mt-2">24 Hours 7 Days a Week</h4>
					<p>Call Us Now</p>
					<h2><span class="fa mr-1 fa-phone"></span> +91 9999999999</h2>
					<p class="mt-4"></p>
				</div>		

			</div>		
		</div>		
	</section>
	<!-- //call us -->



	<!-- footer -->
	<footer class="py-5" id="about">
		<div class="container">
			<div class="row footer_grids pt-lg-3">
				<div class="col-lg-5 footer_left">
					<h3 class="mb-sm-4 mb-3">About Our Taxi Company</h3>
					<p>We work in the dark to serve the light :)</p>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_right">
					<h3 class="mb-sm-4 mb-3">Contact Us</h3>
					<p> <span class="fa mr-1 fa-map-marker"></span> No.27 Ramatalkies, Visakhapatnam City, INDIA </p>
					<p> <span class="fa mr-1 fa-envelope"></span> <a href="mailto:cabs4u@gmail.com">cabs4u@gmail.com</a> </p>
					<p> <span class="fa mr-1 fa-phone"></span> +91 9999999999</p>
				</div>

			</div>
			<!-- move top -->
			<div class="move-to-top text-center mt-3">
				<a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
			</div>
			<!-- //move top -->

		</div>
	</footer>
	<!-- //footer -->

</body>
</html>