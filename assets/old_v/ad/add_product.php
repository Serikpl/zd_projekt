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
			<input type="file" name="add_imgs[]" multiple>
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
				
				$data = $pdo->query($sql);

				foreach($data as $row){
					echo "<li>".$row['productName']."</li>";
				}
				
				Database::disconnect();
			?>
		</ul>

    </div> <!-- /container -->
  </body>
</html>
<?php 

// function for checking images
	function check_img($img_size, $img_tmp_name, $target_file){

		// echo "data in check img: size, tmp_name, target_file:  <br>";
		// var_dump($img_size, $img_tmp_name, $target_file);

		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($img_tmp_name);
		    echo "line 70 <br>";
		    var_dump($check);
		    
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".<br>";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.<br>";
		        $uploadOk = 0;
		    }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file ".$target_file." already exists.<br>";
		    $uploadOk = 0;
		}

		// Check file size
		if ($img_size > 4000000) {
		    echo "Sorry, your file ".$target_file." is too large, size must be not more 5mb but here: ".$img_size." <br>";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. Your type is: ".$imageFileType."<br>";
		    $uploadOk = 0;
		}

		return $uploadOk;
	}	

	echo "<pre>";

//check if MAIN image was selected and upload it file if all okay  
	if(!empty($_FILES['main_img']['name'])){

		if(!empty($_POST['productName'])){

			$target_file = $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/assets/img/products/'.basename($_FILES['main_img']['name']);
			$img_size = $_FILES['main_img']['size'];
			$img_tmp_name = $_FILES['main_img']['tmp_name'];

			$uploadOk = check_img($img_size, $img_tmp_name, $target_file);

			echo "uploadOk value line 114 <br>";
			var_dump($uploadOk);

			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded. <br>";
			}
			else{
				$r = move_uploaded_file($_FILES["main_img"]["tmp_name"], $target_file);	

				var_dump($r);
				if($r){
					echo "<br>Main img uploaded!<br>";
					echo "<img class='smallimg' width='150' height='150' src='../assets/img/products/".$_FILES['main_img']['name']."'> <br>";
				}
			}
			
		}
		else{
			echo "not added another data, we can't upload only image <br>";
		}

	}

// check post content
	if(!empty($_POST)){
		$productName = $_POST['productName'];
		$productDescription = $_POST['productDescription'];
		$quantityInStock = $_POST['quantityInStock'];
		$buyPrice = $_POST['buyPrice'];
		$warehouseCode = $_POST['warehouseCode'];
		$main_img = 'assets/img/products/'.$_FILES['main_img']['name'];
		// $additional_imgs

		$pdo = Database::connect();
		$sql = "INSERT INTO products(productCode, productName, productDescription, quantityInStock, buyPrice, warehouseCode, main_img) value(?, ?, ?, ?, ?, ?, ?)";
		$query = $pdo->prepare($sql);
		
		try{
			$result = $query->execute(array('', $productName, $productDescription, $quantityInStock, $buyPrice, $warehouseCode, $main_img));
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		echo "line 164 result: <br>";
		var_dump($result);

		Database::disconnect();
		
	}

// get id last product
		$pdo = Database::connect();

		$sql = 'SELECT * FROM products';
				
		$data = $pdo->query($sql);
		$last = 0;

		foreach($data as $row){
			$last = $row['productCode'];
		}
				
		Database::disconnect();	

//check if ADDITIONAL images was selected and upload it file if all okay
	if(!empty($_FILES['add_imgs']['name']) && !empty($_POST['productName']))
	{

		// var_dump($_FILES['add_imgs']);

		$pdo = Database::connect();

		for($i=0; $i<count($_FILES['add_imgs']['name']); $i++)
		{
			$target_file_ad = $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/assets/img/products/'.basename($_FILES['add_imgs']['name'][$i]);

			$img_size = $_FILES['add_imgs']['size'][$i];
			$img_tmp_name = $_FILES['add_imgs']['tmp_name'][$i];
			
			$uploadOk = check_img($img_size, $img_tmp_name, $target_file_ad);

			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded. <br>";
			}
			else{
				$r = move_uploaded_file($_FILES["add_imgs"]["tmp_name"][$i], $target_file_ad);	
				if($r){
					echo "<br>Additional img uploaded!<br>";
					echo "<img class='smallimg' width='150' src='../assets/img/products/".$_FILES['add_imgs']['name'][$i]."'> <br><br>";
				}
			
				$url_add_img = 'assets/img/products/'.$_FILES['add_imgs']['name'][$i];

				// add additional img to DB 
				$sql = "INSERT INTO images(id_img, id_product, url_img) value(?, ?, ?)";

				$query = $pdo->prepare($sql);
				
				try{
					$query->execute(array('', $last, $url_add_img));
				} catch(PDOException $e)
				{
					echo $e->getMessage();
				}

			}		/*end else*/

		}/*loop for*/
		
		Database::disconnect();
	}	

	echo "</pre>";

 ?>