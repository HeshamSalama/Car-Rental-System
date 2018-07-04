
<div id="res-slider" class="owl-carousel owl-theme">
    <?php
    $id=$_SESSION['id'];
    $SQL= "SELECT * FROM reservation,cars where User_id = '$id' and reservation.Car_id = cars.car_id";
    $query=mysqli_query(mysqli_connect("localhost","root","","carrental"),$SQL);
        $num = mysqli_num_rows($query);
    if($num == 0)
        {echo "<h2 class='text-blue text-center'>Sorry , You don't have any Reservation</h2>";}
    else

        while ($rows=mysqli_fetch_array($query))  : ?>

            <div class="item">
                <form method="POST" id="updateRes" action="../Controllers/UpdateReservation.php">
    <div class="image">
                    <img  src="../<?php echo $rows['photo']; ?>">
                </div>
                <div class="text">
                    <table>
                        <tr>
                            <td class="text-left">ID</td>
                            <td class="text-right"><?php echo $rows['ID_reservation']; ?><td>
                        </tr>
                        <tr>
                            <td class="text-left">Name</td>
                            <td class="text-right"><?php echo $rows['car_name']; ?><td>
                        </tr>
                        <tr>
                            <td class="text-left">Model</td>
                            <td class="text-right"><?php echo $rows['car_model_year'] ?><td>
                        </tr>
                        <tr>
                            <td class="text-left">Engine</td>
                            <td class="text-right"><?php echo $rows['engine'] ?><td>
                        </tr>
                        <?php if($rows['reservation_type'] == 'H')
{


                            $StartDates = $rows['Start_Date'];
                         $StartDate = explode(" ",$StartDates);
                         $EndDates = $rows['End_Date'];
                         $EndDate = explode(" ",$EndDates);
                            echo '<tr>
                            <td class="text-left">Date</td>
                            <td class="text-right"><input type="datetime" name="fromdate1update" value="'.$StartDate[0].'"><td>
                        </tr>
                        <tr>
                            <td class="text-left">From</td>
                            <td class="text-right"><input type="time" name="fromhourupdate" value="'.$StartDate[1].'"><td>
                        </tr>
                        <tr>
                            <td class="text-left">To</td>
                            <td class="text-right"><input type="time" name="tohourupdate" value="'.$EndDate[1].'"><td>
                        </tr>
                        <tr>
                            <td class="text-left">Price Per Hour</td>
                            <td class="text-right">'.$rows['price_per_hour'].' '."$".'<td>
                        </tr>';
    }

                        ?>
                          <?php if($rows['reservation_type'] == 'D')
                        {
                         $StartDates = $rows['Start_Date'];
                         $StartDate = explode(" ",$StartDates);
                         $EndDates = $rows['End_Date'];
                         $EndDate = explode(" ",$EndDates);
                        echo '<tr>
                        <td class="text-left">From</td>
                        <td class="text-right"><input type="datetime" name="fromdateupdate" value="'.$StartDate[0].'"><td>
                        </tr>
                        <tr>
                            <td class="text-left">To</td>
                            <td class="text-right"><input type="datetime" name="todateupdate" value="'.$EndDate[0].'"><td>
                        </tr>
                        <tr>
                            <td class="text-left">Price Per Day</td>
                            <td class="text-right">'.$rows['price_per_hour'].''."$".'<td>
                        </tr>';
}


                        ?>


                        <tr>
                            <td class="text-left">Total</td>
                            <td class="text-right">100$<td>
                        </tr>

                    </table>
                        <div class="col-xs-12 text-right">
                            <button class="btn-primary" type="submit" name="update-res" value="<?php echo $rows['ID_reservation'] ?>">Update</button>
                            <button class="btn-blue" type="submit" name="cancel"  value="<?php echo $rows['ID_reservation'] ?>"
                                    >Cancel</button>
                        </div>
                </div>


</form>
                </div>
                             <?php  endwhile ; ?>

            </div>
