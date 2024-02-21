<?php include("includes/variables.php"); ?>
<?php include("includes/database-helper.php"); 
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
	<title>Cart</title>
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
	<!-- HEADER -->
	<?php include("includes/header-no-logo.php"); ?>
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
								<table class="table table-lg table-striped text-center table-hover">
									<thead>
										<tr>
											<th>Sr No.</th>
											<th class="text-center">Product</th>
											<th class="text-center">Price</th>
											<th class="text-center">Quantity</th>
											<th class="text-center">Total</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$serialNumber = 0;
										$Query = "SELECT * FROM cart WHERE 1";
										$Result = mysqli_query($conn, $Query);
										if ($Result->num_rows > 0) {  
										while ($row = mysqli_fetch_array($Result)) {
											?>
											<tr>
												<th>
													<?php echo $serialNumber += 1; ?>
												</th>
												<td>
													<?php echo $row['product']; ?>
												</td>
												<td>
													$<?php echo $row['price']; ?>
												</td>
												<td>
													<?php echo $row['quantity']; ?>
												</td>
												<td>
													<?php echo $row['total']; ?>
												</td>
												<td>
													<div class="d-flex text-left form-group">
													<a href="cart-delete.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to Delete Record')" title="Delete"><button class="btn btn-danger">Delete</button></a>

													</div>
												</td>
											</tr>
											<?php
										}
									}
										?>
									</tbody>

									<tfoot>

									</tfoot>
								</table>
								<div class="place-order">
								<a href="checkout.php" class="button alt" id="place_order" style="height: 40px; width: 120px; text-align: center; line-height: 40px; display: inline-block; text-decoration: none;">Proceed to Checkout</a>

							</div>
							<div class="cart-collaterals">
								<div class="cart_totals">
									<table class="shop_table shop_table_responsive">
										<tbody>
											<th>Total</th>
											<tr	 class="order-total">
												<td data-title="Total"><strong><span
															class="woocommerce-Price-amount amount"><span
																class="woocommerce-Price-currencySymbol">$
																<?php
																$query = "SELECT SUM(total) AS total_sum FROM cart";
																$result = mysqli_query($conn, $query);
																if ($result) {
																	$row = mysqli_fetch_assoc($result);
																	echo isset($row['total_sum']) ? $row['total_sum'] : '0';
																} else {
																	echo 'Error fetching total';
																}
																?></strong></td>
											</tr>
										</tbody>
									</table>
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.3/dist/sweetalert2.min.js"></script>

</body>

</html>