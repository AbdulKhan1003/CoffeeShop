<?php
if (!(isset($_SESSION['fname']))) {
    header("location: ../login-page.php");
    exit();
}
?>