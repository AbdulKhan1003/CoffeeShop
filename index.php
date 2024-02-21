<?php
include("includes/session.php");
include("includes/database-helper.php");
include("includes/variables.php");
?>
<!-- *********************************************************************************************************************************************
															Abdul's Coffee Corner	
													      Developed on: 12-Dec-2023
														   Updated on: 18-Dec-2023
*********************************************************************************************************************************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/png" href="images/favicon.png">
	<title>Welcome Page</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800"
		rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
	<link href="css/zoomslider.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.css">
</head>
<body>
	<!-- HEADER START -->
	<?php include("includes/header.php"); ?>
	<!-- HEADER END -->
	<section id="demo-1" class="main-slider" data-zs-src='["images/main-slider-img.jpg"]'>
		<div class="main-slider-caption">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title"><span>Worldwide</span> network</div>
						<div class="big-title">Coffee market</div>
						<p><b>Abdul's Coffee Corner boasts a global presence, leading the worldwide coffee market with
								its exceptional blends. From <br> meticulously sourced beans to unique brewing methods,
								it offers a diverse and aromatic experience <br> that resonates across cultures, making
								it a global sensation.</b></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MAIN TOP PRODUCT -->
	<?php include("includes/top-products.php") ?>;
	<!-- MAIN TOP PRODUCT END -->

	<!-- MAIN ABOUT -->
	<?php include("includes/about-market.php") ?>;
	<!-- MAIN ABOUT END -->

	<!-- MAIN REASONS -->
	<?php include("includes/reasons.php") ?>;
	<!-- MAIN REASONS END -->

	<!-- MAIN SHOP -->
	<?php include("includes/popular-items.php") ?>;
	<!-- MAIN SHOP END -->

	<!-- WHERE TO BUY -->
	<?php include("includes/where-to-buy.php") ?>;
	<!-- WHERE TO BUY END -->
	
	<!-- MAP -->
    <div class="container">
        <h1>Location on Google Maps</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6649.845433375652!2d73.12542549295073!3d33.55538423431531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed011528bf91%3A0x21534e6b05b686b2!2sBahria%20Town%20Phase%20V%20Phase%205%20Bahria%20Town%2C%20Rawalpindi%2C%20Islamabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1701924041818!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
	<!-- MAP END -->

	<!-- MAIN REVIEWS -->
	<section class="main-reviews">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><span>What our</span> clients say</h2>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel review-slider owl-theme">
					<div class="item">
							<div class="review-item">
								<p class="text">Abdul's Coffee Corner brings joy to my mornings! <br> Their 100% natural
									coffee is a delightful burst of flavor, <br> making every sip a moment of pure
									happiness.</p>
								<div class="img-wrap"><img src="images/review-ava.jpg" alt=""></div>
								<div class="name">Judy Christoff</div>
								<div class="date">1 year ago</div>
							</div>
						</div>
						<div class="item">
							<div class="review-item">
								<p class="text">Great Taste of coffe and is a must for new customers trying to have <br>
									a simple yet delicious coffee with light desesrts <br> and I like how the delivery
									is free. </p>
								<div class="img-wrap"><img style="width: 91px; height:91px;" src="images/_client-4.jpg"
										alt=""></div>
								<div class="name">Ahsan </div>
								<div class="date">2 months ago</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN REVIEWS END -->
	<!-- FOOTER -->
	<?php include("includes/footer.php"); ?>
	<!-- FOOTER END -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="../../ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>
	<script type="text/javascript" src="js/map-style.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.zoomslider.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/waypoint.js"></script>
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/custom-number.js"></script>
	<script type="text/javascript" src="js/jquery.select2.js"></script>
	<script type="text/javascript" src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.js"></script>

</body>

</html>