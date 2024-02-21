<?php
        include("includes/database-helper.php");
        $Query="DELETE FROM `cart`";
        $Result=mysqli_query($conn, $Query);  
        if($Result){
        session_start();
        session_unset();
        session_destroy();
        }
        header("location: login-page.php");
    ?>
