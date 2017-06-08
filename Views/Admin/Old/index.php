<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
 
<body>
    <div class="container">

		<ul>
			<li><a href="/ad/products">Products</a></li>
			<li><a href="/ad/categories">Categories</a></li>
			<li><a href="/ad/users">Users</a></li>
			<li><a href="/ad/Orders">Orders</a></li>
			<li><a href="/ad/statistics">Statistics</a></li>
		</ul>

		<h1>Products</h1>
		<div class="row">
		<p>
			<a href="/ad/add_product/" class="btn">Add new product</a>
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
				
				foreach($products as $row){
					echo '<tr>';
					echo "<td><a href='/ad/edit_prod/".$row['productCode']."'>".$row['productName']."</a></td>";
					echo "<td>".$row['productDescription']."</td>";
					echo "<td>".$row['quantityInStock']."</td>";
					echo "<td>".$row['buyPrice']."</td>";
					echo "<td>".$row['warehouseCode']."</td>";
					echo "<td>
					    <a href='/ad/edit_prod/".$row['productCode']."'>Edytuj</a>
					    <a href='/ad/remove_prod/".$row['productCode']."'>Usun</a></td>";
					echo '</tr>';
				}
				
			?>

		</tbody>
		</table>

		</div>
    </div> <!-- /container -->