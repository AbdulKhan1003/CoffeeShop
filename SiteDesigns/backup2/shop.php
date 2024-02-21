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

	<!-- SHOP -->
	<div class="shop-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<aside class="shop-sidebar">
					    <div class="widget-area">
					        <ul>
					            <li class="widget-container woocommerce widget_shopping_cart">
					                <h3 class="widget-title">Shoping Cart</h3>
					                <div class="widget_shopping_cart_content">
					                    <ul class="cart_list product_list_widget ">
					                        <li class="mini_cart_item">
					                            <a href="#" class="remove" aria-label="Remove this item"><i class="fa fa-close" aria-hidden="true"></i></a>
					                            <a href="product.php" class="name">
					                                <img src="images/cart-item-img.jpg" alt="">Espresso Premium
				                                </a><br>
					                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>46</span>
					                            </span>
					                        </li>
					                    </ul>
					                    <div class="sub-total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>46</span></div>
					                    <div class="total"><strong>Total:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>46</span></div>
					                    <p class="buttons">
					                        <a href="cart.php" class="button">VIEV CART</a>
					                        <a href="checkout.php" class="button checkout">CHECKOUT</a> 
				                        </p>
					                </div>
					                <div class="clearfix"></div>
					            </li>
					            <li class="widget-container woocommerce widget_product_categories">
					                <h3 class="widget-title">Categories</h3>
					                <ul class="product-categories">
					                    <li class="cat-item">
					                    	<a href="#">Coffee</a>
					                    </li>
					                    <li class="cat-item">
					                    	<a href="#">Tea</a>
					                    </li>
					                    <li class="cat-item">
					                    	<a href="#">Desserts</a>
					                    </li>
					                </ul>
					                <div class="clearfix"></div>
					            </li>
					            <li class="widget-container woocommerce widget_price_filter">
					                <h3 class="widget-title">Filter by Price</h3>
					                <form>
					                    <div class="price_slider_wrapper">
					                        <div id="slider-range"></div>
					                        <div class="amount-wrap">
						                        <label>Price:</label>
	  											<span id="amount"></span>
  											</div>
  											<button class="filter-btn">FILTER</button>
					                    </div>
					                </form>
					                <div class="clearfix"></div>
					            </li>
					            <li class="widget-container">
					            	<h3 class="widget-title">Tags</h3>
					            	<div class="tag-cloud">
					            		<a href="#">Coffee,</a>
					            		<a href="#">Tea,</a>
					            		<a href="#">Desserts,</a>
					            		<a href="#">Arabica,</a>
					            		<a href="#">Robusta,</a>
					            		<a href="#">Market,</a>
					            		<a href="#">Chinesse</a>
					            	</div>
					            </li>
					        </ul>
					    </div>
					</aside>
				</div>
				<div class="col-md-8">
					<div class="product-list">
						<div class="row">
							<div class="col-md-12">
								<div class="woocommerce-toolbar">
									<div class="row">
										<div class="col-md-8 col-sm-6">
											<div class="result">Showing 1–10 of 12 results</div>
										</div>
										<div class="col-md-4 col-sm-6">
											<select style="width: 100%" class="woo-sort select2-hidden-accessible" tabindex="-1" aria-hidden="true">
							                    <option value="">Sort by newness</option>
							                    <option value="">Sort by score</option>
							                </select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="product.php"><img src="images/prod-img.jpg" alt=""></a></div>
									<a href="product.php" class="name">100%  Arabica</a>
									<div class="text">Professional espresso serie</div>
									<div class="price">$19</div>
									<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="product.php"><img src="images/prod-img1.jpg" alt=""></a></div>
									<a href="product.php" class="name">Espresso Premium</a>
									<div class="text">Professional espresso serie</div>
									<div class="price">$46</div>
									<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="product.php"><img src="images/prod-img.jpg" alt=""></a></div>
									<a href="product.php" class="name">100%  Arabica</a>
									<div class="text">Professional espresso serie</div>
									<div class="price">$19</div>
									<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="product-item">
									<div class="img-wrap"><a href="product.php"><img src="images/prod-img1.jpg" alt=""></a></div>
									<a href="product.php" class="name">Espresso Premium</a>
									<div class="text">Professional espresso serie</div>
									<div class="price">$46</div>
									<a href="#" class="btn btn-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i>add to cart</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="paging-navigation">
								    <hr>
								    <div class="pagination">
								        <a href="#" class="prev disabled"><i class="fa fa-chevron-left" aria-hidden="true"></i> Prev</a>
								        <a href="#" class="page-numbers current">1</a>
								        <a href="#" class="page-numbers">2</a>
								        <a href="#" class="page-numbers">3</a>
								        <a href="#" class="page-numbers">4</a>
								        <a href="#" class="next">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SHOP END -->

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