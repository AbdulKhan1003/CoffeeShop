<?php 
include("includes/database-helper.php");
if(isset($_POST["Btn-Order"])){
    $FName = mysqli_real_escape_string($conn, $_POST["TxtFirstName"]);
    $LName = mysqli_real_escape_string($conn, $_POST["TxtLastName"]);
    $Phone = mysqli_real_escape_string($conn, $_POST["TxtPhone"]);
    $Email = mysqli_real_escape_string($conn, $_POST["TxtEmail"]);
    $Country = mysqli_real_escape_string($conn, $_POST["TxtCountry"]);
    $Address = mysqli_real_escape_string($conn, $_POST["TxtAddress"]);
    $State = mysqli_real_escape_string($conn, $_POST["TxtState"]);
    $Postcode = mysqli_real_escape_string($conn, $_POST["TxtPostcode"]);
    $Notes = mysqli_real_escape_string($conn, $_POST["TxtNotes"]);
    
    $Query = "SELECT MAX(id) from checkout";
    $Result = mysqli_query($conn, $Query);
    $MaxID =  mysqli_fetch_array($Result);
    $ID = $MaxID["0"];
    $ID = $ID + 1;
    $Query = "INSERT INTO `checkout`(id , fname , lname , phone , email , country , address , state , postcode , notes)" . "VALUES($ID , '$FName' , '$LName' , '$Phone' , '$Email' , '$Country' , '$Address', '$State' , '$Postcode' , '$Notes')";
    $Result = mysqli_query($conn, $Query);
    $UpdateQuery = "UPDATE products
    SET quantity = quantity - (
        SELECT quantity
        FROM cart
        WHERE products.Price = cart.price
        )
                WHERE EXISTS (
                    SELECT 1
                    FROM cart
                    WHERE products.ProductName = cart.product
                )";
$UpdateResult = mysqli_query($conn, $UpdateQuery);

    $delQuery="DELETE FROM `cart`";
    $delResult=mysqli_query($conn, $delQuery);   
    if($Result){

    ?>
    <script>
        alert("Order Placed");
        window.location.href = "index.php";
    </script>
    <?php 
    }
    else{
        echo "Error" . mysqli_error( $conn);    
    }
}
?>