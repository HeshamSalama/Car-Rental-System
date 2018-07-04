<?php


include'Database.php';
class myfeedback
{
	
	private $array;
	private $id;
	private $date;
	private $feedback;

	function __construct($array)
	{
		$this->array = $array;
		$this->SetData($this->array);
		$this->insertfeedback();
	}
	function SetData($array)

{

		$this->feedback =$this->array['feedback'];
		$this->date =$this->array['date'];
		$this->id =$this->array['id'];
}

	function insertfeedback()
	{
        $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
   			        
		            $Sql = "INSERT INTO feedback (User_id,Date,feedback) values ('$this->id','$this->date','$this->feedback')";
   			        mysqli_query($DatabaseObject->connection,$Sql);
   			        
	}
}


?>