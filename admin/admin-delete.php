<?php include("includes/database-helper.php");
?>

<?php
    $ID = $_GET['id'];
    $Query = "DELETE FROM `admins` WHERE id = '$ID' ";
    $Result = mysqli_query($conn, $Query);
    if($Result)
    {
?>
        <script>
            alert("Admin Record Successfully Deleted");
            window.location.href= "admin-list.php";
        </script>
<?php 
    } else {
?>
        <script>
            alert("Failed");
            window.location.href= "admin-list.php?failed";
        </script>
<?php 
    }		
?>