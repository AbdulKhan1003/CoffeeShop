<?php include("includes/database-helper.php");
session_start();
include("includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Products</title>
    <?php include("includes/favicon.php"); ?>
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <style>
        .container-element{
            width: 75%;
            display:flex;
            justify-content: flex-end;
        }
    </style>
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
            <div class="content">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4">
                            <!-- <form action="admin-add-data.php?id=<?php echo $ID; ?>" method="POST"> -->
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                            <th>Pid</th>
                                            <th>ProductName</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
          
                                        $Query = "SELECT * FROM `products`";
                                        $Result = mysqli_query($conn,$Query);
                                        if ($Result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($Result))
                                            {
                                    ?>  
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['ProductName']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['Price']; ?></td>
                                            <td>
                                                <a href="admin-add-data.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you want to add this product?')"; title="Add"><button class="btn btn-info" name="Btn-Add">Add</button></a>
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
                                <!-- </form> -->
                            </div>

            </div>
            <!-- Content END -->
        </div>
    </div>
                    <!-- Footer START -->
                    <?php include("includes/footer-admin.php");?>
                <!-- Footer End -->