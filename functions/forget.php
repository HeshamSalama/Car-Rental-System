 <?php
 function forget()
 {   
     require '../db/db_connect.php';
            $email = $_POST['email'];
            $sqlsearch = "SELECT * FROM users WHERE email='$email'";
            $query= mysqli_query($db_connect,$sqlsearch);
     $num = mysqli_num_rows($query);
     if ($num == 1)
     {
         $random = rand(72891,92729);
         $NewPassword = $random;
         $EmailPassword = $NewPassword;
         $NewPassword = md5($NewPassword); // Hashing md5
         $sql = "update users set password = '$NewPassword' where email='$email'";
         if(mysqli_query($db_connect,$sql))
         {
             $subject = "Restore Password";
             $message = "Your Password has been Changed to '$EmailPassword' , d You can change it from your profile";
             $from = "From : Thrifty.eg";
             if(mail($email , $subject , $message , $from))
             return true;
         }
     }
        else
          return false;
 }
if(forget())
    echo 1;
else
    echo 2;
        ?>
