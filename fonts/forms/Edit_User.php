<?php

function Edit(){
    $id = 2;
if (isset($_POST['update-info'])){
require('../db/db_connect.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

    //echo "$fname,$lname,$phone,$email,$password,$confirm_password";
    
if ($password == $confirm_password)
{
$sql = "UPDATE users SET fname='$fname',lname='$lname',phone='$phone',email='$email',password='$password' WHERE id = $id ";   
}
if (mysqli_query($sql) === TRUE){
 echo"Record updated successfully";   
}else{
 echo "Error updating record: " . $db_connect->error;   
}
}
}
Edit();
header("Location:updateuser.php");
?> 
