<?php
session_start();
include'../Models/Admin.php';

$object2= new Admin();

if(isset($_POST['update-car'])){
  $car2 =$_POST['update-car'];
    $carname =$_POST['car-name'];
    $carquantity =$_POST['car-quantity'];
    $carPH =$_POST['car-PH'];
    $carPD =$_POST['car-PD'];
    $carengine =$_POST['car-engine'];
    $carmodel =$_POST['car-model'];
    if ($object2->updateCar($car2,$carname,$carPD,$carPH,$carmodel,$carengine,$carquantity)) {
        header('Location: ../pages/Admin-Profile.php');
    }
    else {
      echo "<script>
    alert('Invalid data');
    window.location.href='../pages/Admin-Profile.php';
    </script>";
    }

    }
    else if (isset($_POST['delete-car'])) {
      $car2 =$_POST['delete-car'];
      if ($object2->deleteCar($car2)) {
          header('Location: ../pages/Admin-Profile.php');
      }
    }
?>
