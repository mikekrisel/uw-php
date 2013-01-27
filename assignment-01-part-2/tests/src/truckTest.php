<?php

namespace tests\src\truckTest;
use vehicle\truck as truck;
require_once '/../../bootstrap.php';
/**
* Truck class unit test code
*/
class truckTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test honk returns an empty string
     * @var string
	 */
	function testHonk($truck)
	{	
		$this->assertSame( '', $truck->honk() );
	}
	/**
	 * Test setYear accepts only int
     * @var int
	 */
	public function testSetYear($truck) {
		$this->assertInternalType( 'int', $truck->setYear() );
    }
	/**
	 * Test getYear returns only int
     * @var int
	 */
    public function testGetYear($truck) {
		$this->assertInternalType( 'int', $truck->getYear() );
    }
	/**
	 * Test getNumberOfDoors returns only int
     * @var int
	 */
	public function testGetNumberOfDoors($truck) {
		$this->assertInternalType( 'int', $truck->getNumberOfDoors() );
    }
}
$truck = new truck\myTruck();
$truckTest = new truckTest();
$truckTest->testHonk($truck);
$truckTest->testSetYear($truck);
$truckTest->testGetYear($truck);
$truckTest->testGetNumberOfDoors($truck);
?>