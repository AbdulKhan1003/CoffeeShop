<?php
include("database-helper.php");
session_start();
if (!isset($_SESSION['Quantity-Chai'])) {
    $_SESSION['Quantity-Chai'] = 0;
}
$Quantity = $_SESSION['Quantity-Chai'];
    $Product = "Chai";
    $Price = 5;
    $Quantity = $Quantity + 1;
    $Total = $Price * $Quantity;
    $Query = "SELECT * FROM `cart` WHERE product = '$Product'";
    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0) {
        $UpdateQuery = "UPDATE `cart` SET quantity = $Quantity, total = $Total WHERE product = '$Product'";
        $result = mysqli_query($conn, $UpdateQuery);
    } else {
        $FQuery = "SELECT MAX(id) FROM `cart`";
        $FResult = mysqli_query($conn, $FQuery);
        $MAXID = mysqli_fetch_array($FResult);
        $ID = $MAXID['0'];
        $ID = $ID + 1;
        $InsertQuery = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
        $result = mysqli_query($conn, $InsertQuery);
    }
    if ($result) {
        $_SESSION['Quantity-Chai'] = $Quantity;
        header("Location: ../cart-new.php");
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }
?>
