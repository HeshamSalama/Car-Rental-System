<?php 

class Payment 
{
	private $selected;
	private $holder;
	private $number;
	private $ccv;
	private $array;
	private $connect;
  private $boolen;
  private $year;
  private $month;
  private $price_hour;


    
	
	
private $x;
	function __construct($array,$id)
	{
		if(is_array($array))
			{
				$this->array=$array;
			}
		else{
			throw new Exception("Error Processing Request");
			
		}


        //$this->connecttodb();
		$this->SetData($this->array);
		$this->boolen = $this->Checkcardnumber($this->number,$this->selected);
    
       
       // $this->totalprice($id);
  
        $this->insert();
   }
//---------------------------------------------//



   //----------------------------------------//

function SetData($array)

{
		    $this->selected =$this->array['Selected1'];
       	$this->holder =$this->array['holder1'];
        $this->number =$this->array['number1'];
        $this->ccv =$this->array['ccv1'];
        $this->year =$this->array['year'];
        $this->month =$this->array['month'];
}

//-----------------------------------------------------//

function Checkcardnumber($number , $selected)
{
    $cards = array (
        array(
            'name' => 'American Express' ,
            'length' => '15' ,
            'prefixe' => '34 ,37'  ) ,
        array(
            'name' => 'MasterCard' ,
            'length' => '16',
            'prefixe' => '51,52,53,54,55'
        ),
        array ('name' => 'VISA', 
            'length' => '16', 
            'prefixes' => '4',
                         
                         )
  
    );
    $cardtype = -1;
    for($i=0 ; $i<sizeof($cards) ; $i++)
    {
        if(strtolower($this->selected)== strtolower($cards[$i]['name'])){
            $cardtype = $i;
            break;
        }
    }
    if($cardtype == -1){
        return FALSE;
    }
    $this->number = preg_replace('/\D/','', $this->number);
    $cardnum_length = strlen($this->number);
    $lengthvalid= FALSE ;
    //$prefixe= FALSE ;
     //$prefixe_value = explode(",", $cards[$cardtype]['prefixe']);
         
    $length = explode(",", $cards[$cardtype]['length']);
    for($j = 0 ; $j <= sizeof($length); $j++)
    {
        if($cardnum_length== $length[$j]){
            $lengthvalid = TRUE ;
            break;
        }
        /* $exp = '/^' . $prefix_value[$j] . '/';
        if(preg_match( $exp, $card_number)){
            $prefixe =TRUE;
            break;
        }*/
       
    }
    
    if($lengthvalid == FALSE ){
        return FALSE;
    }
    $checksum =0 ;
  $p = $cardnum_length %2 ;
    
   for($z=0 ; $z < $cardnum_length ; $z++){
        $digit = $this->number[$z];
        if($z%2 == $p){
            $digit *=2;
        }  else {
        $digit *=1;    
        }
        if($digit > 9){
            $digit -=9 ;
        }
     $checksum +=$digit;
    }
        if($checksum ==0 || $checksum %10 !=0){
            return FALSE;
        }

        return TRUE;
     
    
}


//---------------------------------------------//
   function insert()
   {
           $file = "../db/db_connect.php";
			$DatabaseObject = new Database($file);
   	if($this->boolen == TRUE ){
   			$SQL = "SELECT ID FROM Payment_method where name = '$this->selected' ";
   			$selectquery = mysqli_query($DatabaseObject->connection,$SQL);

   			$row = mysqli_num_rows($selectquery);
   			 while ( $row = mysqli_fetch_array($selectquery)) {
                      {
   			
                  	if($row['ID'] == 1){

                $Sql = "INSERT INTO payment_attribute_values (selected_id, value) values('1','$this->holder')";
   			        $Sql1= "INSERT INTO payment_attribute_values (selected_id, value) values('1','$this->number')";
   			        $Sql2= "INSERT INTO payment_attribute_values (selected_id, value) values('1','$this->ccv')";

   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql);
   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql1);
   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql2);
   			        echo "okkkkkkkkkk";

             	}
             	if($row['ID'] == 2)
             	{
             		 $Sql = "INSERT INTO payment_attribute_values (selected_id, value) values('2','$this->holder')";
                $Sql1= "INSERT INTO payment_attribute_values (selected_id, value) values('2','$this->number')";
                $Sql2= "INSERT INTO payment_attribute_values (selected_id, value) values('2','$this->ccv')";

                   mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql);
   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql1);
   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql2);
             	}
             	if($row['ID'] == 3)
             	{
             		 $Sql = "INSERT INTO payment_attribute_values (selected_id, value) values('3','$this->holder')";
                $Sql1= "INSERT INTO payment_attribute_values (selected_id, value) values('3','$this->number')";
                $Sql2= "INSERT INTO payment_attribute_values (selected_id, value) values('3','$this->ccv')";

                    mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql);
   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql1);
   			        mysqli_query(mysqli_connect("localhost","root","","carrental"),$Sql2);
             	}

}
             }
   		}
   		else{
          $validation = 0;
   			  echo "2";	
         	}
   }

}

?>
