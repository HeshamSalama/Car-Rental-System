<form action="../functions/Delete.php" method="POST">
<table class="table-bordered" style="margin:auto;width:100%">
   <tr>
    <?php   
    $SQL= "SELECT * FROM $tablename";
    $f=mysqli_query(mysqli_connect("localhost","root","","carrental"),$SQL);
    $rows=mysqli_fetch_assoc($f);
    foreach($rows as $key=>$value){
      echo "<th>$key</th>";  
    }

    ?>
    <th>Action</th>
   </tr>

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
    <button type="submit" name="DeleteUser" value="<?php echo $rows['id'] ?>" class="fa fa-remove text-danger"></button>
    </td>
    </tr> 
    
    
    <?php 
    $rows=mysqli_fetch_assoc($f);
    endwhile ; ?>


    
     
    
</table>
</form>