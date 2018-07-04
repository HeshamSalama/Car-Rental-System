<?php

  function search($input_id) {

     $inputid = filter_input(INPUT_POST, $input_id, FILTER_VALIDATE_INT);
     if(isset($_POST['search']))
     {
	require('../db/db_connect.php');
         $sql = "SELECT * FROM cars where car_id =  $inputid";
         $query = mysqli_query($db_connect,$sql);
         while ( $row = mysqli_fetch_array($query)) {
             session_start();
             $_SESSION['car_name'] = $row['car_name'];
             $_SESSION['car_id'] = $row['car_id'];
             $_SESSION['car_model_year'] = $row['car_model_year'];
             $_SESSION['quantity'] = $row['quantity'];
             $_SESSION['price_per_hour'] = $row['price_per_hour'];
             $_SESSION['price_per_day'] = $row['price_per_day'];
             $_SESSION['price_per_month'] = $row['price_per_month'];


    }

    mysqli_close($db_connect);
}
    }
 search("id");

//  header("Location:../forms/searchcar.php");

?>
