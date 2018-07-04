<?php
session_start();
include'../Models/reservation.php';
include'../Models/Client.php';
$object1= new reservation();
$object2= new Client();


$userid=$_SESSION['id'];

      echo $userid;
        if(isset($_POST['cancel'])){
          $delete2 =$_POST['cancel'];
          $object1->set_user_id($userid);
          if  ($object2->deleteReservation($object1,$delete2,$userid)){

            header('Location: ../pages/Profile.php');
          }
        }

      else  if(isset($_POST['update-res'])){

    $reserve2=$_POST['update-res'];
    if(isset($_POST['todateupdate'],$_POST['fromdateupdate']))
    {
            $tdate=$_POST['todateupdate'];
            $fdate=$_POST['fromdateupdate'];

    }      else{
        $tdate="";
        $fdate="";
    }
        if(isset($_POST['fromhourupdate'],$_POST['tohourupdate'],$_POST['fromdate1update']))
    {
    $fhour=$_POST['fromhourupdate'];
    $thour=$_POST['tohourupdate'];
    $fhdate=$_POST['fromdate1update'];

    }      else{
        $fhour="";
        $thour="";
        $fhdate="";
    }

    $object1->set_user_id($userid);
    $object1->set_start_houre($fhour);
    $object1->set_end_houre($thour);
    $object1->set_date_houre($fhdate);



  if  ($object2->updateReservation($object1,$reserve2,$fdate,$tdate,$fhour,$thour,$fhdate,$userid)){

    header('Location: ../pages/Profile.php');
  }
  else {
    echo "<script>
  alert('Invalid date');
  window.location.href='../pages/Profile.php';
  </script>";
  }

        }




?>
