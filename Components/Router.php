<?php 

// For the router to work, you need the appropriate settings for the .htaccess file

class Router
{
	// make a private array "routes" that will save all routes from ../config/routes.php
	private $routes;

	// constructor gets data from ../config/routes.php
	public function __construct(){
		$routes_path = ROOT.'/config/routes.php';
		$this->routes = include($routes_path);
	}

	// function getURI return URI from request 
	private function getURI()
	{
		// $_SERVER - array with werver and execution environment information
		// $_SERVER['REQUEST_URI'] - The URI which was given in order to access this page; for instance, '/index.html'.
		if(!empty($_SERVER['REQUEST_URI']))
		{
			// func trim() remove sleshes from the beginning and end of a request's string 
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}


	public function run_router()
	{
		// call func getURI() of this class
		$uri = $this->getURI();
		// print_r($uri);

		// loop of routes 
		foreach ($this->routes as $keyPattern => $inner_path) {

			// check that there is one of the routers matches with the request
			// must be double brackets because if we use this single brackets '' var not will give value
			if(preg_match("~$keyPattern~", $uri))
			{

				// preg_replace() - Perform a regular expression search and replace
				// Get the inner path from the outside according to the rule.
				$internalRoute = preg_replace("~$keyPattern~", $inner_path, $uri);
				
				// func explode() - Split a string by delimeter
				$segment = explode('/', $internalRoute);

				// func array_shift() — Shift an element off the beginning of array
				$controlName = array_shift($segment).'Controller';
				// func ucfirst() - Make a string's first character uppercase
				$actionName = 'action'.ucfirst(array_shift($segment));

				// In the array segments remain only the parameters 
				$parametrs = $segment;

				// set var controller's name
				$controlFile =  ROOT.'/controllers/'.$controlName.'.php';

				// check if this file exist
				if(file_exists($controlFile))
				{
					include_once($controlFile);
				}	
				else{
					echo "line 42 router; this file: ".$controlFile."not exist";
				}

				// call the necessary method ($ actionName) for a certain
				// Class ($ controlObject) with the given parameters ($ parameters)
				$result = call_user_func_array(array($controlName, $actionName), $parametrs);
				
				break; 
			
			}/*end IF*/

		}/*end LOOP*/

	}/* end run_router*/
}