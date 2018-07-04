    

<?php
function add_car()
{
    
require('../db/db_connect.php');
$car_id=$_POST['id'];
$car_name=$_POST['name'];
$car_model=$_POST['model'];
$car_quantity=$_POST['quantity'];
$price_houre=$_POST['pricehour'];
$price_day=$_POST['priceday'];
$engine=$_POST['engine'];
/*$dir = realpath(dirname(__FILE__) . '/../Images/Cars/');
    $path = $_FILES['photo']['tmp_name'] ;
    $name= $_FILES['photo']['name'] ;
    $size = $_FILES['photo']['size'] ;
    $type = $_FILES['photo']['type'] ;
    move_uploaded_file($path,$dir.$name);
    $photo = "Images/Cars/"."$name";*/
$val1=filter_input(INPUT_POST,"quantity",FILTER_VALIDATE_INT);
$val2=filter_input(INPUT_POST,"pricehour",FILTER_VALIDATE_INT);
$val3=filter_input(INPUT_POST,"priceday",FILTER_VALIDATE_INT);
$val4=filter_input(INPUT_POST,"engine",FILTER_VALIDATE_INT);


$sql="INSERT INTO cars(car_id,car_name,car_model_year,quantity,price_per_hour,price_per_day,engine)VALUES('$car_id','$car_name','$car_model','$car_quantity','$price_houre','$price_day','$engine')";
$select = "Select * from cars where car_id ='$car_id' ";
    $selectQuery = mysqli_query($db_connect,$select);
    $row = mysqli_num_rows($selectQuery);
    if($row==0)
    {
    if(!preg_match('/[^A-Za-z0-9]/',$car_id )&&$val1&&$val2&&$val3&&$val4&&!preg_match('/[^A-Za-z0-9]/',$car_name)&&!preg_match('/[^0-9]/',$car_model)&&strlen($car_model)==4)
{
	if(mysqli_query($db_connect,$sql));
                echo 1;
}
else
{
    if(preg_match('/[^A-Za-z0-9]/',$car_id )||$car_id=="")
        echo 2;
        else if(preg_match('/[^A-Za-z0-9]/',$car_name)||$car_name=="")
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
    else 
        echo 2;

}
add_car();

?>