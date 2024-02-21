<?php
session_start();
include("includes/database-helper.php");
include("includes/session.php");
include("includes/variables.php");
?>
<!-- *********************************************************************************************************************************************
															Abdul's Coffee Corner	
													      Developed on: 12-Dec-2023
														   Updated on: 18-Dec-2023
*********************************************************************************************************************************************** -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Admin Panel
    </title>
    <?php include("includes/favicon.php"); ?>
    <link href="assets/vendors/apexcharts/dist/apexcharts.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>

<body>
<?php echo $_SESSION['fname'];  ?>
<div class="layout">
    <div class="vertical-layout">
        <!-- Header START -->
        <?php include("includes/header-admin.php") ?>
            <!-- Header END -->
            <!-- Side Nav START -->
            <?php include("includes/sidebar-admin.php") ?>
            <!-- Side Nav END -->
            <!-- Content START -->
            <div class="content">
                <div class="main">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php
                                            $TotalOrders = "SELECT COUNT(*) AS 'TotalOrders' FROM `checkout`";
                                            $rstRow = mysqli_query($conn, $TotalOrders);
                                            $objRow = mysqli_fetch_object($rstRow);
                                            ?>
                                            <h3>
                                                <?php echo ($objRow->TotalOrders); ?>
                                            </h3>

                                            <span class="text-muted fw-semibold">Orders Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php
                                            $TotalEmails = "SELECT COUNT(*) AS 'TotalEmails' FROM message";
                                            $rstRow = mysqli_query($conn, $TotalEmails);
                                            $objRow = mysqli_fetch_object($rstRow);
                                            ?>
                                            <h3>
                                                <?php echo ($objRow->TotalEmails); ?>
                                            </h3>
                                            <span class="text-muted fw-semibold">Messages</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <?php
                                            $TotalProducts = "SELECT SUM(quantity) AS 'Products' FROM products";
                                            $rstRow = mysqli_query($conn, $TotalProducts);
                                            $objRow = mysqli_fetch_object($rstRow);
                                            ?>
                                            <h3>
                                                <?php echo ($objRow->Products); ?>
                                            </h3>
                                            <span class="text-muted fw-semibold">Total Products</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h4 class="mb-0">Recent Transaction</h4>
                                    </div>
                                    <table class="table table-hover mt-2">
                                        <thead>
                                            <tr>
                                                <th>Sr. no</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    $serialNumber = 0;
                                        $Query = "SELECT * FROM `checkout`";
                                        $Result = mysqli_query($conn,$Query);
                                        if ($Result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($Result))
                                            {
                                    ?> 
                                            <tr class="cursor-pointer">
                                                <td><?php echo $serialNumber += 1; ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-2">
                                                        <div class="fw-bolder text-dark"><?php echo $row['fname'] . ' ' . $row['lname']; ?></div>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td>
                                                    <div class="badge-dot bg-success"></div>
                                                    <span class="ms-2">Delivered</span>
                                                </td>
                                            </tr>
                                            <?php
											}
										}
										else
										{
											echo "No Result Found";
										}
									?>	
            
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Product Quantity</h4>
                                    <table class="table table-hover mt-2">
                                        <thead>
                                            <tr>
                                                <th>Sr. no</th>
                                                <th class="text-center">Product</th>
                                                <th class="text-center">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    $serialNumber = 0;
                                        $Query = "SELECT * FROM `products`";
                                        $Result = mysqli_query($conn,$Query);
                                        if ($Result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($Result))
                                            {
                                    ?> 
                                            <tr class="cursor-pointer">
                                                <td><?php echo $serialNumber += 1; ?></td>
                                                <td class="text-center"><?php echo $row['ProductName']; ?></td>
                                                <td class="text-center"><?php echo $row['quantity']; ?></td>
                                            </tr>
                                            <?php
											}
										}
										else
										{
											echo "No Result Found";
										}
									?>	
            
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer START -->
                    <?php include("includes/footer-admin.php") ?>
                <!-- Footer End -->
            </div>
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