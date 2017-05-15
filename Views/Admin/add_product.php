<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
 
<body>
	<a class="btn" href="index.php">Powrot</a>
    <div class="container">
		
		<div class="row">
			<h1>Add new product</h1>
		</div>
		
		<form class="row" action="#" method="post" enctype="multipart/form-data">
			<label>Name of product</label><br />
			<input name="productName" type="text" placeholder="product name"><br />

			<label>Brand</label><br />
			<select name="brand_id" id="">
				<option value="">Wybierz...</option>
				<?php foreach ($brands as $row) { ?>
					<option value="<?php echo $row['id'];?>">
						<?php echo $row['brand_name'];?>
					</option>
				<?php } ?>

			</select><br>
			
			<label>Product description</label><br />
			<input name="productDescription" type="text" placeholder="description"><br />
			
			<label>Quantity in Stock</label><br />
			<input name="quantityInStock" type="text" placeholder="quantity"><br />
			
			<label>Price</label><br />
			<input name="buyPrice" type="text" placeholder="price"><br />			
			
			<label>Warehouse</label><br />
			<input name="warehouseCode" type="text" placeholder="warehouse"><br />

			<label>Recommended: </label><br>
			<label for="yes_recom">Yes</label>
			<input name="recommended" id="yes_recom" type="radio" value="true">
			<label for="no_recom">No</label>
			<input name="recommended" id="no_recom" type="radio" value="false"><br />

			<label>Diameter</label><br />
			<input name="diameter" type="number" placeholder="diameter"><br />
			
			<label >Main image</label>
			<input type="file" name="main_img">

			<p>	
			<label for="">Additional images of product</label><br>
			<input type="file" name="add_imgs[]" multiple>
			</p>
			
			
			<button type="submit" class="btn btn-success">Dodaj</button>

		</form>
		
		<h2>Products</h2>
		<ul>
			<?php

				foreach($products as $row){
					echo "<li>".$row['productName']."</li>";
				}
				
			?>
		</ul>

    </div> <!-- /container -->
  </body>
</html>