<?php

namespace tests\src\carTest;
use vehicle\car as car;
require_once '/../../bootstrap.php';
/**
* Car class unit test code
*/
class carTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test honk returns an empty string
     * @var string
	 */
	function testHonk($car)
	{	
		$this->assertSame( '', $car->honk() );
	}
	/**
	 * Test setYear accepts only int
     * @var int
	 */
	public function testSetYear($car) {
		$this->assertInternalType( 'int', $car->setYear() );
    }
	/**
	 * Test getYear returns only int
     * @var int
	 */
    public function testGetYear($car) {
		$this->assertInternalType( 'int', $car->getYear() );
    }
	/**
	 * Test getNumberOfDoors returns only int
     * @var int
	 */
	public function testGetNumberOfDoors($car) {
		$this->assertInternalType( 'int', $car->getNumberOfDoors() );
    }
}
$car = new car\myCar();
$carTest = new carTest();
$carTest->testHonk($car);
$carTest->testSetYear($car);
$carTest->testGetYear($car);
$carTest->testGetNumberOfDoors($car);
?>