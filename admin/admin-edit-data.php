<?php
include("includes/database-helper.php");
if(isset($_POST['Btn-Update'])){
$ID = $_GET['id'];
$NewEmail = mysqli_real_escape_string($conn, $_POST['TxtNewEmail']);
$NewPass = mysqli_real_escape_string($conn, $_POST['TxtNewPassword']);
// echo $ID;
// echo $NewEmail;
// echo $NewPass;
// die();
$Query = "UPDATE `admins` SET email = '$NewEmail' , password = '$NewPass' WHERE id = $ID";
$Result = mysqli_query($conn, $Query);
if ($Result) {
?>
    <script>
        alert("Password Changed Successfully");
        window.location.href = "admin-list.php";
    </script>
<?php
} else {
    die("Failed: " . mysqli_error($conn));
}
}
?>