<?php include("includes/session.php");
include("includes/variables.php") 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/png" href="images/favicon.png">
	<title>Checkout</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800"
		rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
	<link href="css/zoomslider.css" rel="stylesheet" type="text/css" />
	<link href="css/woocommerce-layout.css" rel="stylesheet" type="text/css" />
	<link href="css/select2.min.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<!-- HEADER -->
	<?php include("includes/header-no-logo.php") ?>
	<?php include("includes/database-helper.php") ?>
	<!-- HEADER END -->

	<!-- PAGE HEAD -->
	<section class="page-head">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Checkout</li>
					</ul>
					<h1>Checkout</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- PAGE HEAD END -->

	<!-- CART -->
	<section class="cart-wrap">
		<div class="woocommerce">
			<form class="checkout woocommerce-checkout" method="POST" action="checkout-data.php">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div id="customer_details">
								<div class="woocommerce-billing-fields">
									<h2>Billing details</h2>
									<div class="woocommerce-billing-fields__field-wrapper">
										<p class="form-row form-row-first" id="billing_first_name_field"
											data-priority="10">
											<label for="billing_first_name" class="">First name
											</label>
											<input class="input-text " name="TxtFirstName" id="TxtFirstName"
												placeholder="Enter First Name" autocomplete="given-name" autofocus
												type="text">
										</p>
										<p class="form-row form-row-last" id="billing_last_name_field"
											data-priority="20">
											<label for="billing_last_name" class="">Last name
											</label>
											<input class="input-text " name="TxtLastName" id="billing_last_name"
												placeholder="Enter Last Name" value="" autocomplete="family-name"
												type="text">
										</p>
										<p class="form-row form-row-first validate-required validate-phone"
											id="billing_phone_field" data-priority="100">
											<label for="billing_phone" class="">Phone
											</label>
											<input class="input-text " name="TxtPhone" id="billing_phone"
												placeholder="eg. 090078601" value="" autocomplete="tel" type="tel">
										</p>
										<p class="form-row form-row-last validate-required validate-email"
											id="billing_email_field" data-priority="110">
											<label for="billing_email" class="">Email address
											</label>
											<input class="input-text " name="TxtEmail" id="billing_email"
												placeholder="abc123@gmail.com" value="" type="email">
										</p>
										<p class="form-row form-row-wide address-field update_totals_on_change validate-required"
											id="billing_country_field" data-priority="40">
											<label for="billing_country" class="">Country</label>
											<select name="TxtCountry" id="billing_country" style="width: 100%"
												class="country_to_state country_select select2-hidden-accessible"
												autocomplete="country" tabindex="-1" aria-hidden="true">
												<option value="Pakistan">Pakistan</option>
												<option value="USA">USA</option>
											</select>
										</p>
										<p class="form-row form-row-wide address-field validate-required"
											id="billing_address_1_field" data-priority="50">
											<label for="billing_address_1" class="">Address
											</label>
											<input class="input-text " name="TxtAddress" id="billing_address_1" value=""
												autocomplete="address-line1" type="text">
										</p>
										<p class="form-row form-row-wide address-field update_totals_on_change validate-required"
											id="billing_country_field" data-priority="40">
											<label for="billing_State" class="">State
											</label>
											<select name="TxtState" id="billing_country" style="width: 100%"
												class="country_to_state country_select select2-hidden-accessible"
												autocomplete="country" tabindex="-1" aria-hidden="true">
												<option value="Punjab">Punjab</option>
												<option value="KPK">Khyber Pakhtun Khua</option>
												<option value="Sindh">Sindh</option>
												<option value="Balochistan">Balochistan</option>
											</select>
										</p>
										<p class="form-row form-row-first address-field validate-postcode validate-required"
											id="billing_postcode_field" data-priority="90"
											data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
											<label for="billing_postcode" class="">Postcode / ZIP
											</label>
											<input class="input-text " name="TxtPostcode" id="billing_postcode"
												placeholder="" value="" autocomplete="postal-code" type="text">
										</p>

									</div>
								</div>
								<div class="woocommerce-additional-fields">
									<div class="woocommerce-additional-fields__field-wrapper">
										<p class="form-row notes" id="order_comments_field" data-priority="">
											<label for="order_comments" class="">Order notes</label>
											<textarea name="TxtNotes" class="input-text " id="order_comments" rows="2"
												cols="5"></textarea>
										</p>
									</div>
								</div>
							</div>
						</div>
			</form>

						<div class="col-md-4 col-md-offset-2">
							<div class="order_box">
								<h2 id="order_review_heading">Your order</h2>
								<div id="order_review" class="woocommerce-checkout-review-order">
									<!-- <table class="table table-lg table-striped text-center table-hover">
										<thead>
											<tr>
												<th class="text-center">Product</th>
												<th class="text-center">Total</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$serialNumber = 0;
											$Query = "SELECT * FROM cart WHERE 1";
											$Result = mysqli_query($conn, $Query);
											while ($row = mysqli_fetch_array($Result)) {
												?>
												<tr>
													<td>
														<?php echo $row['product']; ?>
													</td>
													<td>
														<?php echo $row['total']; ?>
													</td>
													<td>
														<a href="cart-delete".php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to Delete Record')" title="Delete"><button class="btn btn-danger">Delete</button></a>
													</td>
												</tr>
												<?php
											}
											?>
										</tbody>
										<tfoot>

										</tfoot>
									</table> -->
			<div class="cart-collats">
				<div class="cart_totals">
					<table class="shop_table shop_table_responsive">
						<tbody>
							<tr class="order-total">
								<th>Total</th>
								<br>
								<td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
												class="woocommerce-Price-currencySymbol">$
												<?php
												$query = "SELECT SUM(total) AS total_sum FROM cart";
												$result = mysqli_query($conn, $query);
												if ($result) {
													$row = mysqli_fetch_assoc($result);
													echo isset($row['total_sum']) ? $row['total_sum'] : '0';
												} 
												?></strong></td>
							</tr>
						</tbody>
					</table>
						<div id="payment" class="woocommerce-checkout-payment d-flex">
							<ul class="wc_payment_methods payment_methods methods">
								<li class="wc_payment_method payment_method_cash">
									<input id="payment_method_cash" class="input-radio" name="payment_method"
										value="cheque" data-order_button_text="" type="radio">
									<label for="payment_method_cash">
										Cash on Delivery </label>
								</li>
								<li class="wc_payment_method payment_method_easypaisa">
									<input id="payment_method_easypaisa" class="input-radio" name="payment_method"
										value="cheque" data-order_button_text="" type="radio">
									<label for="payment_method_easypaisa">
										Easypaisa payment </label>
									<input type="text" id="cheque"  placeholder="Enter Easypaisa number">
								</li>
								<li class="wc_payment_method payment_method_paypal">
									<input id="payment_method_paypal" class="input-radio" name="payment_method"
										value="paypal" data-order_button_text="Proceed to PayPal" type="radio">
									<label for="payment_method_paypal">
										PayPal <img
											src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"
											alt="PayPal acceptance mark"></label>
											<input type="text" id="Paypal" placeholder="Enter Valid Number">
								</li>
							</ul>
							<div class="place-order">
								<input class="button alt" name="Btn-Order" id="place_order" value="Place order"
									data-value="Place order" type="submit">
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