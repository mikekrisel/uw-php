<?php

/**
 * @namespace github_api
 **/
namespace github_api;

/**
 * api to get github profile
 **/
class api {

	/**
   * public get public profile
	 * @param string profile_url
	 **/
	public function getPublicProfile($profile) {
		$url = "https://api.github.com/users/" . $profile;
		$profile = self::fetch('GET', $url);
		return $profile;
	}

	public function fetch($method, $resource, $body = '') {
		$url = $resource;
		$context = stream_context_create(
			array('http' => 
				array('method' => $method,
							)
						)
					);
		$response = file_get_contents($url, false, $context);
		return json_decode($response);
	}
	
}

?>