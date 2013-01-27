<?php

namespace tests\src\vehicleTest;
use vehicle;
require_once '/../../bootstrap.php';
/**
* Vehicle class unit test code
*/
class vehicleTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test setYear accepts only int
     * @var int
	 */
	public function testSetYear($vehicle) {
		$this->assertInternalType( 'int', $vehicle->setYear() );
    }
	/**
	 * Test getYear returns only int
     * @var int
	 */
    public function testGetYear($vehicle) {
		$this->assertInternalType( 'int', $vehicle->getYear() );
    }
	/**
	 * Test getNumberOfDoors returns only int
     * @var int
	 */
	public function testGetNumberOfDoors($vehicle) {
		$this->assertInternalType( 'int', $vehicle->getNumberOfDoors() );
    }
}
$vehicle = new vehicle\myVehicle();
$vehicleTest = new vehicleTest();
$vehicleTest->testSetYear($vehicle);
$vehicleTest->testGetYear($vehicle);
$vehicleTest->testGetNumberOfDoors($vehicle);
?>