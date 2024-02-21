<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="images/favicon.png">
<title>Title</title>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="css/zoomslider.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- HEADER -->
	<?php  
include("includes/header.php");
?>
	<!-- HEADER END -->

	<!-- PAGE HEAD -->
		<section class="page-head">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li>Products</li>
						</ul>
						<h1>Products</h1>	
					</div>
				</div>
			</div>
		</section>
	<!-- PAGE HEAD END -->

	<!-- PRODUCT -->
	<section class="product-single">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="product-image"><img src="images/product-single-img.jpg" alt=""></div>
				</div>
				<div class="col-md-7">
					<h3 class="name">Robusta</h3>
					<div class="top-price">$23</div>
					<div class="description">Sed sagittis sodales lobortis. Curabitur in eleifend turpis, id vehicula odio. Donec pulvinar tellus eget magna aliquet ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In aliquet porta eleifend. Aliquam laoreet viverra lectus eu suscipit.</div>
					<div class="product-action">
						<div class="quantity">
                            <input type="number" min="1" max="9" step="1" value="1">
                        </div>
                        <a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
					</div>
					<div class="product-info">
						<div class="item">Category: <a href="#">Coffee</a></div>
						<div class="item">Product ID: <strong>10</strong></div>
						<div class="item">Tags: <a href="#">Coffee,</a> <a href="#">Robusta</a></div>
					</div>
				</div>

				<div class="col-md-12">
					<h2 class="related-title">Related Products</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="images/prod-img.jpg" alt=""></a></div>
								<a href="#" class="name">100%  Arabica</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$19</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="images/prod-img1.jpg" alt=""></a></div>
								<a href="#" class="name">Espresso Premium</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$46</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="images/prod-img.jpg" alt=""></a></div>
								<a href="#" class="name">100%  Arabica</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$19</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img src="images/prod-img1.jpg" alt=""></a></div>
								<a href="#" class="name">Espresso Premium</a>
								<div class="text">Professional espresso serie</div>
								<div class="price">$46</div>
								<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- PRODUCT END -->

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
								<form class="subs-form">
									<input type="text" placeholder="Enter Your Email">
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
