<?php

/**
 * @namespace github_model_parse
 **/
namespace github_model_parse;

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
		$github = new \github_api\api();
		$profile = $github->getPublicProfile($profile_url);
		
		/**
		 * map our profile into the model
		 **/
		$model = new \github_model\model();
		$model->setUrl($profile->html_url);
		$model->setName($profile->name);
		$model->setCompanyName($profile->company);
		$model->setEmail($profile->email);
		$model->setHeadline($profile->bio);
		$model->setPictureUrl($profile->avatar_url);
		
		/**
		 * check if our profile already exists
		 **/
		$results = $dao->query("github_profile", "profileUrl = '".$model->getUrl()."'");
		if (!$results) {
			$dao->insert("github_profile",
				"profileUrl, name, CompanyName, email, headline, profilePictureUrl",
				"'".$model->getUrl()."', '".$model->getName()."', '".$model->getCompanyName()."', '".$model->getEmail()."', '".$model->getHeadline()."', '".$model->GetPictureUrl()."'");
		}
		return $model;
	}
}

?>