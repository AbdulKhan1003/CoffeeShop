<?php
include("includes/database-helper.php");
if(isset($_POST["Btn-Submit"])){
    $FirstName = mysqli_real_escape_string($conn, $_POST["TxtFirstName"]);
    $LastName = mysqli_real_escape_string($conn, $_POST["TxtLastName"]);
    $Username = mysqli_real_escape_string($conn, $_POST["TxtUsername"]);

    $checkusername = "SELECT COUNT(*) as count FROM admins WHERE username = '$Username'";
    $Result = mysqli_query($conn, $checkusername);
    
    if (!$checkusername) {
        die("Error checking username: " . mysqli_error($conn));
    }
    
    $usernameCount = mysqli_fetch_assoc($Result)['count'];
    
    if ($usernameCount > 0) {
        die("Error: Username exists");
    }
    $Email = mysqli_real_escape_string($conn, $_POST["TxtEmail"]);
    
    $checkEmailQuery = "SELECT COUNT(*) as count FROM `admins` WHERE email = '$Email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
    
    if (!$checkEmailResult) {
        die("Error checking email: " . mysqli_error($conn));
    }
    
    $emailCount = mysqli_fetch_assoc($checkEmailResult)['count'];
    
    if ($emailCount > 0) {
        die("Error: Email already exists");
    }
    
    $Password = mysqli_real_escape_string($conn, $_POST["TxtPassword"]);
    
    $FQuery = "SELECT MAX(id) FROM `admins`";
    $FResult = mysqli_query($conn, $FQuery);
    $MAXID = mysqli_fetch_array($FResult);
    $ID = $MAXID['0'];
    $ID = $ID + 1; 
    
    $Query = "INSERT INTO `admins` (id, fname, username , password , lname , email) VALUES ($ID, '$FirstName' , '$Username' , '$Password' , '$LastName' , '$Email')";
    
    $result = mysqli_query($conn, $Query);
        
        header("Location: ../login-page.php");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        die("Error: " . mysqli_error($conn));
    }
?>
