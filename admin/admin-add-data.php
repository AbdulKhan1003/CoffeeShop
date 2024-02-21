<?php
session_start();
include("includes/session.php");
include("includes/database-helper.php");

    $Pid = $_GET['id'];
    $Query = "UPDATE `products` SET quantity = quantity + 1 WHERE Pid = $Pid";
    $Result = mysqli_query($conn, $Query);

    if ($Result) {
        ?>
        <script>
            alert("Product Added Successfully");
            window.location.href = "admin-products.php";
        </script>
        <?php
    } else {
        die("Failed: " . mysqli_error($conn));
    
}
?>
