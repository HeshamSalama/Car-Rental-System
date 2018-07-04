        <footer class="text-center" id="Contact">
            <div class="container">
                <h1 class="title">Contact Us</h1>
                <div class="line"></div>
                <div class="contact-form col-md-5 col-xs-12 wow bounceInDown" data-wow-delay=".2s">
                    <h3 class="text-center text-dark">Feel Free to Contact anytime</h3>
                        <?php include 'Views/contact.php'; ?>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="contact-info col-md-5 col-xs-12 text-left wow bounceInUp" data-wow-delay=".3s">
                    <h3 class="text-center text-dark">Here You Can Find Us</h3>

                    <table>
                        <?php 
$query = "Select * from url where id = 3";
			
			if($result = mysqli_query($DatabaseObject->connection,$query))
{
			$row = mysqli_fetch_assoc($result);
echo'

	<tr id="address">
                            <td class="text-dark title2">'.$row["title"].'</td>&nbsp;&nbsp;
               <td class="text-blue text"> 
                    '.$row["text"].'
                </td>
                		';
if($_SESSION['User_type_id']==2)
    echo '<td><i class="fa fa-pencil text-blue" data-id="3" data-parent="address" data-popup="EditLayout-popup"></i>
                </td>';
                echo '</tr>';
}
                        ?>
                                                <?php 
$query = "Select * from url where id = 4";
			
			if($result = mysqli_query($DatabaseObject->connection,$query))
{
			$row = mysqli_fetch_assoc($result);
echo'

	<tr id="phone">
                            <td class="text-dark title2">'.$row["title"].'</td>&nbsp;&nbsp;
               <td class="text-blue text"> 
                    '.$row["text"].'
                </td>
		';
if($_SESSION['User_type_id']==2)
    echo '<td><i class="fa fa-pencil text-blue" data-id="4" data-parent="phone" data-popup="EditLayout-popup"></i>
                </td>';
                echo '</tr>';
}
                        ?>
                    
                        <?php 
$query = "Select * from url where id = 5";
			
			if($result = mysqli_query($DatabaseObject->connection,$query))
{
			$row = mysqli_fetch_assoc($result);
echo'

	<tr id="mail">
                            <td class="text-dark title2">'.$row["title"].'</td>&nbsp;&nbsp;
               <td class="text-blue text"> 
                    '.$row["text"].'
                </td>
                
		';
if($_SESSION['User_type_id']==2)
    echo '<td><i class="fa fa-pencil text-blue" data-id="5" data-parent="mail" data-popup="EditLayout-popup"></i>
                </td>';
                echo '</tr>';
}
                        ?>
                    </table>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.0901388015036!2d31.220681685469646!3d30.06295062465432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840e04a6d4f57%3A0xfc0e91525bfdb369!2sInShape+Clinic!5e0!3m2!1sar!2seg!4v1455546691466" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </footer>
