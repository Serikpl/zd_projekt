<?php 

function __autoload($class_name)
{

	$array_paths = ['/Components/','/Controllers/','/Entities/'];

	foreach ($array_paths as $path) {
		
		// 
		$include_file = ROOT. $path.$class_name.'.php';

		// 
		if (is_file($include_file))
		{
			include_once $include_file;
		}

	}

}