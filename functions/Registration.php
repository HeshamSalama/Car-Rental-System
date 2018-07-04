
<?php


function add_user()
{
require('../db/db_connect.php');

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$password_NOENC=$_POST['password'];
$confirm_password_NOENC = $_POST['confirmPassword'];
$password = md5($password_NOENC);
$confirm_password=md5($confirm_password_NOENC);


$val=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

$sql="INSERT INTO users(fname,lname,password,phone,address,email)VALUES('$firstname','$lastname','$password','$phone','$address','$email')";
$select = "Select * from users where email ='$email' ";
    $selectQuery = mysqli_query($db_connect,$select);
    $row = mysqli_num_rows($selectQuery);
    if($row==0)
    {
     if($password == $confirm_password&&$val&&!preg_match('/[^A-Za-z]/',$firstname )&&!preg_match('/[^A-Za-z]/',$lastname )&&!preg_match('/[^0-9]/',$phone)&&strlen($phone)==11&&strlen($password)>=6&&$address!="")
{
	if(mysqli_query($db_connect,$sql));
               include('../functions/login.php');
}
else
{

    if(preg_match('/[^A-Za-z]/',$firstname) || $firstname=="")
    {
        echo 2;
    }
     else if(preg_match('/[^A-Za-z]/',$lastname )||$lastname=="")
    {
        echo 3;
    }
     else if(preg_match('/[^0-9]/',$phone)||strlen($phone)!=11||$phone=="")
    {
        echo 4;
    }
    else if($address=="")
            echo 5;
    else if(!$val||$email=="")
    {
        echo 6;
    }
    else if(strlen($password)<6||$password=="")
    {
        echo 7;
    }
    else if($password!=$confirm_password)
            echo 8;
}       
    }
    else
        echo 6;




}

add_user();
?>
