<?php
session_start();
require_once('Facebook/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '975444023128793',
	'app_secret' => '2b949a1f2efd034a19ffb146ed9b1eba',
	'default_graph_version' => 'v2.10',
]);

$handler = $FBObject->getRedirectLoginHelper();
