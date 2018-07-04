<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit">
</form>

<?php 
if(isset($_POST['submit']))
{
    $dir = realpath(dirname(__FILE__) . '/../Images/Cars/');
    $path = $_FILES['file']['tmp_name'] ;
    $name= $_FILES['file']['name'] ;
    $size = $_FILES['file']['size'] ;
    $error =$_FILES['file']['error']  ;
    $type = $_FILES['file']['type'] ;
    move_uploaded_file($path,$dir.$name);
   // echo $path;
    //echo $name;
    //echo $size;
    //echo $error;
    echo $dir;

}

?>