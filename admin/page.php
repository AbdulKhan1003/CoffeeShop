<?php
include("includes/session.php");
    include("includes/DatabaseHelper.php");
    include("includes/variables.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo(constant("CompanyName")); ?> - Dashboard</title>
    <?php include("includes/favicon.php"); ?>
    <link href="assets/vendors/apexcharts/dist/apexcharts.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>
<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <?php include("includes/header-admin.php") ?>    
            <!-- Header END -->
            <!-- Side Nav START -->
            <?php include("includes/sidebar-admin.php") ?>    
            <!-- Side Nav END -->
            <!-- Content START -->
            
            <!-- Content END -->
        </div>
    </div>
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>
    <!-- page js -->
    <script src="assets/vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
</body>
</html>