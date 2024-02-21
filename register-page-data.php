<?php
include("includes/database-helper.php");

if(isset($_POST["Btn-Submit"])){
    $FullName = mysqli_real_escape_string($conn, $_POST["TxtFullName"]);
    $Email = mysqli_real_escape_string($conn, $_POST["TxtEmail"]);
    
    $checkEmailQuery = "SELECT COUNT(*) as count FROM `login-page` WHERE email = '$Email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
    
    if (!$checkEmailResult) {
        die("Error checking email: " . mysqli_error($conn));
    }
    
    $emailCount = mysqli_fetch_assoc($checkEmailResult)['count'];
    
    if ($emailCount > 0) {
        die("Error: Email already exists");
    }
    
    $Password = mysqli_real_escape_string($conn, $_POST["TxtPassword"]);
    
    $FQuery = "SELECT MAX(id) FROM `login-page`";
    $FResult = mysqli_query($conn, $FQuery);
    $MAXID = mysqli_fetch_array($FResult);
    $ID = $MAXID['0'];
    $ID = $ID + 1; 
    
    $Query = "INSERT INTO `login-page` (id, FullName, email, pass) VALUES ($ID, '$FullName', '$Email', '$Password')";
    
    $result = mysqli_query($conn, $Query);
    
    if ($result) {
        echo "Success"; 
        echo "Your Info was added successfully";
        echo "Your Personal info is:";
        
        $Query = "SELECT * FROM `login-page`";
        $Result = mysqli_query($conn, $Query);
        
        if ($Result) {
            while ($row = mysqli_fetch_assoc($Result)) {
                echo "ID: " . $row['id'] . "<br>";
                echo "First Name: " . $row['FullName'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Password: " . $row['pass'] . "<br>";
                echo "<br>";
            }
        } else {
            die("Error: " . mysqli_error($conn));
        }
        
        // Redirect to login-page.php
        header("Location: login-page.php");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>
