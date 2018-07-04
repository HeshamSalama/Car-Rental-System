<?php

        session_start();

        $quantity;
        $carname;
        $i;
        $validation=0;
        $numberofrow;
        if(isset($_POST['Reserve2'])){
        $carid=$_POST['IDCAR'];
        $fdate=$_POST['fromdate'];
        $tdate=$_POST['todate'];
        $fhour=$_POST['fromhour'];
        $thour=$_POST['tohour'];
        $fhdate=$_POST['fromdate1'];
        
        $_SESSION['car_id1'] = $carid;
        echo  $_SESSION['car_id1'];

        $sql="SELECT quantity,car_name FROM cars WHERE '$carid'=car_id";
        $s=mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
        while ($rows=mysqli_fetch_array($s)){
            $quantity=$rows['quantity'];
            $carname=$rows['car_name'];
        
        }
        $sql3="SELECT * FROM reservation WHERE car_id='$carid'";
        $x=mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql3);
        $numberofrow=mysqli_num_rows($x);
        
        if($quantity>$numberofrow)
        {
            $i=$numberofrow+1;
            $validation=1;
            
        }else{
        for($i=1;$i<=$quantity;$i++){
         if(isset($_POST['reserv-type'])&&$_POST['reserv-type']=='hour'){
             $fromdate="$fhdate $fhour";
            $todate="$fhdate $thour";

         }elseif (isset($_POST['reserv-type'])&&$_POST['reserv-type']=='day') {
            $fromdate="$fdate 12:00:00";
            $todate="$tdate 12:00:00";
            }
            $sql2="SELECT Start_Date,End_Date,sidecar_id FROM reservation  WHERE '$carid'=car_id and sidecar_id='$carname$i' ORDER BY Start_Date ASC";
            $_SESSION['car_name'] = $carname;
            $a=mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql2);
            $sd;
            $StartDate_array = array();
            $EndDate_array = array();
            $counter=0;
            $counter2=0;
            
        while($rows=mysqli_fetch_array($a)){
            $sd=$rows['Start_Date'];
            $ed=$rows['End_Date'];
            $StartDate_array[$counter]=$sd;
            $EndDate_array[$counter2]=$ed;
            $counter++;
            $counter2++;
        
        }
        if($validation==1)
        {
                break;
        }
        if(strcmp($fromdate, $StartDate_array[0])<0&&strcmp($todate, $StartDate_array[0])<0){
            $validation=1;
        }
        elseif (strcmp($fromdate, $EndDate_array[0])>0 && strcmp($fromdate, $EndDate_array[$counter-1])<0) {
                for($j=0;$j<$counter-1;$j++){
                    if(strcmp($fromdate,$EndDate_array[$j])>0&&  strcmp($todate, $StartDate_array[$j+1])<0)
                    {
                        $validation=1;
                    }
                }
                
        }elseif (strcmp($fromdate, $EndDate_array[$counter-1])>0 && strcasecmp($todate, $EndDate_array[$counter-1])) {
            $validation=1;
            
            }
        if($validation==1)
        {
                break;
        }
        }
                  
        }
       
        
       }
        
    header("Location:../Views/Checkout.php");
?>
