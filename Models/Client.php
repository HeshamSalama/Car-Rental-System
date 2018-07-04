<?php
include"User.php";
class Client extends User{




    private   $car_n;
    private   $vali;
    private $quantity = 0;
    private $fdate;
    private $first_date;
    private $to_date;
    private $carid;

   public function Edit_profile_User(){
       $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
        $object=new User();
$array=array("fname"=>$object->getfname(),"lname"=>$object->getlname(),"phone"=>$object->getphone(),"email"=>$object->getemail(),
    "address"=>$object->getaddrss(),"password"=>$object->getpassword());
    $object=new User();
    $object->Edit($array,$button,$table_name,$column,$valuee);



}
public function Regestration($array,$table_name,$emaill){
    $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);

  $object=new User();

$select = "Select * from users where email ='$emaill' ";
$selectQuery = mysqli_query($DatabaseObject->connection,$select);
$row = mysqli_num_rows($selectQuery);
if($row==0)
{
    $object->Add($array,$table_name);
    return true;
}
    else
        return false;
}

public function check_avabilty($reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid)
{
    $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
        $carname;
        $i;
        $validation=0;
        $numberofrow;
    $now=date("Y-m-d H:i:s");



        $sql="SELECT quantity,car_name FROM cars WHERE car_id='$carid'";
        $s=mysqli_query($DatabaseObject->connection,$sql);
        while ($rows=mysqli_fetch_array($s)){
            $this->quantity=$rows['quantity'];
            $carname=$rows['car_name'];
        }
                $sql3="SELECT * FROM reservation WHERE car_id='$carid'";
        $x=mysqli_query($DatabaseObject->connection,$sql3);
        $numberofrow=mysqli_num_rows($x);
        if($this->quantity>$numberofrow)
        {
            $i=$numberofrow+1;
            $this->car_n=$carname.$i;
            if($reservtype=='hour' || $reservtype=='H'){
             $fromdate="$fhdate $fhour";
            $todate="$fhdate $thour";
            }
            elseif ($reservtype=='day' || $reservtype=='D') {
            $fromdate="$fdate 12:00:00";
            $todate="$tdate 12:00:00";

            }

                    if(strtotime($fromdate)>= strtotime($todate) || strtotime($now)>strtotime($fromdate)){
         $validation=2; // Wrong time
}
            else {
            $validation=1; // right time
            }




        }else {


        for($i=1;$i<=$this->quantity;$i++){
         if($reservtype=='hour' || $reservtype=='H'){
             $fromdate="$fhdate $fhour";
            $todate="$fhdate $thour";


         }elseif ($reservtype=='day'  || $reservtype=='D') {
            $fromdate="$fdate 12:00:00";
            $todate="$tdate 12:00:00";

            }
            $this->car_n=$carname.$i;
$sql2="SELECT Start_Date,End_Date,sidecar_id FROM reservation  WHERE car_id='$carid' and sidecar_id='$this->car_n' ORDER BY Start_Date ASC";
            $a=mysqli_query($DatabaseObject->connection,$sql2);
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
             if(strcmp($fromdate, $todate)<0 && strcmp($fromdate,$now)>0){
     if(strtotime($fromdate)<strtotime($StartDate_array[0]) && strtotime($todate) <= strtotime($StartDate_array[0])){
            $validation=1;
        }
        elseif (strtotime($fromdate) >= strtotime($EndDate_array[0]) && strtotime ($fromdate)< strtotime($EndDate_array[$counter-1])) {
                for($j=0;$j<$counter-1;$j++){
                    if(strtotime($fromdate)>=strtotime( $EndDate_array[$j])&&  strtotime($todate) <= strtotime ($StartDate_array[$j+1]))
                    {
                        $validation=1;
                    }
                }

        }elseif (strtotime($fromdate)>=strtotime( $EndDate_array[$counter-1]) && strtotime($todate)>strtotime ($EndDate_array[$counter-1])) {
            $validation=1;

            }
        }
        if($validation==1)
        {
                break;
        }
        }

        }


    $this->vali=$validation;
return $validation;

}
public function make_reservation(reservation $reserve,$reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid)
{
    $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
    $this->check_avabilty($reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid);
    $car_name=$this->car_n;
   $validation= $this->vali;

    if($validation==1)
    {
        $days=0;
        $hours=1;
        $first_date;
        $to_date;
        $fhour;
        $thour;
        $reser_type;
        $reservation_type;
        $reservtype;



        if((isset($reservtype)&&$reservtype=='day')){
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
        $this->first_date=$first_date;
        $this->to_date=$to_date;
        $reservation_type='D';

        }
        elseif ((isset($reservtype)&&$reservtype=='hour')) {
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
            $this->first_date=$first_date;
            $this->to_date=$to_date;


    }
        $sql2 = "SELECT * FROM cars where Car_id='$carid'";
         $tt2=mysqli_query($DatabaseObject->connection,$sql2);
        while ($rows=mysqli_fetch_array($tt2))
        {
             $_SESSION['car_name']=$rows['car_name'];
              $_SESSION['car_model_year']=$rows['car_model_year']; 
              $_SESSION['engine']=$rows['engine'];
               $_SESSION['start_date']=$this->first_date;
              $_SESSION['end_date']=$this->to_date;
               $_SESSION['price_per_hour']=$rows['price_per_hour'];
              $_SESSION['NumberOfHours']=$hours;
               $_SESSION['total']=$rows['price_per_hour']*$hours;
        }
         

        $sql="INSERT INTO reservation (User_id,Car_id,sidecar_id,Start_Date,End_Date,NumberOfHours,reservation_type) VALUES('$userid','$carid','$car_name','$this->first_date','$this->to_date','$hours','$reservation_type')";
        $tt=mysqli_query($DatabaseObject->connection,$sql);
        if($tt)
        return true;


   }
     else {

         return false;
}



}
public function deleteReservation(reservation $reserve,$delete2,$userid){
  if (isset($delete2)) {
                $sql = $sql = "DELETE FROM reservation WHERE ID_reservation='$delete2'";
              $tt =  mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
              if ($tt) {
              return true;
              }
              else {
                return false;
              }
  }
}
public function updateReservation(reservation $reserve,$reserve2,$fdate,$tdate,$fhour,$thour,$fhdate,$userid){

        $numofhours=0;
        $days;
        if(isset($reserve2))
        {
            $reservtype;
            $carid;
            $reservationID;
            $sql="SELECT * FROM reservation WHERE ID_reservation='$reserve2'";
            $s=mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
            while ($rows=mysqli_fetch_array($s)){
                $carid=$rows['Car_id'];
                $sidecarid=$rows['sidecar_id'];
                $reservtype=$rows['reservation_type'];
            }
            if($reservtype=='H' || $reservtype=="hour" ){
            $fhdate;
            $fhour;
            $thour;
            $time1=$thour;
            $a=$fhour;


                while($time1!=$fhour)
                {
                    $time1=  strtotime(" - 1 hours",  strtotime($time1));
                    $time1=date('g:i a',$time1);
                    $time1= date("H:i",  strtotime("$time1"));
                    $numofhours++;


                }

            $startdate="$fhdate $fhour";
            $enddate="$fhdate $thour";



            }
            elseif ($reservtype=='D' || $reservtype=="day") {
            $fdate;
            $tdate;
            $date1=$tdate;
            $days=0;
            while ($fdate!=$date1 ){
              if($fdate > $tdate)
              {
              return false;
              }
              else
              {
                $date1= date('Y-m-d', strtotime($date1. ' - 1 days'));
                $days++;
              }

            }
            $numofhours=$days*24;
            $startHour=$endHour="12:00:00";
            $startdate="$fdate $startHour";
            $enddate="$tdate $endHour";

        }

          $this->check_avabilty($reservtype,$carid,$fdate,$tdate,$fhour,$thour,$fhdate,$userid);
                     $validation =1;
                     $validation=$this->vali;
                     echo $validation;


            $sql5="UPDATE reservation SET sidecar_id='$this->car_n',Start_Date='$startdate',End_Date='$enddate',NumberOfHours='$numofhours',reservation_type='$reservtype' WHERE ID_reservation='$reserve2'";

          $tt =  mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql5);
           if ($tt) {
          return true;
           }
           else {
             return false;
           }

            }
        }

}
?>
