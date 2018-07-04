<form action="../Controllers/delete_feedback.php" method="POST">
<table class="table-bordered" style="margin:auto;width:100%">
   <tr>
    <?php   
    $SQL= "SELECT * FROM $tablename";
    $f=mysqli_query(mysqli_connect("localhost","root","","carrental"),$SQL);
    $rows=mysqli_fetch_assoc($f);
    if($rows == 0){
echo "<H2>THERE IS NO FEEDBACK :D";
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
    <td>
    <button type="submit" name="delete_feedback" value="<?php echo $rows['id'] ?>" class="fa fa-remove text-danger"></button>
    </td>
    </tr> 
    
    <?php 
    $rows=mysqli_fetch_assoc($f);
    endwhile ; ?>


    
     
    
</table>
</form>