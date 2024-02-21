<?php
// include("includes/database-helper.php");
include("includes/variables.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/png" href="images/favicon.png">
	<title>Title</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800"
		rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
	<link href="css/zoomslider.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
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
								it offers a diverse and aromatic experience <br> thatresonates across cultures, making
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
								<p class="text">Great Taste of coffe and is a must for new customers trying to have <br>
									a simple yet delicious coffee with light desesrts <br> and I like how the delivery
									is free. </p>
								<div class="img-wrap"><img style="width: 91px; height:91px;" src="images/review-1.jpg"
										alt=""></div>
								<div class="name">Ahsan Hadi</div>
								<div class="date">2 months ago</div>
							</div>
						</div>
						<div class="item">
							<div class="review-item">
								<p class="text">Abdul's Coffee Corner brings joy to my mornings! <br> Their 100% natural
									coffee is a delightful burst of flavor, <br> making every sip a moment of pure
									happiness.</p>
								<div class="img-wrap"><img src="images/review-ava.jpg" alt=""></div>
								<div class="name">Hillary Clinton</div>
								<div class="date">1 year ago</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN REVIEWS END -->

	<!-- SUBSCRIBE FORM -->
	<section class="subscribe">
		<div class="container ">
		<div class="row">
    <div class="col-md-12">
        <div class="inner">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="top-title">Want to know about new types of coffee?</div>
                    <div class="bottom-title">Get our weekly email</div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <form class="subs-form" action="mail.php" method="post">
                        <input type="text" placeholder="Enter Your Email" name="email">
                        <input type="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
				</div>
	</section>
	<!-- SUBSCRIBE FORM END -->

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
</body>

</html>