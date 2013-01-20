<?php

require_once ("vehicle-interface.php");
require_once ("vehicle.php");
require_once ("car.php");
require_once ("truck.php");
require_once ("civic.php");


$vehicle = new myVehicle();
$car = new myCar();
$truck = new myTruck();
$civic = new myCivic();

$vehicle->setYear(1999);
$car->setYear();
$truck->setYear(1962);
$civic->setYear(2003);

var_dump($vehicle->getNumberOfDoors());
var_dump($car->getNumberOfDoors(4));
var_dump($truck->getNumberOfDoors());
var_dump($civic->getNumberOfDoors(3));

var_dump($vehicle->getYear());
var_dump($car->getYear());
var_dump($truck->getYear());
var_dump($civic->getYear());

var_dump($car->honk());
var_dump($truck->honk());
var_dump($civic->honk());

?>