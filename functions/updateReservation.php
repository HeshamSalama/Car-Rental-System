<?php
session_start();
$userid=$_SESSION['id'];
    if(isset($updatereser))
    {
        $reser_type;
        $carid;
        $reservationID=$updatereser;
        $sql="SELECT reservation_type,Car_id FROM reservation WHERE ID_reservation='$reservationID'";
        $s=mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
        while ($rows=mysqli_fetch_array($s)){
            $reser_type=$rows['reservation_type'];
            $carid=$rows['Car_id'];
        }
        if($reser_type=='H')
        {
            $fhdate;
            $fhour;
            $thour;
        }elseif ($reser_type=='D') {
            $fdate;
            $tdate;
    }
    include 'makereservation.php';
    $sql4="DELETE  FROM reservation WHERE ID_reservation='$reservationID'";
    mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql4);
    }
?>