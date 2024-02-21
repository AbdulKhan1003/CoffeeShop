<?php include("includes/variables.php") ?>
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
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- TOP BAR -->
	<!-- TOP BAR END -->
	<!-- HEADER -->
	<?php include("includes/header.php") ?>
	<!-- HEADER END -->

	<!-- PAGE HEAD -->
		<section class="page-head">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li>Shoping cart</li>
						</ul>
						<h1>Shoping cart</h1>	
					</div>
				</div>
			</div>
		</section>
	<!-- PAGE HEAD END -->

	<!-- CART --> 
	<section class="cart-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="woocommerce">
					    <div class="page_woo woo_cart">
					        <form method="post">
					            <table class="shop_table shop_table_responsive cart">
					                <thead>
					                    <tr>
					                        <th class="product-remove">&nbsp;</th>
					                        <th class="product-thumbnail">Product</th>
					                        <th class="product-name">&nbsp;</th>
					                        <th class="product-price">Price</th>
					                        <th class="product-quantity">Quantity</th>
					                        <th class="product-subtotal">Total</th>
					                    </tr>
					                </thead>
					                <tbody>
					                    <tr class="cart_item">
					                        <td class="product-remove">
					                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-close" aria-hidden="true"></i></a> 
				                            </td>
					                        <td class="product-thumbnail">
					                            <a href="#">
					                            	<img src="images/cart-item-img.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" >
					                            </a>
					                        </td>
					                        <td class="product-name" data-title="Product">
					                            <a href="#">Espresso Premium</a> 
				                            </td>
					                        <td class="product-price" data-title="Price">
					                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span>
					                        </td>
					                        <td class="product-quantity" data-title="Quantity">
					                            <div class="quantity">
					                                <input type="number" min="1" max="9" step="1" value="1">
					                            </div>
					                        </td>
					                        <td class="product-subtotal" data-title="Total">
					                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span>
					                        </td>
					                    </tr>
					                    <tr class="cart_item">
					                        <td class="product-remove">
					                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-close" aria-hidden="true"></i></a> 
				                            </td>
					                        <td class="product-thumbnail">
					                            <a href="#">
					                            	<img src="images/cart-item-img.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" >
					                            </a>
					                        </td>
					                        <td class="product-name" data-title="Product">
					                            <a href="#">100% Arabica</a> 
				                            </td>
					                        <td class="product-price" data-title="Price">
					                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>43</span>
					                        </td>
					                        <td class="product-quantity" data-title="Quantity">
					                            <div class="quantity">
					                                <input type="number" min="1" max="9" step="1" value="1">
					                            </div>
					                        </td>
					                        <td class="product-subtotal" data-title="Total">
					                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>43</span>
					                        </td>
					                    </tr>
					                    <tr>
					                        <td colspan="6" class="actions">
					                            <div class="coupon">
					                                <label for="coupon_code">Coupon Code:</label>
					                                <input name="coupon_code" class="input-text" id="coupon_code" value="" type="text">
					                                <input class="button" name="apply_coupon" value="APPLY CODE" type="submit">
					                            </div>
					                            <input class="button" name="update_cart" value="Update Cart" type="submit">
				                            </td>
					                    </tr>
					                </tbody>
					            </table>
					        </form>
					        <div class="cart-collaterals">
					            <div class="cart_totals">
					                <table class="shop_table shop_table_responsive">
					                    <tbody>
					                        <tr class="cart-subtotal">
					                            <th>Subtotal</th>
					                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65</span>
					                            </td>
					                        </tr>
					                        <tr class="order-total">
					                            <th>Total</th>
					                            <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65</span></strong> </td>
					                        </tr>
					                    </tbody>
					                </table>
					                <div class="wc-proceed-to-checkout">
					                    <a href="#" class="checkout-button btn btn-default alt wc-forward">Checkout</a>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CART END --> 

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