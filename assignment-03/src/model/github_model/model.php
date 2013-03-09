<?php

/**
 * @namespace github_model
 **/
namespace github_model;

/**
 * entity model to map the response contains public fields to map our response
 **/
class model extends \model\model {

	/**
	 * first name
	 * @var string
	 **/
	public $name;
	
	/**
	 * last name
	 * @var string
	 **/
	public $company_name;
	
	/**
   * public set name
	 * @param string name
	 **/
	public function setName($name) {
		return $this->name = $name;
	}
	
	/**
   * public get name
	 * @return string name
	 **/
	public function getName() {
		return $this->name; 
	}
	
	/**
   * public set company name
	 * @param string company_name
	 **/
	public function setCompanyName($company_name) {
		return $this->company_name = $company_name;
	}
	
	/**
   * public get last name
	 * @return string company_name
	 **/
	public function getCompanyName() {
		return $this->company_name; 
	}
	
}

?>