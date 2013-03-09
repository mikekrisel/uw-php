<?php

/**
 * @namespace linkedin_model
 **/
namespace linkedin_model;

/**
 * entity model to map the response contains public fields to map our response
 **/
class model extends \model\model {
	
	/**
	 * first name
	 * @var string
	 **/
	public $first_name;
	
	/**
	 * last name
	 * @var string
	 **/
	public $last_name;
	
	/**
   * public set first name
	 * @param string first_name
	 **/
	public function setFirstName($first_name) {
		return $this->first_name = $first_name;
	}
	
	/**
   * public get first name
	 * @return string first_name
	 **/
	public function getFirstName() {
		return $this->first_name; 
	}
	
	/**
   * public set last name
	 * @param string last_name
	 **/
	public function setLastName($last_name) {
		return $this->last_name = $last_name;
	}
	
	/**
   * public get last name
	 * @return string last_name
	 **/
	public function getLastName() {
		return $this->last_name; 
	}
	
}

?>