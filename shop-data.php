<?php
include("includes/database-helper.php");
$Product = "New prod";
$Price = 10;
$Quantity = 1;
$Total = $Price * $Quantity;
if (isset($_POST["prod-arabica"])) {
    $Product = "100% Arabica";
    $Price = 19;
    $Product = mysqli_real_escape_string($conn, $Product);
$Total = $Price * $Quantity;
$FQuery = "SELECT MAX(id) FROM `cart`";
$FResult = mysqli_query($conn, $FQuery);
$MAXID = mysqli_fetch_array($FResult);
$ID = $MAXID['0'];
$ID = $ID + 1;
$Query = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
$result = mysqli_query($conn, $Query);
if ($result) {
    echo "Success";
    echo "Your Info was added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
} elseif (isset($_POST["prod-espresso"])) {
    $Product = "Espresso Premium";
    $Price = 19;
    $Product = mysqli_real_escape_string($conn, $Product);
$Total = $Price * $Quantity;
$FQuery = "SELECT MAX(id) FROM `cart`";
$FResult = mysqli_query($conn, $FQuery);
$MAXID = mysqli_fetch_array($FResult);
$ID = $MAXID['0'];
$ID = $ID + 1;
$Query = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
$result = mysqli_query($conn, $Query);
if ($result) {
    echo "Success";
    echo "Your Info was added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
} elseif (isset($_POST["prod-cappuccino"])) {
    $Product = "Cappuccino";
    $Price = 15;
    $Product = mysqli_real_escape_string($conn, $Product);
$Total = $Price * $Quantity;
$FQuery = "SELECT MAX(id) FROM `cart`";
$FResult = mysqli_query($conn, $FQuery);
$MAXID = mysqli_fetch_array($FResult);
$ID = $MAXID['0'];
$ID = $ID + 1;
$Query = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
$result = mysqli_query($conn, $Query);
if ($result) {
    echo "Success";
    echo "Your Info was added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
} elseif (isset($_POST["prod-latte"])) {
    $Product = "Latte";
    $Price = 20;
    $Product = mysqli_real_escape_string($conn, $Product);
$Total = $Price * $Quantity;
$FQuery = "SELECT MAX(id) FROM `cart`";
$FResult = mysqli_query($conn, $FQuery);
$MAXID = mysqli_fetch_array($FResult);
$ID = $MAXID['0'];
$ID = $ID + 1;
$Query = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
$result = mysqli_query($conn, $Query);
if ($result) {
    echo "Success";
    echo "Your Info was added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
} elseif (isset($_POST["prod-chai"])) {
    $Product = "Chai";
    $Price = 5;
    $Product = mysqli_real_escape_string($conn, $Product);
$Total = $Price * $Quantity; // Calculate total
$FQuery = "SELECT MAX(id) FROM `cart`";
$FResult = mysqli_query($conn, $FQuery);
$MAXID = mysqli_fetch_array($FResult);
$ID = $MAXID['0'];
$ID = $ID + 1;
$Query = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
$result = mysqli_query($conn, $Query);
if ($result) {
    echo "Success";
    echo "Your Info was added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
} elseif (isset($_POST["prod-robusta"])) {
    $Product = "Robusta";
    $Price = 5;
    $Product = mysqli_real_escape_string($conn, $Product);
$Total = $Price * $Quantity;
$FQuery = "SELECT MAX(id) FROM `cart`";
$FResult = mysqli_query($conn, $FQuery);
$MAXID = mysqli_fetch_array($FResult);
$ID = $MAXID['0'];
$ID = $ID + 1;
$Query = "INSERT INTO `cart` (id, product, price, quantity, total) VALUES ($ID, '$Product', $Price, $Quantity, $Total)";
$result = mysqli_query($conn, $Query);
if ($result) {
    echo "Success";
    echo "Your Info was added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
}
if (empty($Product)) {
    echo "Invalid product selected.";
    exit();
}
?>