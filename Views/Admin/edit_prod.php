<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 
<body>

	<a class="btn" href="../">Powrot</a>
    <div class="container">
		
		<div class="row">
			<h1>Edit product</h1>
		</div>
		
		<form class="row" action="#" method="post">
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
			<img src="../../<?php echo $data['main_img']; ?>" alt="main_img" width="200">

			<label for="">Additional images of product</label><br>
			<!-- <img src="../<?php echo $data['main_img']; ?>" alt="main_img"> -->
			
			<br>
			<button type="submit" class="btn btn-success">Edytuj</button>
			<!-- <a class="btn" href="index.php">Powrot</a> -->
		</form>
		
    </div> <!-- /container -->
  </body>
</html>