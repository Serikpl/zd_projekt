<?php

require ROOT.'/Config/database.php';

/**
* 
*/
class Product
{
	
    /**
     * Returns product item by id
     * @param integer $productCode
     */	
	public static function get_one_product($productCode){

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

    /**
     * Returns an array of products
     */
	public static function get_list_products(){

		$pdo = Database::connect();

		$sql = 'SELECT * FROM products ORDER by productCode DESC';
					
		$data = $pdo->query($sql);
					
		Database::disconnect();
		
		return $data;
	}

    /**
     * Delete product
     * @param intege $id
     */
	public static function remove_prod($id)
	{
		
		$pdo = Database::connect();

		$sql = 'DELETE FROM products WHERE productCode = ?';

		$query = $pdo->prepare($sql);

		$check = $query->execute(array($id));

		Database::disconnect();
	
		if($ch){
			return "deleted!";	
		}else{
			return "somthing go wrong!";
		}

	}

    /**
     * Delete product
     * @param intege $id
     */
	public static function getOneBrandProducts($id)
	{
		
		$pdo = Database::connect();

		$sql = 'SELECT * FROM products WHERE brand_id = ?';

		$query = $pdo->prepare($sql);
		
		try{
			$query->execute(array($id));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		Database::disconnect();
	
		return $data;
	}

}
