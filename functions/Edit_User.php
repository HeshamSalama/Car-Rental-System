<?php
    $id = $_POST['id'];
function Edit($id){
    include('../db/db_connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address=$_POST['address'];
$password_NOENC=$_POST['password'];
$confirm_password_NOENC = $_POST['confirmPassword'];
$password = md5($password_NOENC);
$confirm_password=md5($confirm_password_NOENC);
        $val=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
if ($password == $confirm_password&&$val&&!preg_match('/[^A-Za-z]/',$fname )&&!preg_match('/[^A-Za-z]/',$lname )&&!preg_match('/[^0-9]/',$phone)&&strlen($phone)==11&&strlen($password)>=6&&$fname!=""&&$lname!=""&&$address!=""&&$password_NOENC!="")
{
$sql = "UPDATE users SET fname='$fname',lname='$lname',phone='$phone',address='$address',email='$email',password='$password' WHERE id = $id ";   

if (mysqli_query($db_connect,$sql))
{
            include("../functions/login.php");
}
}
    else 
    {
        if(preg_match('/[^A-Za-z]/',$fname )||$fname=="")
    {
        echo 2;
    }
    else if(preg_match('/[^A-Za-z]/',$lname )||$lname=="")
    {
        echo 3;
    }
          else if(preg_match('/[^0-9]/',$phone)||strlen($phone)!=11||$phone=="")
    {
        echo 4;
    }
      else if($address=="")
    {
        echo 5;
    }  
    else if(!$val||$email=="")
    {
        echo 6;
    }
  
    else if(strlen($password_NOENC)<6||$password_NOENC=="")
    {
        echo 7;
    }
        else if($password_NOENC!=$confirm_password_NOENC)
            echo 8;
    }
      }
Edit($id);

?>