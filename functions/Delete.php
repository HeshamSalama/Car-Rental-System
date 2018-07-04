<?php

if(isset($_POST['DeleteUser']))
{
    $id = $_POST['DeleteUser'];
    $table = "users";
    $column = "id";
}
else if(isset($_POST['DeleteCar']))
{
    $id = $_POST['DeleteCar'];
    $table = "cars";
    $column = "car_id";

}

else if(isset($_POST['DeleteCar']))
{
    $id = $_POST['DeleteCar'];
    $table = "report";
    $column = "Report_Number";

}
else if(isset($_POST['DeleteCar']))
{
    $id = $_POST['DeleteCar'];
    $table = "feedback";
    $column = "id";

}
function Delete($id,$table,$column){
    
    
     $sql="DELETE FROM $table WHERE $column='$id'";
        if(mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql))
        {
            return true;          
        }

    else
        return false;
} 
if(Delete($id,$table,$column))
    header("Location:../pages/Admin-Profile.php");
else 
    echo 0;

?>
