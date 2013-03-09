<?php

/**
 * @namespace db_test
 **/
namespace db_test;
/**
 * test if mysqli connects
 **/
class mysqli_test extends \PHPUnit_Framework_TestCase
{
	public function testMysqli() {	
		$db = new db\mysqli('localhost', 'username', 'password', 'uw-php');
		$result = $db->query("Persons");
		$this->assertNotEmpty($result);
	}
}

?>