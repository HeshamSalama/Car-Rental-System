<?php 

include'../Models/User.php';
$user = new User();
$email = $_POST['email'];
if($user->forget($email))
echo 1;
else 
    echo 0;
?>