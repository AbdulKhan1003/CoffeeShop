<?php include("includes/variables.php");
include("includes/session.php");
include("includes/database-helper.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="images/favicon.png">
<title>About Page</title>
<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet">
<!-- CSS FILES -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="css/zoomslider.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<!-- HEADER -->
<?php  
include("includes/header-no-logo.php");
?>
	<!-- HEADER END -->

	<!-- PAGE HEAD -->
		<section class="page-head">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li>About</li>
						</ul>
						<h1>About</h1>	
					</div>
				</div>
			</div>
		</section>
	<!-- PAGE HEAD END -->

	<!-- ABOUT PRODUCTS -->
	<section class="about-products">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h2>Our <span>Products</span></h2></div>
				<div class="col-md-4">
					<div class="item">
						<div class="img-wrap"><img src="images/icon1.png" width="170" alt=""></div>
						<div class="name"><span>Natural</span> Coffee</div>
						<p>Indulge in the unparalleled purity of our coffee, meticulously sourced and crafted to elevate your senses.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<div class="img-wrap"><img src="images/icon2.png" width="170" alt=""></div>
						<div class="name"><span>Tea</span> </div>
						<p>Savor excellence in every cup with Abdul's, where our commitment to high-quality coffee products is unwavering.</p>
						</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<div class="img-wrap"><img src="images/icon3.png" width="170" alt=""></div>
						<div class="name"><span>Sweet</span> Desserts</div>
						<p class="text">Delectable Chinese desserts enchant with their harmonious blend of textures, flavors, and culinary finesse—a sweet symphony of delight.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ABOUT PRODUCTS END -->

	<!-- MAIN REASONS -->
<?php include("includes/reasons.php") ?>
	<!-- MAIN REASONS END -->

	<!-- ABOUT MARKET -->
<?php include("includes/about-market.php") ?>
	<!-- ABOUT MARKET END -->
	<!-- FOOTER -->
	<footer class="footer">
	<?php include("includes/footer.php");?>
	</footer>
	<!-- FOOTER END -->
<!-- JAVASCRIPT FILES -->
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