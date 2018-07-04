<?php 

include '../Models/Admin.php';
$object = new Admin();


if (isset($_POST['delete_feedback'])){

	$feedback_id = $_POST['delete_feedback'];

	echo $feedback_id;

	$feedback=$object->delete_feedback($feedback_id);

	if($feedback == true)
	{
		header('Location: ../pages/Admin-Profile.php');
		
	}

}


?>