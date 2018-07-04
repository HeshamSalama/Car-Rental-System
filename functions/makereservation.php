<?php
    include ('checkavailability.php');
    include '../Views/Checkout.php';
    if($validation==1){
    if(isset($reserve2)||$_POST['update-res']){
        $days=0;
        $hours=1;
        $first_date;
        $to_date;
        $fhour;
        $thour;
        $reser_type;
        $reservation_type;
        $reservtype;
        if((isset($reservtype)&&$reservtype=='day')||$reser_type=='D'){
                $date1= $tdate;

            while ($fdate!=$date1){
        $date1= date('Y-m-d', strtotime($date1. ' - 1 days'));
        $days++;
        }
        $hours=$days*24;
        $fhour="12:00:00";
        $thour= "12:00:00";
        $first_date="$fdate $fhour";
        $to_date="$tdate $thour";
        $reservation_type='D';

        }
        elseif ((isset($reservtype)&&$reservtype=='hour')||$reser_type=='H') {
            $time1=$fhour;
            $hours=0;
        $reservation_type='H';
            while($time1!=$thour)
            {
                $time1=  strtotime(" + 1 hours",  strtotime($time1));
                $time1=date('g:i a',$time1);
                $time1= date("H:i",  strtotime("$time1"));
                $hours++;

            }
            $thdate=$fhdate;
            $first_date="$fhdate $fhour";
            $to_date="$thdate $thour";

    }
        $sql="INSERT INTO reservation (User_id,Car_id,sidecar_id,Start_Date,End_Date,NumberOfHours,reservation_type) VALUES($userid,$carid,'$carname$i','$first_date','$to_date',$hours,'$reservation_type')";
        mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);


        $sql1="INSERT INTO report (User_id,Car_id,Report_Date) VALUES($userid,$carid,$first_date)";
        echo "gogogo";
        mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql1);



        echo 1;//reservation done
    }
   }
     else {
    echo 0;//???? ????? ???? ????? ?? ????
}
?>
