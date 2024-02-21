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
							<p>19 Walcott street,  8373620 London, GreatBritain</p>
						</div>
						<div class="item">
							<div class="title"><i class="fa fa-phone" aria-hidden="true"></i>PHONE</div>
							<p>+80 (041) 2824 504 43</p>
						</div>
						<div class="item">
							<div class="title"><i class="fa fa-envelope-o" aria-hidden="true"></i>EMAIL</div>
							<p><a href="mailto:orders@mistercoffee.us">orders@mistercoffee.us</a></p>
						</div>
						<div class="item">
							<div class="title"><i class="fa fa-skype" aria-hidden="true"></i>SKYPE</div>
							<p><a href="callto:mrcoffee">mrcoffee</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-right">
						<h2>Send Message</h2>
						<form class="contact-form">
							<div class="row">
								<div class="col-md-12">
									<textarea placeholder="Your Comment *"></textarea>
								</div>
								<div class="col-md-6">
									<input class="contact-input" type="text" placeholder="Your Name *">
								</div>
								<div class="col-md-6">
									<input class="contact-input" type="email" placeholder="Email *">
								</div>
								<div class="col-md-12 text-center">
									<button>SUBMIT</button>
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTACTS END -->

	<!-- MAP -->
    <div class="container">
        <h1>Location on Google Maps</h1>
        <!-- Embed Google Map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.6017847343182!2d73.04775437541201!3d33.58968714201348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9359804a29ef%3A0x9bce2b7fb66b2b04!2sGHQ%20Pakistan%20Army!5e0!3m2!1sen!2s!4v1701699702450!5m2!1sen!2s allowfullscreen" width="100%" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
	<!-- MAP END -->

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