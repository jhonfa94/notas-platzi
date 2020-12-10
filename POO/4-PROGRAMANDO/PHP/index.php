<?php 
require_once 'Card.php';
require_once 'Account.php';

$car = new Car("LICE1223",new Account("Jhon Fabio ","12312312313"));
$car->passenger = 4;
$car->getDataCar();

?>