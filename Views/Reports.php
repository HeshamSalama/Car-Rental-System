<form action="../Controllers/delete_reservation.php" method="POST">
<table class="table-bordered" style="margin:auto;width:100%">
   <tr>
    <?php   
    $SQL= "SELECT * FROM reservation";
    $f=mysqli_query(mysqli_connect("localhost","root","","carrental"),$SQL);
    $rows=mysqli_fetch_assoc($f);
    if ($rows == 0){

        echo "<H2>There IS NO RESERVATIONS :D</H2>";
    }
    else{
    foreach($rows as $key=>$value){
      echo "<th>$key</th>";  
    }
    echo "<th>Action</th>";  
    echo "</tr>";
    }
    
   
?>
   <?php
    while($rows) : ?>
    <tr>
    <?php
    foreach($rows as $value)
    {
        echo "<td>$value</td>";        
    }
    ?>
    <td><button name="delete_reservation" class="btn-blue" value="<?php echo $rows['ID_reservation']; ?>">Delete</button></td>
    </tr> 
    
    <?php 
    $rows=mysqli_fetch_assoc($f);
    endwhile ; ?>


    
     
    
</table>
</form>