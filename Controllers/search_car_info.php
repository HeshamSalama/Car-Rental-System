<?php

$car_id=$_POST['id'];    
if(empty($car_id))
{
    echo 2;
}
 else {
    include'../Models/Cars.php';
include'../Models/Admin.php';
$object=new Cars();
$object2=new Admin();
$object->setid($car_id);
if($object2->search_car($object))
    echo 1;
     else
         echo 0;
 }
?>

