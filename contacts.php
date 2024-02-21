<?php include("includes/variables.php");
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
<title>Contacts</title>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway:300,400,700,800" rel="stylesheet"> 
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
							<li>Contacts</li>
						</ul>
						<h1>Contacts</h1>	
					</div>
				</div>
			</div>
		</section>
	<!-- PAGE HEAD END -->

	<!-- CONTACTS -->
	<div class="contact-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-left">
						<h2>Contacts</h2>
						<div class="item">
							<div class="title"><i class="fa fa-location-arrow" aria-hidden="true"></i>ADDRESS</div>
							<p>Gulberg 3, Lahore</p>
						</div>
						<div class="item">
							<div class="title"><i class="fa fa-phone" aria-hidden="true"></i>PHONE</div>
							<p><?php echo PhoneNo ?></p>
						</div>
						<div class="item">
							<div class="title"><i class="fa fa-envelope-o" aria-hidden="true"></i>EMAIL</div>
							<p><a href="mailto:<?php echo EMAIL ?>"><?php echo EMAIL ?></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-right">
						<h2>Send Message</h2>
						<form class="contact-form" action="contact-data.php" method="POST" >
							<div class="row">
								<div class="col-md-12">
									<textarea name="TxtComment" placeholder="Your Comment *"></textarea>
								</div>
								<div class="col-md-6">
									<input class="contact-input" name="TxtFullName" type="text" placeholder="Your Name *">
								</div>
								<div class="col-md-6">
									<input class="contact-input" name="TxtEmail" type="email" placeholder="Email *">
								</div>
								<div class="col-md-12 text-center">
									<button name="Btn-Submit" >SUBMIT</button>
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTACTS END -->


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