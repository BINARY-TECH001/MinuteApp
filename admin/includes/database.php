<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "MinuteApp";


    $conn = mysqli_connect($dbHost,  $dbUser, $dbPass, $dbName);

    if(!$conn){
        die("database connection failed");
    }
?>