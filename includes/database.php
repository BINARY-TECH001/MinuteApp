<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "minuteapp";


    $conn = mysqli_connect($dbHost,  $dbUser, $dbPass, $dbName);

    if(!$conn){
        die("database connection failed");
    }
?>