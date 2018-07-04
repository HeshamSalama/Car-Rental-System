<?php

$data['id'] = $_POST['id'];
$data['title'] = $_POST['title'];
$data['text'] = $_POST['text'];
 if($data['title'] =="")
        echo 2;
   else if($data['text']=="")
        echo 3;
else
{
    
  include'../Models/Admin.php';
$AdminObject = new Admin();
    if($AdminObject->EditLayout($data))
    echo 1;
}






?>