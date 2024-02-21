<?php
include("includes/database-helper.php");

if(isset($_POST["Btn-Login"])){
    $Email = mysqli_escape_string($conn, $_POST["TxtEmail"]);
    $Password = mysqli_escape_string($conn, $_POST["TxtPassword"]);
    $query = "SELECT * FROM `login-page` WHERE email = '$Email' AND pass = '$Password'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        echo "Login successful!";
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid email or password";
    }
}
?>
