<?php

require '../Models/Admin.php';
$table ="users";
$file='../Views/users.php';
$obj = new Admin();
$obj->list($table,$file);
?>