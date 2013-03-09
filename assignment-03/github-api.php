<?php

require_once 'bootstrap.php';

$app = new \Slim\Slim();

/**
 * @function
 * takes github profile name from url and calls new api
 * @param string name
 **/
$app->get('/v1/:name', function ($name) {
		$api = new github_model_parse\parse();
		$response = array("profile" => $api->consume($name));
		$file = fopen('src/v1/list-git.json', 'w');
		fwrite($file, json_encode($response));
		fclose($file);
});

$app->run();
		
?>