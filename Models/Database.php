<?php 



class database{
	private $host;
	private $user;
	private $password;
	private $db_name;

	public $connection;

	function __construct($filename){

		if(is_file($filename)) include $filename;



		$this->host=$db_host;
		$this->user=$db_user;
		$this->password=$db_pass;
		$this->db_name=$db_name;

		$this->connect();


	}

  	private  function  connect(){

  		if(!$this->connection = mysqli_connect($this->host,$this->user,$this->password,$this->db_name))
  		throw new Exception("Error");


  	}
  	public  function  close(){

  		mysqli_close();

  	}



}

?>