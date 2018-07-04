<section class="services text-center" id="Services">

    <div class="container">
    <?php
echo '
        <h2 class="text-left" style="cursor:pointer;">
Cars
</h2>';
                ?>
<?php
$query = "Select * from url where id = 2";

			if($result = mysqli_query($DatabaseObject->connection,$query))
{
			$row = mysqli_fetch_assoc($result);
echo'

	<h1 class="title2 title">'.$row["title"].'</h1>
                <div class="line"></div>
                <p class="lead text">
                    '.$row["text"].'
                </p>
		';
}
?>

        <div id="owl-demo" class="owl-carousel owl-theme">
<?php
//session_start();
//require('Models/Database.php');
//$file = "db/db_connect.php";
//$db = new Database($file);
    $SQL= "SELECT * FROM cars order by car_id desc";
    $f=mysqli_query(mysqli_connect("localhost","root","","carrental"),$SQL);
    while ($rows=mysqli_fetch_array($f)) : ?>

                <div class="item">

                <div class="content">
                <div class="image">
                    <img src="<?php echo $rows['photo']; ?>">
                </div>
                <div class="text">
                    <table>
                        <tr>
                            <td class="text-left">Name</td>
                            <td class="text-right"><?php echo $rows['car_name']?><td>
                        </tr>
                        <tr>
                            <td class="text-left">Model</td>
                            <td class="text-right"><?php echo $rows['car_model_year']?><td>
                        </tr>
                            <tr>
                                <td class="text-left">Engine</td>
                                <td class="text-right"><?php echo $rows['engine']?><td>



                            </tr>
                            <tr>
                                <td class="text-left">Price Per Hour</td>
                                <td class="text-right"><?php echo $rows['price_per_hour']?><td>
                            </tr>
                            <tr>
                                <td class="text-left">Price Per day</td>
                                <td class="text-right"><?php echo $rows['price_per_day'] ?><td>
                            </tr>

                    </table>
                </div>
                </div>
                       <?php if($rows['validate'] == 1)
                       {
                       if (!isset($_SESSION['User_type_id'])) {
                            echo "<h4 class='text-blue' style = 'font-weight:900;'>Closed</h4>";
                       }
                       else if ($_SESSION['User_type_id']==2) {
                            echo "<h4 class='text-blue' style = 'font-weight:900;'>Closed</h4>";
                       }
                       else {
                         echo '<button class="btn-blue" data-popup="reservation-popup" data-id value="'.$rows['car_id'].';
                         ?>">Rent Now</button>';
                       }
                     }
                       else
                           echo "<h4 class='text-blue' style = 'font-weight:900;'>Under Maintainance</h4>";
                        ?>



            </div>
                <?php  endwhile ; ?>

    </div>
</div>
</section>
