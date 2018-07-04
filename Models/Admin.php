<?php

include 'User.php';
class Admin extends User
{
  public static $nagy;
	private $tablename;

  public function delete_feedback($id){
        if (isset($id)) {
        $sql = "DELETE FROM feedback WHERE id='$id'";
        $tt =  mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
        if ($tt) {
          return true;
        }
        else {
          return false;
        }

      }
    } 



  public function delete_reservation($id){
      if (isset($id)) {
      $sql = "DELETE FROM reservation WHERE ID_reservation='$id'";
      $tt =  mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
      if ($tt) {
        return true;
      }
      else {
        return false;
      }

    }
  } 


    public function Addcar(Cars $car) {
       /* $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);*/
      $table_name="cars";
$car_id=$car->getid();
        $object=new User();
$arr_add_car=array("car_id"=>$car->getid(),"car_name"=>$car->getname(),"car_model_year"=>$car->getmodel(),"quantity"=>$car->getquantity(),
    "price_per_hour"=>$car->gethoure(),"price_per_day"=>$car->getday(),"photo"=>$car->getPhoto(),"engine"=>$car->getengine());

$select = "Select * from cars where car_id ='$car_id'";
$selectQuery = mysqli_query(mysqli_connect("localhost","root","","carrental"),$select);

$row = mysqli_num_rows($selectQuery);
if($row==0)
{
   $object->Add($arr_add_car,$table_name);

}

}

  public function updateCar($car2,$carname,$carPD,$carPH,$carmodel,$carengine,$carquantity)
  {
    if (isset($car2)) {
      $sql5="UPDATE cars SET car_name='$carname',car_model_year='$carmodel',quantity='$carquantity',price_per_hour='$carPH',price_per_day='$carPD' ,engine='$carengine' WHERE car_id='$car2'";
        $tt =  mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql5);
        if ($tt) {
          return true;
        }
        else {
          return false;
        }
    }

  }
  public function deleteCar($car2)
  {
    if (isset($car2)) {
      $sql = "DELETE FROM cars WHERE car_id='$car2'";
      $tt =  mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql);
      if ($tt) {
        return true;
      }
      else {
        return false;
      }

    }
    }



	function list($tablename,$filename)
	{
    $this->tablename = $tablename;
		require $filename;

	}
  public function search($array,$table_name,$column,$valuee)
{
$file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
$arrlength=count($array);
$attribut="";
for($count=0;$count<$arrlength;$count++)
{
    $attribut.=$array[$count].",";
}
$attribut=rtrim($attribut,",");
$data="";
         $sql = "SELECT $attribut FROM $table_name where $column ='$valuee'";
         $query = mysqli_query(mysqli_connect("localhost","root","","carrental"),$sql) ;
         $rows=mysqli_fetch_assoc($query);
      $num = mysqli_num_rows($query);
        if ($num == 1 ){
while($rows)
{
    foreach($rows as $value)
    {
        $data.= $value.",";
    }


 $rows=mysqli_fetch_assoc($query);
}
$data = rtrim($data,",");
$arr_data = explode(",", $data);
$nagy=$arr_data;

session_start();

for($i = 0 ; $i < sizeof($arr_data) ; $i++)
{

  $_SESSION['b'.$i]=$arr_data[$i];
}
$_SESSION['carid']= $valuee;
            return true;
}
      else
         return false;
}
public function search_car(Cars $car)
{
    $table_name="cars";
    $valuee=$car->getid();

    $column="car_id";
    $array=array("car_name","car_id","car_model_year","quantity","price_per_hour","price_per_day","engine");
    if($this->search($array,$table_name,$column,$valuee))
        return true;
    else
        return false;


}


    public function EditLayout($data)
    {
        $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
        $title = $data['title'];
        $text = $data['text'];
        $id = $data['id'];
          $query = "update url set title ='$title', text ='$text'  where id = $id";
          if(mysqli_query($DatabaseObject->connection,$query))
              return true;
        else
            return false;
    }

}

?>
