<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
 
<body>
    <div class="container">

		<h1>Products</h1>
		<div class="row">
		<p>
			<a href="add_product.php" class="btn">Add new product</a>
		</p>

		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>productDescription</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Warehouse</th>
					<th>Opcje</th>
				</tr>
			</thead>
		<tbody>
		
			<?php
				require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/db/database.php';
				$pdo = Database::connect();

				$sql = 'SELECT * FROM products';
				
				foreach($pdo->query($sql) as $row){
					echo '<tr>';
					echo "<td><a href='single_prod.php?productCode=".$row['productCode']."'>".$row['productName']."</a></td>";
					echo "<td>".$row['productDescription']."</td>";
					echo "<td>".$row['quantityInStock']."</td>";
					echo "<td>".$row['buyPrice']."</td>";
					echo "<td>".$row['warehouseCode']."</td>";
					echo "<td>
					    <a href='edit_prod.php?productCode=".$row['productCode']."'>Edytuj</a>
					    <a href='remove_prod.php?productCode=".$row['productCode']."&productName=".$row['productName']."'>Usun</a></td>";
					echo '</tr>';
				}
				
				Database::disconnect();
			?>

		</tbody>
		</table>

		</div>
    </div> <!-- /container -->