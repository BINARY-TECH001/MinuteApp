<?php
     $conn = mysqli_connect("localhost", "root", "", "minuteapp") or die("Error : " . mysqli_error($conn));
     $id = $_GET['id'];
     $query = "DELETE FROM main WHERE id='$id'";
     $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
     header("Location: minute.php");
?>