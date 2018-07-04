 <?php
     include'Database.php';


class User{
private $fname;
private $lname;
private $phone;
private $email;
private $address;
private $password;
private $form_call;

public function setfname($fname)
{
    $this->fname=$fname;
}
public function getfname()
{
    return $this->fname;
}
public  function setlname($lname)
{
    $this->lname=$lname;
}
public function getlname()
{
    return $this->lname;
}
public function setphone($phone)
{
    $this->phone=$phone;
}
public function getphone()
{
    return $this->phone;
}
public function setemail($email)
{
    $this->email=$email;
}
public  function getemail()
{
 return $this->email;   
}
public function setusertype($usertype)
{
    $this->usertype=$usertype;
}
public  function getusertype()
{
 return $this->usertype;   
}
public function setaddress($address)
{
    $this->address=$address;
}
public function getaddrss()
{
    return $this->address;
}
public function setpassword($password)
{
    $this->password=$password;
}
public function getpassword()
{
    return $this->password;
}




//-----------------------------------------------------    
 function login($username,$password)
 {   

     $file = "../db/db_connect.php";
     $DatabaseObject1 = new Database($file);

            $sqlsearch = "SELECT * FROM users WHERE email='$username' and password='$password'";
            $query= mysqli_query($DatabaseObject1->connection,$sqlsearch);
       if(!session_id()) // to fix warning "notice a session had already been started - ignoring session_start()"
           session_start();
       while ($row = mysqli_fetch_array($query)) {
        if($row['email']==$username && $row['password']==$password){
       if(session_status() == PHP_SESSION_NONE)
           {
               session_start(); 
           }          $_SESSION['username']="$username";
                      $_SESSION['id'] = $row['id'];
                      $_SESSION['fname']=$row['fname'];
                      $_SESSION['User_type_id']=$row['User_type_id'];
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


//--------------------------------------------------------------------    
    function Edit($array,$table_name,$column,$valuee){
$file = "../db/db_connect.php";
$DatabaseObject = new Database($file);
       for ($i=0 ;$i<sizeof($array) ;$i++){
           $indext = key($array);
           $value = $array[$indext];
           $sql = " UPDATE $table_name SET  $indext='$value' WHERE  $column= '$valuee' ";
           $check=mysqli_query($DatabaseObject->connection,$sql);
                  next($array);
        }  

    }
//-------------------------------------------------------------------------------------        
 function Add($array,$table_name)
{
$file = "../db/db_connect.php";
$DatabaseObject = new Database($file);
    
        $a = $b = "";
        foreach($array as $key => $value){
            $a .= $key . ",";
            $b .= "'" . $value . "',";

        }
        $a = rtrim($a, ",");
        $b = rtrim($b, ",");
       // echo $a . "<br>" . $b;  
        $sql="INSERT INTO $table_name($a)VALUES($b)";
                mysqli_query($DatabaseObject->connection,$sql);
     
       

}       
//----------------------------------------------------------------------------------------    
    function Delete(){
        $file = "../db/db_connect.php";
$DatabaseObject = new Database($file);

        for($i=1;$i<100;$i++)
    {
        if(isset($_POST["$i"]))
        {

        $sql="DELETE FROM users WHERE id=$i";
        mysqli_query($DatabaseObject->connection,$sql);
            header("Location:../pages/Admin-Profile.php");
        }
    }
    }
//-------------------------------------------------------------------------------    
   function forget($email)
 {     
     $file = "../db/db_connect.php";
$DatabaseObject = new Database($file);

            $sqlsearch = "SELECT * FROM users WHERE email='$email'";
            $query= mysqli_query($DatabaseObject->connection,$sqlsearch);
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
      public function Edit_profile($array,$table_name,$column,$valuee){
      
    $this->Edit($array,$table_name,$column,$valuee); 
          if($this->login($this->getemail(),$this->getpassword()))
              return true;
          else
              return false;
    

    
}
        function Contact($email,$subject,$message)
    {
        
             $from = "From : '$email'";
            if(mail("thrifty.eg@gmail.com", $subject, $message, $from))
                 return true;
    else 
            return false;
 }


}
//------------------------------------------------


?>
    