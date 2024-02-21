<?php
include("includes/database-helper.php");
$Product = "Chai";
$Price = 5;
$Quantity = 1;
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
?>