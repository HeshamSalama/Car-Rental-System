<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "carrental";

$conn = new mysqli($servername,$username,$password,$db_name);
 if($conn->connect_error)
 {
 die("Failed Connection" . $conn->connect_error);
 }
 ?>
