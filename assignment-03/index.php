<?php

require_once 'bootstrap.php';

$app = new \Slim\Slim();

/**
 * @function
 * takes linkedin profile name from url and calls new api
 * @param string name
 **/
$app->get('/v1/:name', function ($name) {
		$api = new linkedin_model_parse\parse();
		$response = array("profile" => $api->consume("http://www.linkedin.com/in/".$name));
		$file = fopen('src/v1/list-profile.json', 'w');
		fwrite($file, json_encode($response));
		fclose($file);
});

$app->run();
		
?>