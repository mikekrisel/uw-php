<?php

/**
 * @namespace linkedin_model_parse
 **/
namespace linkedin_model_parse;

/**
 * parse the responses from our api
 **/
class parse {

	/**
   * public consume
   * takes a profile url and plugs it into api, sets and inserts data into db
	 * @param string profile_url
	 * @return array model
	 **/
	public function consume($profile_url) {
		$dao = new \db\mysqli('localhost', 'username', 'password', 'uw-php');
		$linkedin = new \linkedin_api\api();
		$profile = $linkedin->getPublicProfile($profile_url);
		
		/**
		 * map our profile into the model
		 **/
		$model = new \linkedin_model\model();
		$model->setUrl($profile[0]);
		$model->setFirstName($profile[1]);
		$model->setLastName($profile[2]);
		$model->setEmail($profile[3]);
		$model->setHeadline($profile[4]);
		$model->setPictureUrl($profile[5]);
		
		/**
		 * check if our profile already exists
		 **/
		$results = $dao->query("linkedin_profile", "profileUrl = '".$model->getUrl()."'");
		if (!$results) {
			$dao->insert("linkedin_profile",
				"profileUrl, firstName, lastName, email, headline, profilePictureUrl",
				"'".$model->getUrl()."', '".$model->getFirstName()."', '".$model->getLastName()."', '".$model->getEmail()."', '".$model->getHeadline()."', '".$model->GetPictureUrl()."'");
		}
		return $model;
	}
}

?>