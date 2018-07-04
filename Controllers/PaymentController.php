<?php

//require '../views/Checkout.php';



$arr['Selected1'] = $_POST['selected'];

if(isset($_POST['submit'])){
$arr['holder1'] = $_POST['holder'];
$arr['number1'] =$_POST['number'];
$arr['ccv1'] =$_POST['ccv'];

$arr['year'] =$_POST['year'];
$arr['month'] =$_POST['month'];



if(preg_match('/[^0-9]/',$arr['holder1'] )||$arr['holder1']=="")
        echo 2;
else if(preg_match('/[^A-Za-z]/',$arr['number1'])||$arr['number1']==""||strlen($arr['number1'])!=16)
        echo 3;
else if(preg_match('/[^A-Za-z]/',$arr['ccv1'])||strlen($arr['ccv1'])!=3||$arr['ccv1']=="")
        echo 4;

try{

	include '../Models/Database.php';
	include '../Models/Payment.php';
	$pay = new Payment($arr,1);
	if($pay == true)
	{
		echo 1;
		header("Location:../index.php");
		
		
	}
	else
	{
		echo 2;
	}



}catch(Exception $exc)
{
	$exc->echo("Error!!");
}

}
else {
	echo 3;
}


?>