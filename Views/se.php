 <?php
include 'layouts/services.php'
 $sql="SELECT car_name,car_model_year,engine,price_per_hour FROM cars WHERE '$carid'=$rows[car_id]";
                         $s=mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
                         while ($rows=mysqli_fetch_array($s)){
                        $_SESSION['car_name'] = $rows['car_name'];
                        $_SESSION['car_model_year'] = $rows['car_model_year'];
                        $_SESSION['engine'] = $rows['engine'];
                        $_SESSION['price_per_hour'] = $rows['price_per_hour'];
                    }
?>