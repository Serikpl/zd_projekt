<?php

	// display errors
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	session_start();

	// add files of system
	define('ROOT', dirname(__FILE__));
	require(ROOT.'/Components/Autoload.php');

	$router = new Router();
	$router->run_router();

