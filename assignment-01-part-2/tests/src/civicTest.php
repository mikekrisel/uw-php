<?php

namespace tests\src\civicTest;
use vehicle\car\civic as civic;
require_once '/../../bootstrap.php';
/**
* Civic class unit test code
*/
class civicTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test honk returns a string
     * @var string
	 */
	function testHonk($civic)
	{	
		$this->assertSame( 'honk honk', $civic->honk() );
	}
	/**
	 * Test setYear accepts only int
     * @var int
	 */
	public function testSetYear($civic) {
		$this->assertInternalType( 'int', $civic->setYear() );
    }
	/**
	 * Test getYear returns only int
     * @var int
	 */
    public function testGetYear($civic) {
		$this->assertInternalType( 'int', $civic->getYear() );
    }
	/**
	 * Test getNumberOfDoors returns only int
     * @var int
	 */
	public function testGetNumberOfDoors($civic) {
		$this->assertInternalType( 'int', $civic->getNumberOfDoors() );
    }
}
$civic = new civic\myCivic();
$civicTest = new civicTest();
$civicTest->testHonk($civic);
$civicTest->testSetYear($civic);
$civicTest->testGetYear($civic);
$civicTest->testGetNumberOfDoors($civic);
?>