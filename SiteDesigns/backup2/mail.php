<?php
    include("includes/variables.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$email = $_POST["Email"];
    	header("Location: index.php");
    exit();
}
?>