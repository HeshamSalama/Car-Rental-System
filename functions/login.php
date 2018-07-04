 <?php
 function login()
 {   
     require '../db/db_connect.php';
            $username = $_POST['email'];
            $password_NOENC = $_POST['password'];
            $password=md5($password_NOENC);
            $sqlsearch = "SELECT * FROM users WHERE email='$username' and password='$password'";
            $query= mysqli_query($db_connect,$sqlsearch);
     session_start();
       while ($row = mysqli_fetch_array($query)) {
        if($row['email']==$username && $row['password']==$password){
       if(session_status() == PHP_SESSION_NONE)
           {
               session_start(); 
           }                    $_SESSION['username']="$username";
            $_SESSION['id'] = $row['id'];
                      $_SESSION['fname']=$row['fname'];
                      $_SESSION['status']=$row['status'];
                      $_SESSION['lname']=$row['lname'];
                      $_SESSION['password']=$row['password'];
                      $_SESSION['phone']=$row['phone'];
                      $_SESSION['address']=$row['address'];
                      $_SESSION['email']=$row['email'];
                      $_SESSION['check']=2;
            return true;
        }
        else
        return false;
       }   
     
 }
if(login())
    echo 1;
else
    echo 2;
    
        ?>
