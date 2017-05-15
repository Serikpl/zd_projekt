<?php 

/**
* class Brand
*/
class Brand 
{
	
	public static function getListBrands()
	{

		$pdo = Database::connect();

		$sql = "SELECT * FROM brands";
		$data = $pdo->query($sql);

		// $data = $data->fetchAll(PDO::FETCH_ASSOC);

		Database::disconnect();

		return $data;

	}

	public static function getOneBrand($id)
	{
		$pdo = Database::connect();

		$sql = "SELECT * FROM brands WHERE id = ?";		
		$query = $pdo->prepare($sql);

		try{
			$query->execute(array($id));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}
	
		$data = $query->fetch(PDO::FETCH_ASSOC);

		Database::disconnect();

		return $data;
	}

}