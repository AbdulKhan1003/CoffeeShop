<?php include("includes/database-helper.php");
session_start();
include("includes/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admins List</title>
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
                <div class="page-header">
                        <h4 class="page-title">Admin List</h4>
                        <div class="breadcrumb">
                           <span class=" text-gray"><i class="feather icon-home"></i></span>
                           <div class="breadcrumb-item"><a href="index.php"> Home </a></div>
                        </div>
                        <div class="container-element">
                            <a href="register-page.php"><button class="btn btn-primary text-white">Add an Admin</button></a>
                           </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4">
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $serialNumber = 0;
                                        $Query = "SELECT * FROM `admins`";
                                        $Result = mysqli_query($conn,$Query);
                                        if ($Result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($Result))
                                            {
                                    ?>  
                                        <tr>
                                            <td><?php echo $serialNumber += 1; ?></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fname']; ?></td>
                                            <td><?php echo $row['lname']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td>
                                                <a href="admin-edit.php?id=<?php echo $row['id'];?>"><button class="btn btn-success">Edit</button></a>
                                                <a href="admin-delete.php?id=<?php echo $row['id'];?>" onClick="return confirm('Delete this row permanently?')"; title="Delete"><button class="btn btn-danger">Delete</button></a>
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
            <!-- Content END -->
        </div>
    </div>
                    <!-- Footer START -->
                    <?php include("includes/footer-admin.php");?>
                <!-- Footer End -->
<script src="assets/js/vendors.min.js"></script>
<script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
<!-- <script>
    $('.data-table').DataTable({
        'columnDefs': [
            { 'orderable': false, 'targets': 0 }
        ]
    });
</script> -->
<script src="assets/js/app.min.js"></script>
</body>
</html>