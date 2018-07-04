<?php
include '../Models/User.php';
$object=new User();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$confirm_password = $_POST['confirmPassword'];
$object->setfname($fname);
$object->setlname($lname);
$object->setphone($phone);
$object->setemail($email);
$object->setaddress($address);
$object->setpassword($password);
$column="id";
session_start();
    $valuee=$_SESSION['id'];
    $table_name="users";
$array=array("fname"=>$object->getfname(),"lname"=>$object->getlname(),"phone"=>$object->getphone(),"email"=>$object->getemail(),
    "address"=>$object->getaddrss(),"password"=>$object->getpassword());
    
$val1=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$val2=!preg_match('/[^A-Za-z]/',$fname);
$val3=!preg_match('/[^A-Za-z]/',$lname);
$val4=!preg_match('/[^0-9]/',$phone);
$val5=strlen($phone);
$val6=strlen($password);


if ($password == $confirm_password&&$val1&&$val2&&$val3&&$val4&&$val5==11&&$val6>=6&&$fname!=""&&$lname!=""&&$address!=""&&$password!=""&&$confirm_password!="")
{
    if($object->Edit_profile($array,$table_name,$column,$valuee))
    echo 1;
    else 
        echo 0;

}
else 
    {
        if(!$val2||$fname=="")
    {
        echo 2;
    }
    else if(!$val3||$lname=="")
    {
        echo 3;
    }
          else if(!$val4||$val5!=11||$phone=="")
    {
        echo 4;
    }
      else if($address=="")
    {
        echo 5;
    }  
    else if(!$val1||$email=="")
    {
        echo 6;
    }
  
    else if($val6<6||$password=="")
    {
        echo 7;
    }
        else if($password!=$confirm_password)
            echo 8;
    }
    

?>