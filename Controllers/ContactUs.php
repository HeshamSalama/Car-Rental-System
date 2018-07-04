<?php
include"../Models/User.php";
$user = new User();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
$emailCheck=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

if($name!="" &&!preg_match('/[^A-Za-z]/',$name)&&$email!=""&&$emailCheck&&$subject!=""&&!preg_match('/[^A-Za-z]/',$subject)&&$message!="")
{
    if($user->contact($email , $subject , $message))
        echo 1;
    else
         echo 6;
}
    else
    {
        
        if(preg_match('/[^A-Za-z]/',$name )||$name=="")
        echo 2;
        else if(!$emailCheck||$email=="")
        echo 3;
        else if(preg_match('/[^A-Za-z]/',$subject )||$subject=="")
        echo 4;
        else if($message=="")
        echo 5;
    }
?>