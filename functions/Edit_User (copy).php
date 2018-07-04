<?php
    $id = $_POST['id'];
function Edit($id){
    include('../db/db_connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$confirm_password = $_POST['confirmPassword'];
if (isset($_POST['updateUser']))
{
$sql = "UPDATE users SET fname='$fname',lname='$lname',phone='$phone',address='$address',email='$email',password='$password' WHERE id = $id ";   

if (mysqli_query($db_connect,$sql))
{
	echo "Updated Successfully";
}
else
echo "Updated Failed";
}
      }
Edit($id);

?>
