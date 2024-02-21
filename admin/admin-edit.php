<?php
session_start();
include("includes/session.php");
include("includes/database-helper.php");
// include("includes/session.php");
$ID = $_GET['id'];
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
        .container-element {
            width: 75%;
            display: flex;
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
                            <a href="register-page.php"><button class="btn btn-primary text-white">Add an
                                    Admin</button></a>
                        </div>
                    </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="mt-4">
                                    <form action="admin-edit-data.php?id=<?php echo $ID; ?>" method="POST">
                                        <table class="table table-hover table-dark">
                                            <thead>
                                                <tr>
                                                    <th>Sr No.</th>
                                                    <th>Email Address</th>
                                                    <th>Password</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // $ID = $_GET['id'];
                                                $serialNumber = 0;
                                                $Query = "SELECT * FROM `admins` where id=$ID";
                                                $Result = mysqli_query($conn, $Query);
                                                if ($Result->num_rows > 0) {
                                                    while ($row = mysqli_fetch_array($Result)) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $serialNumber += 1; ?>
                                                            </td>
                                                            <td><input type="text" name="TxtNewEmail"
                                                                    placeholder="<?php echo $row['email']; ?>"></td>
                                                            <td><input type="password" name="TxtNewPassword"
                                                                 placeholder="<?php echo $row['password']; ?>"></td>
                                                            <td>
                                                                <!-- <a href="admin-edit-data.php?id=<?php echo $row['id']; ?>"
                                                                    onClick="return confirm('Update email and password?');" ;
                                                                    title="Save"><button
                                                                        class="btn btn-success">Update</button></a> -->
                                                                        
                                                                        <button class="btn btn-success" name="Btn-Update">Update</button>
                        
                                                                        <!-- <input type="text" name="id" value="<?php echo $ID; ?>"> -->

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <?php
                                                    }
                                                } else {
                                                    echo "No Result Found";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content END -->
            </div>
        </div>
                                <!-- Footer START -->
                                <?php include("includes/footer-admin.php"); ?>
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