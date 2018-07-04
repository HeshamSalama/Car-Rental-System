<?php
if (isset($_POST['fname'], $_POST['lname'], $_POST['phone'],$_POST['email'],$_POST['address'],$_POST['password'],$_POST['confirmPassword'],$_POST['submit'],$_POST['id'])){
$id=$_POST['id'];    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$confirm_password = $_POST['confirmPassword'];
$button=$_POST['update-info'];
$table_name="users";
}

$array=array("fname"=>$firstname,"lname	"=>$lastname,"phone"=>$phone,"email"=>$email,
    "address"=>$address,"password"=>$password);
$val1=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$val2=!preg_match('/[^A-Za-z]/',$fname);
$val3=!preg_match('/[^A-Za-z]/',$lname);
$val4=!preg_match('/[^0-9]/',$phone);
$val5=strlen($phone);
$val6=strlen($password);
$column="id";
session_start();
$value=$_SESSION['id'];
?>