<?php include("includes/database-helper.php");
include("includes/session.php");

if(isset($_POST["Btn-Submit"])){
$Comment =mysqli_real_escape_string($conn, $_POST["TxtComment"]);
$FullName =mysqli_real_escape_string($conn, $_POST["TxtFullName"]);
$Email = mysqli_real_escape_string($conn, $_POST["TxtEmail"]);
$Query = "SELECT MAX(id) from `message`";
$Result = mysqli_query($conn, $Query);
$MaxID = mysqli_fetch_array($Result);
$ID = $MaxID["0"];
$ID = $ID+1;
$Query = "INSERT INTO `message` (id , comment , name , email)" . "VALUES ($ID , '$Comment' , '$FullName' , '$Email')";
$Result=mysqli_query($conn, $Query);
if($Result){
    ?>
    <script>
        alert("Message Sent!");
        window.location.href = "index.php";
    </script>
    <?php
}
else{
    echo "error" . mysqli_error( $conn);
}
}