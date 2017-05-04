<?php 

	require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/db/database.php';

	function get_one_product($productCode){

		// echo "prod code: ".$productCode;

		$pdo = Database::connect();

		$sql = "SELECT * FROM products WHERE productCode = ?";
		$query = $pdo->prepare($sql);

		try{
			$some_check = $query->execute(array($productCode));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		$data = $query->fetch(PDO::FETCH_ASSOC);
		// var_dump($data);

		Database::disconnect();

		return $data;
	}

 ?>
