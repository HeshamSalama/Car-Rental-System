<?php
include'../Models/Client.php';

$object=new Client();
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$confirm_password = $_POST['copassword'];
$table_name="users";
$usertype = 1;  


$object->setfname($firstname);
$object->setlname($lastname);
$object->setphone($phone);
$object->setemail($email);
$object->setaddress($address);
$object->setpassword($password);
$object->setusertype($usertype);
$emaill=$object->getemail();

$array=array("fname"=>$object->getfname(),"lname"=>$object->getlname(),"phone"=>$object->getphone(),"email"=>$object->getemail(),
    "address"=>$object->getaddrss(),"password"=>$object->getpassword(),"User_type_id"=>$object->getusertype());


$val1=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$val2=!preg_match('/[^A-Za-z]/',$firstname);
$val3=!preg_match('/[^A-Za-z]/',$lastname);
$val4=!preg_match('/[^0-9]/',$phone);
$val5=strlen($phone);
$val6=strlen($password); 
if($password == $confirm_password&&$val1&&$val2&&$val3&&$val4&&$val5==11&&$val6>=6&&$address!="")
  {
    if($object->Regestration($array,$table_name,$emaill))
    {
        if($object->login($object->getemail(),$object->getpassword()))
        echo 1;
    }
    else
        echo 55;
        
  }
    else
{

    if(!$val2||$firstname=="")
    {
        echo 2;
    }
     else if(!$val3 ||$lastname=="")
    {
        echo 3;
    }
     else if(!$val4||$val5!=11||$phone=="")
    {
        echo 4;
    }
    else if($address=="")
            echo 5;
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
        else 
            echo 9;
}       
    
  
    

?>