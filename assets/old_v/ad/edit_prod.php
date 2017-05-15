<?php 
	
	// echo $_GET['productCode'];
	$id_prod=0;

	require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/db/database.php';

	function select_prod($id_prod){
		
		$pdo = Database::connect();

		$sql = "SELECT * FROM products WHERE productCode = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($id_prod));
	
		$data = $query->fetch(PDO::FETCH_ASSOC);

		Database::disconnect();

		return $data;
	}

	if(empty($_GET['productCode']))
	{
		echo "jakis error: id nie podane";		
	}	
	else
	{

		$id_prod = $_GET['productCode'];

		$data = select_prod($id_prod);
	}

		echo "<pre> GET <br>";
		var_dump($data);
		echo "</pre>";


	if(!empty($_POST))
	{


		if($data['productName'] != $_POST['productName'] && $_POST['productName'] != ''){
			$productName = $_POST['productName'];
		}
		else{
			$productName = $data['productName'];
		}

		if($data['productDescription'] != $_POST['productDescription'] && $_POST['productDescription'] != ''){
			$productDescription = $_POST['productDescription'];
		}
		else{
			$productDescription = $data['productDescription'];
		}
		
		if($data['quantityInStock'] != $_POST['quantityInStock'] && $_POST['quantityInStock'] != ''){
			$quantityInStock = $_POST['quantityInStock'];
		}
		else{
			$quantityInStock = $data['quantityInStock'];
		}

		if($data['buyPrice'] != $_POST['buyPrice'] && $_POST['buyPrice'] != ''){
			$buyPrice = $_POST['buyPrice'];
		}
		else{
			$buyPrice = $data['buyPrice'];
		}		

		if($data['warehouseCode'] != $_POST['warehouseCode'] && $_POST['warehouseCode'] != ''){
			$warehouseCode = $_POST['warehouseCode'];
		}
		else{
			$warehouseCode = $data['warehouseCode'];
		}			
		

		$pdo = Database::connect();

		$sql = "UPDATE products SET productName = ?, productDescription = ?, quantityInStock = ?, buyPrice = ?, warehouseCode = ? WHERE productCode = ?";
		$query = $pdo->prepare($sql);

		try{
			$ch = $query->execute(array($productName, $productDescription, $quantityInStock, $buyPrice, $warehouseCode, $id_prod));

			var_dump($ch);
	
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}	

		Database::disconnect();

		if($ch){
			// header("Location: index.php");
			$data = select_prod($id_prod);
			echo "Edited";	
		}
		else{
			echo "error ";
		}
		

	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 
<body>

	<a class="btn" href="index.php">Powrot</a>
    <div class="container">
		
		<div class="row">
			<h1>Edit product</h1>
		</div>
		
		<form class="row" action="edit_prod.php?productCode=<?php echo $id_prod; ?>" method="post">
			<label>Name of product</label><br />
			<input name="productName" type="text" placeholder="product name" value="<?php echo $data['productName']; ?>"><br />
			<label>Product description</label><br />
			<input name="productDescription" type="text" placeholder="description" value="<?php echo $data['productDescription']; ?>"><br />
			<label>Quantity in Stock</label><br />
			<input name="quantityInStock" type="text" placeholder="quantity" value="<?php echo $data['quantityInStock']; ?>"><br />
			<label>Price</label><br />
			<input name="buyPrice" type="text" placeholder="price" value="<?php echo $data['buyPrice']; ?>"><br />			
			<label>Warehouse</label><br />
			<input name="warehouseCode" type="text" placeholder="warehouse" value="<?php echo $data['warehouseCode']; ?>"><br />
			<!-- <label>Kategoria ( type of product )</label> -->
			
			<label for="">Main img</label><br>
			<img src="../<?php echo $data['main_img']; ?>" alt="main_img" width="200">

			<label for="">Additional images of product</label><br>
			<!-- <img src="../<?php echo $data['main_img']; ?>" alt="main_img"> -->
			
			<br>
			<button type="submit" class="btn btn-success">Edytuj</button>
			<!-- <a class="btn" href="index.php">Powrot</a> -->
		</form>
		
    </div> <!-- /container -->
  </body>
</html>