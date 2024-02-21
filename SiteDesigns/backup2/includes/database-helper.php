<?php
    $DB_NAME = "coffeeshop";
    $DB_SERVER = "localhost";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $conn = mysqli_connect($DB_SERVER , $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

    if(!$conn)
    {
        die("Connect failed" . mysqli_connect_error());
    }
    else
    {
    //    echo "Connection Successful";
    }

?>
