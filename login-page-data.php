<?php
include("includes/database-helper.php");
if (isset($_POST["Btn-Login"])) {
    $Email = mysqli_real_escape_string($conn, $_POST["TxtEmail"]);
    $Password = mysqli_real_escape_string($conn, $_POST["TxtPassword"]);
    $queryUser = "SELECT * FROM `login-page` WHERE email = '$Email' AND pass = '$Password'";
    $resultUser = mysqli_query($conn, $queryUser);
    $queryAdmin = "SELECT * FROM `admins` WHERE email = '$Email' AND password = '$Password'";
    $resultAdmin = mysqli_query($conn, $queryAdmin);
    $rowCountUser = mysqli_num_rows($resultUser);
    $rowCountAdmin = mysqli_num_rows($resultAdmin);
    session_start();
    if ($rowCountUser > 0) {
        $rowUser = mysqli_fetch_object($resultUser);
        $_SESSION['email'] = $rowUser->email;
        $_SESSION['pass'] = $rowUser->pass;
                ?>
        <script>
            window.location.href="index.php";
        </script>
        <?php
       // header("Location: index.php");
        exit();
    } elseif ($rowCountAdmin > 0) {
        $rowAdmin = mysqli_fetch_object($resultAdmin);
        $_SESSION['email'] = $rowAdmin->email;
        $_SESSION['password'] = $rowAdmin->password;
        $_SESSION['fname'] = $rowAdmin->fname;
        header("Location: admin/index.php");
        exit();
    } else {
        ?>
        <script>
            alert("Invalid Email or Password")
            window.location.href="login-page.php";
        </script>
        <?php
    }
}
?>