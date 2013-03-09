<?php

/**
 * @namespace db_test
 **/
namespace model_test;
/**
 * test if mysqli connects
 **/
class model_test extends \PHPUnit_Framework_TestCase
{
	/**
	 * tests if a models values are strings
	 * @var string
	 */
	public function modelPass($value) {
		$model = new \model\model();
		$this->assertInternalType('string', $$model->setUrl());
		$this->assertInternalType('string', $$model->getUrl());
		$this->assertInternalType('string', $$model->setEmail());
		$this->assertInternalType('string', $$model->getEmail());
		$this->assertInternalType('string', $$model->setHeadline());
		$this->assertInternalType('string', $$model->getHeadline());
		$this->assertInternalType('string', $$model->setPictureUrl());
		$this->assertInternalType('string', $$model->getPictureUrl());
	}
}

?>