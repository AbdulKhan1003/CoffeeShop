<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Admin Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css2/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css2/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css2/assets/fonts/flaticon/font/flaticon.css">
    <link rel="shortcut icon" href="css2/assets/img/favicon.ico" type="image/x-icon" >
    <?php include("includes/favicon.php"); ?>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css2/assets/css/style.css">
</head>
<body id="top">
<div class="page_loader"></div>
<div class="login-23">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-color-23">
                <div class="form-section">
                    <h3>Register as Admin</h3>
                    <div class="login-inner-form">
                        <form action="register-page-data.php" method= "POST">
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">First Name</label>
                                <div class="form-box">
                                <input type="text" class="form-control" name="TxtFirstName" id="TxtFullName" placeholder="First Name" aria-label="Full Name" required>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">Last Name</label>
                                <div class="form-box">
                                <input type="text" class="form-control" name="TxtLastName" id="TxtFullName" placeholder="Last Name" aria-label="Full Name" required>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">Username</label>
                                <div class="form-box">
                                <input type="text" class="form-control" name="TxtUsername" id="TxtFullName" placeholder="Last Name" aria-label="Full Name" required>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label">Email address</label>
                                <div class="form-box">
                                    <input type="email" class="form-control" name="TxtEmail" id="TxtEmail" placeholder="Email Address" aria-label="Email Address" required>
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Password</label>
                                <div class="form-box">
                                <input type="password" class="form-control" autocomplete="off" name="TxtPassword" id="TxtPassword" placeholder="Password" aria-label="Password" required>
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="form-group checkbox clearfix">
                                <div class="clearfix float-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberme" required>
                                        <label class="form-check-label" for="rememberme">
                                            I agree to the terms of service
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb-0">
                                <button type="submit" id="Btn-Submit" name="Btn-Submit" class="btn btn-primary btn-lg btn-theme">Register</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div>
<!-- External JS libraries -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>
<!-- Custom JS Script -->
</body>
</html>
