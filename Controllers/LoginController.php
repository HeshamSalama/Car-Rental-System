<?php 
include '../Models/User.php';

$obj = new User();

 $username = $_POST['email'];
 $password = $_POST['password'];
$val1=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$val2=strlen($password);


if($val1&&$val2>=6)
{
    $obj->setemail($username);
    $obj->setpassword($password);
	if($obj->login($obj->getemail(),$obj->getpassword()))
        echo 1;
}
else
    echo 0;


?>
