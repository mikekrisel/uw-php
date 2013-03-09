<?php

/**
 * @namespace model
 **/
namespace model;

/**
 * entity model to map the response contains public fields to map our response
 **/
class model {

	/**
	 * url
	 * @var string
	 **/
	public $url;
	
	/**
	 * email
	 * @var string
	 **/
	public $email;
	
	/**
	 * headline
	 * @var string
	 **/
	public $headline;
	
	/**
	 * picture url
	 * @var string
	 **/
	public $picture_url;
	
	/**
   * public set url
	 * @param string url
	 **/
	public function setUrl($url) {
		return $this->url = urlencode($url);
	}
	
	/**
   * public get url
	 * @param string url
	 **/
	public function getUrl() {
		return $this->url; 
	}
	
	/**
   * public set email
	 * @param string email
	 **/
	public function setEmail($email) {
		return $this->email = $email;
	}
	
	/**
   * public get email
	 * @return string email
	 **/
	public function getEmail() {
		return $this->email; 
	}
	
	/**
   * public set headline
	 * @param string headline
	 **/
	public function setHeadline($headline) {
		return $this->headline = $headline;
	}
	
	/**
   * public get headline
	 * @return string headline
	 **/
	public function getHeadline() {
		return $this->headline; 
	}
	
	/**
   * public set picture url
	 * @param string picture_url
	 **/
	public function setPictureUrl($picture_url) {
		return $this->picture_url = urlencode($picture_url);
	}
	
	/**
   * public get picture url
	 * @return string picture_url
	 **/
	public function getPictureUrl() {
		return $this->picture_url; 
	}
	
}

?>