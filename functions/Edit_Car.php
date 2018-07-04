<?php
    $id = $_POST['id'];
function Edit($id){
    include('../db/db_connect.php');

$car_id=$_POST['id'];
$car_name=$_POST['name'];
$car_model=$_POST['model'];
$car_quantity=$_POST['quantity'];
$price_houre=$_POST['pricehour'];
$price_day=$_POST['priceday'];
$engine=$_POST['engine'];
$val1=filter_input(INPUT_POST,"quantity",FILTER_VALIDATE_INT);
$val2=filter_input(INPUT_POST,"pricehour",FILTER_VALIDATE_INT);
$val3=filter_input(INPUT_POST,"priceday",FILTER_VALIDATE_INT);
$val4=filter_input(INPUT_POST,"engine",FILTER_VALIDATE_INT);
    $sql = "UPDATE cars SET car_name='$car_name',car_model_year='$car_model',quantity='$car_quantity',
price_per_hour='$price_houre',price_per_day='$price_day',engine='$engine' WHERE car_id = '$id'";
    if(!preg_match('/[^A-Za-z0-9]/',$car_id )&&$val1&&$val2&&$val3&&$val4&&!preg_match('/[^A-Za-z0-9]/',$car_name)&&!preg_match('/[^0-9]/',$car_model)&&strlen($car_model)==4&&$car_name!="")
{
	if(mysqli_query($db_connect,$sql));
                echo 1;
}
else
{
    
         if(preg_match('/[^A-Za-z0-9]/',$car_name)||$car_name=="")
        echo 3;
    else if(preg_match('/[^0-9]/',$car_model)||strlen($car_model)!=4||$car_model=="")
        echo 4;
    else if(!$val1||$car_quantity=="")
    echo 5;
    else if(!$val2||$price_houre=="")
        echo 6;
    else if(!$val3||$price_day=="")
         echo 7;
    else if(!$val4||$engine=="")
        echo 8;

    
}
}
Edit($id);

?>
