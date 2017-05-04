<?php 
	// require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/us/views/header.php'; 

	require  'one_product_model.php';

	if($_GET['productCode'] == null && $_GET['productCode'] == '')
	{
		echo "nie jest podany product code ";
		var_dump($_GET['productCode']);
	}
	else
	{
		$data = get_one_product($_GET['productCode']);
	}
?>


<a href="index.php">Powrót</a>
    <div class="container">
		
		<div class="row">
			<h2><?php echo $data['productName']; ?></h2>
			<div class="opis">
				<h3>Opis: </h3>
				<p><?php echo $data['productDescription']; ?></p>				
				<h3>Ilosc: </h3>
				<p><?php echo $data['quantityInStock']; ?></p>				
				<h3>Na jakiem werhousie: </h3>
				<p><?php echo $data['warehouseCode']; ?></p>				
				<h3>Cena: </h3>
				<p><?php echo $data['buyPrice']; ?></p>
			</div>
		</div>
    
    </div> <!-- /container -->

<!-- <?php require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/us/views/footer.php'; ?> -->