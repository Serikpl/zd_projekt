<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
 
<body>
	<a class="btn" href="index.php">Powrot</a>
    <div class="container">
		
		<div class="row">
			<h1>Add new product</h1>
		</div>
		
		<form class="row" action="add_product.php" method="post" enctype="multipart/form-data">
			<label>Name of product</label><br />
			<input name="productName" type="text" placeholder="product name"><br />
			<label>Product description</label><br />
			<input name="productDescription" type="text" placeholder="description"><br />
			<label>Quantity in Stock</label><br />
			<input name="quantityInStock" type="text" placeholder="quantity"><br />
			<label>Price</label><br />
			<input name="buyPrice" type="text" placeholder="price"><br />			
			<label>Warehouse</label><br />
			<input name="warehouseCode" type="text" placeholder="warehouse"><br />
			<label >Main image</label>
			<input type="file" name="main_img">

			<p>	
			<label for="">Additional images of product</label><br>
			<input type="file" name="add_imgs" multiple>
			</p>
			<!-- <label>Kategoria ( type of product )</label> -->
			
			<button type="submit" class="btn btn-success">Dodaj</button>

		</form>
		
		<h2>Products</h2>
		<ul>
			<?php
				require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/db/database.php';

				$pdo = Database::connect();

				$sql = 'SELECT * FROM products';
				
				foreach($pdo->query($sql) as $row){
					echo "<li>".$row['productName']."</li>";
				}
				
				Database::disconnect();
			?>
		</ul>

    </div> <!-- /container -->
  </body>
</html>
<?php 

	echo "<pre>";
		
	var_dump($_FILES['add_imgs']);

	if(!empty($_FILES)){

		$target_file = $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/assets/img/products/'.basename($_FILES['main_img']['name']);

		move_uploaded_file($_FILES["main_img"]["tmp_name"], $target_file);
		echo $target_file;
	}
	

	echo "<img class='smallimg' src='../assets/img/products/".$_FILES['main_img']['name']."'>";
	// echo "<img src="file">";
	echo "</pre>";

	if(!empty($_POST)){
		$productName = $_POST['productName'];
		$productDescription = $_POST['productDescription'];
		$quantityInStock = $_POST['quantityInStock'];
		$buyPrice = $_POST['buyPrice'];
		$warehouseCode = $_POST['warehouseCode'];
		$main_img = 'assets/img/products/'.$_FILES['main_img']['name'];
	
		$pdo = Database::connect();
		$sql = "INSERT INTO products(productCode, productName, productDescription, quantityInStock, buyPrice, warehouseCode, main_img) value(?, ?, ?, ?, ?, ?, ?)";
		$query = $pdo->prepare($sql);
		
		echo "<br> check: <br>";

		try{
			$query->execute(array('', $productName, $productDescription, $quantityInStock, $buyPrice, $warehouseCode, $main_img));
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		Database::disconnect();
		
	}

 ?>