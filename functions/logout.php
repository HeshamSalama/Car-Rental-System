<?php
session_start();
  $_SESSION['check']=1; 
session_destroy();
header("Location:../index.php");




?>

