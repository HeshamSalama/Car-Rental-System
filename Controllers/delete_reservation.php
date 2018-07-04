<?php

include '../Models/Admin.php';

$object = new Admin();



if (isset($_POST['delete_reservation'])){

	$reservation_id = $_POST['delete_reservation'];

	echo $reservation_id;

	$reservation=$object->delete_reservation($reservation_id);

	if($reservation)
	{
		header('Location: ../pages/Admin-Profile.php');
		
		
	}
}


?>
