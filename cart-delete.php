<?php
include("includes/database-helper.php");

$ID = $_GET['id'];
$delQuery = "DELETE FROM cart WHERE id = '$ID'";
$delResult = mysqli_query($conn, $delQuery);
if ($delResult) {
    session_start();
    $_SESSION['Quantity'] = 0;
    ?>
    <script>
        alert("Successfully Deleted");
        window.location.href = "cart-new.php";
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Failed to delete record");
        window.location.href = "cart-new.php";
    </script>
    <?php
}
?>
