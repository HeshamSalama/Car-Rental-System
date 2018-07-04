<?php

session_start();
	$arr['feedback'] = $_POST['feedback'];
	$arr['date'] = date("Y/m/d");
	$arr['id'] =$_SESSION['id'];
try {
	
	require '../Models/feedback.php';
    if($arr['feedback']!="")
    {
        $obj = new myfeedback($arr);
	if($obj)
	{
		echo 1;
	}
    }
    else
        echo 0;
	
	
} catch (Exception $e) {
	echo "Error";
}

?>