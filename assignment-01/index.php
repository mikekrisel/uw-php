<?php
/**
 * Import Interface, Car, Truck and Civic classes 
 */
require_once ("vehicle-interface.php");
require_once ("vehicle.php");
require_once ("car.php");
require_once ("truck.php");
require_once ("civic.php");
/**
 * Create Vehicle, Car, Truck and Civic objects
 */
$vehicle = new myVehicle();
$car = new myCar();
$truck = new myTruck();
$civic = new myCivic();
/**
 * Set year for Vehicle, Car, Truck and Civic objects
 */
$vehicle->setYear(1999);
$car->setYear();
$truck->setYear(1962);
$civic->setYear(2003);
/**
 * Get year for Vehicle, Car, Truck and Civic objects
 */
var_dump($vehicle->getYear());
var_dump($car->getYear());
var_dump($truck->getYear());
var_dump($civic->getYear());
/**
 * Get number of doors for Vehicle, Car, Truck and Civic objects
 */
var_dump($vehicle->getNumberOfDoors());
var_dump($car->getNumberOfDoors(4));
var_dump($truck->getNumberOfDoors());
var_dump($civic->getNumberOfDoors(3));
/**
 * Make honk for Car, Truck and Civic objects
 */
var_dump($car->honk());
var_dump($truck->honk());
var_dump($civic->honk());

?>
