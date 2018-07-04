<?php
class Cars {
private $car_id;
private $car_name;
private $car_model;
private $car_quantity;
private $price_houre;
private $price_day;
private $photo;
private $engine;
public function setid($car_id)
{
    $this->car_id=$car_id;
}
public function getid()
{
    return $this->car_id;
}
public function setname($car_name)
{
    $this->car_name=$car_name;
}
public function getname()
{
    return $this->car_name;
}
public function setmodel($car_model)
{
    $this->car_model=$car_model;
}
public function getmodel()
{
    return $this->car_model;
}
public function setquantity($car_quantity)
{
    $this->car_quantity=$car_quantity;
}
public function getquantity()
{
    return $this->car_quantity; 
}
public function sethoure($price_houre)    
{
    $this->price_houre=$price_houre;
}
public function gethoure()
{
    return $this->price_houre;
}
public function setday($price_day)    
{
    $this->price_day=$price_day;
}
public function getday()
{
    return $this->price_day;
}
    public function setPhoto($photo)
{
    $this->photo=$photo;
}
public function getPhoto()
{
    return $this->photo;
}
public function setengine($engine)
{
    $this->engine=$engine;
}
public function getengine()
{
    return $this->engine;
}
    
        
    
    
    }
?>
