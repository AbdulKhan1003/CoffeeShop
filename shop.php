<?php  
include("includes/variables.php");
include("includes/session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="images/favicon.png">
<title>Shop</title>
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
							<li>Products</li>
						</ul>
						<h1>Products</h1>	
					</div>
				</div>
			</div>
		</section>
	<!-- PAGE HEAD END -->

	<!-- SHOP -->
	<!-- <form action="#" method="POST"> -->
	<div class="shop-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="product-list">
						<div class="row">
								<div class="col-md-6">
									<div class="product-item">
										<div class="img-wrap"><a href="#"><img src="images/prod-img.jpg" alt=""></a></div>
										<a href="#" class="name">100%  Arabica</a>
										<div class="text">Pure, Smooth, Aromatic.</div>
										<div class="price">$19</div>
										<a href="cart-data/arabica.php" class="btn btn-default" name="prod-arabica"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
									</div>
								</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="#"><img src="images/prod-img1.jpg" alt=""></a></div>
									<a href="#" class="name">Espresso Premium</a>
									<div class="text">Intense, Rich, Gourmet.</div>
									<div class="price">$46</div>
									<a href="cart-data/expresso.php" class="btn btn-default" name="prod-expresso"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>

								</div>
							</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="#"><img style="height:216px; width:185px;" src="images/prod-img-3.jpg" alt=""></a></div>
									<a href="#" class="name">Cappucino </a>
									<div class="text">Spiced, Aromatic, Comforting.</div>
									<div class="price">$15</div>
									<a href="cart-data/cappucino.php" class="btn btn-default" name="prod-cappucino"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="#"><img style="height:216px; width:185px;" src="images/prod-img-4.jpg" alt=""></a></div>
									<a href="#" class="name">Latte</a>
									<div class="text">Mild, Espresso-based.</div>
									<div class="price">$20</div>
									<a href="cart-data/latte.php" class="btn btn-default" name="prod-latte"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
								</div>
						</div>
						<div class="col-md-6">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img style="height:216px; width:185px;" src="images/prod-img3.jpg" alt=""></a></div>
								<a href="#" class="name">Robusta</a>
								<div class="text">Bold, Strong, Earthy..</div>
								<div class="price">$25</div>
								<a href="cart-data/robusta.php" class="btn btn-default" name="prod-robusta"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-item">
								<div class="img-wrap"><a href="#"><img style="height:216px; width:185px;" src="images/prod-img-5.webp" alt=""></a></div>
								<a href="#" class="name"><i class="fab fa-chair"></i></a>
								<div class="text">Natural Herbal Tea.</div>
								<div class="price">$5</div>
								<a href="cart-data/chai.php" class="btn btn-default" name="prod-chai"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
							</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- </form> -->
	<!-- SHOP END -->

	<!-- FOOTER -->
	<?php include("includes/footer.php") ?>
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