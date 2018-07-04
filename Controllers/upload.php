	<?php 
session_start();
   $path = $_FILES['photo']['tmp_name'] ;
    $name= $_FILES['photo']['name'] ;
    $size = $_FILES['photo']['size'] ;
    $type = $_FILES['photo']['type'] ;
$_SESSION['filetype'] = $type;
    $dir = dirname(__FILE__) . '/../Images/Cars/';
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );
if(in_array($type,$acceptable))
{
    move_uploaded_file($path,$dir.$name);
    $_SESSION['photo'] = "Images/Cars/"."$name";
}
    
?>
