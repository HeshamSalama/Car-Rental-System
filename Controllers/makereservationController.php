<?php
include'../Models/reservation.php';
include'../Models/Client.php';
$object1= new reservation();
$object2= new Client();


session_start();
$userid=$_SESSION['id'];
$reservtype=$_POST['reserv_type'];
    $carid=$_POST['IDCAR'];
    $fdate=$_POST['fromdate'];
    $tdate=$_POST['todate'];
    $fhour=$_POST['fromhour'];
    $thour=$_POST['tohour'];
    $fhdate=$_POST['fromdate1'];
    $object1->set_user_id($userid);
    $object1->set_car_id($carid);
    $object1->set_start_date($fdate);
    $object1->set_end_date($tdate);
    $object1->set_start_houre($fhour);
    $object1->set_end_houre($thour);
    $object1->set_date_houre($fhdate);

    if($object2->check_avabilty($reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid) == 0)
        echo 0;
else if($object2->check_avabilty($reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid) == 1)
    if($object2->make_reservation($object1,$reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid))
        echo 1;
else
echo $object2->check_avabilty($reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid);






?>
