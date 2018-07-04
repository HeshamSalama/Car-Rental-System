<?php

class reservation
{
private $reservatin_id;
private $user_id;
private $car_id;
private $start_date;
private $end_date;
private $start_houre;
private $end_houre;
private $date_houre;
public function  setid($reservatin_id)
{
    $this->reservatin_id=$reservatin_id;
}
public function  getid()
{
    return $this->reservatin_id;
}
public function set_user_id($user_id)
{
    $this->user_id=$user_id;
}
public function get_user_id()
{
    return $this->user_id;
}
public function set_car_id($car_id)
{
    $this->car_id=$car_id;
}
public function  get_car_id()
{
    $this->car_id;
}
 public function set_start_date($start_date)
{
    $this->start_date=$start_date;
}
public function  get_start_date()
{
    $this->start_date;
}       
public function set_end_date($end_date)
{
    $this->end_date=$end_date;
}
public function get_end_date()
{
    return $this->end_date;
}
public function set_start_houre($start_houre)
{
    $this->start_houre=$start_houre;
}
public function get_start_houre()
{
    return $this->start_houre;
}
public function set_end_houre($end_houre)
{
    return $this->end_houre;
}
public function get_end_houre()
{
    return $this->end_houre;
}

public function set_date_houre($date_houre)
{
    $this->date_houre=$date_houre;
}
public function get_date_houre()
{
    return $this->date_houre;
}
}
?>

