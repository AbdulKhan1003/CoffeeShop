<?php
include("includes/database-helper.php");
    $ID = $_GET['id'];
    $SqlCommand = "DELETE FROM cart WHERE id = '$ID' ";
    $Result = mysqli_query($conn, $SqlCommand);

    if ($Result) {
        ?>
        <script>
            alert("Admin Record Successfully Deleted");
            window.location.href = "checkout.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Failed");
            window.location.href = "checkout.php";
        </script>
        <?php
    }
?>
