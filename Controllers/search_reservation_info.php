<?php
include'../Models/reservation.php';
include'../Models/Admin.php';
$object=new reservation();
$object2=new Admin();

    if(isset($_POST['id']))
    {
        $reservatin_id=$_POST['id'];
    }
$object->setid($reservatin_id);
$val1=!preg_match('/[^0-9]/',$reservatin_id );
if($val&&$car_id!="")
{
    $object2->search_car($object);
    echo 1;
}
 else {
echo 2;    
}
?>

