<?php
$input_id = $_POST['id'];
  function search($input_id )
{
       require '../db/db_connect.php';

     if($input_id != "" &&!preg_match('/[^A-Za-z0-9]/',$input_id))
     {
         $sql = "SELECT * FROM cars where car_id =  '$input_id'";
         $query = mysqli_query($db_connect,$sql) ;
         if(mysqli_num_rows($query) == 1)
             {  
              while ( $row = mysqli_fetch_array($query)) 
                      {
                  session_start();
                  $_SESSION['car_name'] = $row['car_name'];
                  $_SESSION['car_id'] = $row['car_id'];
                  $_SESSION['car_model_year'] = $row['car_model_year'];
                  $_SESSION['quantity'] = $row['quantity'];
                  $_SESSION['price_per_hour'] = $row['price_per_hour'];
                  $_SESSION['price_per_day'] = $row['price_per_day'];
                  $_SESSION['engine'] = $row['engine'];
                      } 
                               echo 1 ;

             } 
             else
                 {
                  echo 0; 
                 }
     }
 else {
         echo 2 ; 
     }
}
 search($input_id);
?>

