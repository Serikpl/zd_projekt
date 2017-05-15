<?php

	require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/db/database.php';
	
	function get_products(){

		$pdo = Database::connect();

		$sql = 'SELECT * FROM products';
					
		$data = $pdo->query($sql);
					
		Database::disconnect();
		
		return $data;
	}

?>