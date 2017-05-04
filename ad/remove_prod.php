<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
</head>
 
<body>

	<a class="btn" href="index.php">Powrot</a>
    <div class="container">
<?php 

	// echo "remove produkt";
	// echo $_GET['productCode'];
	
	$id_prod = 0;

	if(!empty($_GET['productCode'])){

		$id_prod = $_GET['productCode'];		
		$prodName = $_GET['productName']; 
?>

		<div class="row">
			<h1>Delete product</h1>
		</div>
		
		<form class="row" action="remove_prod.php" method="post">
			<input type="hidden" value="<?php echo $id_prod; ?>" name='productCode'>

			<h2>Chcesz usunąć ten produkt "<?php echo $prodName; ?>" ? </h2>
			<button type="submit" class="btn btn-success">Tak</button>
			<a class="btn" href="index.php">Nie</a>

		</form>

<?php
	}

	if(!empty($_POST)){

		require $_SERVER['DOCUMENT_ROOT'].'/study/Project_ZD/db/database.php';
		
		$pdo = Database::connect();

		$sql = 'DELETE FROM products WHERE productCode = ?';

		$query = $pdo->prepare($sql);

		$ch = $query->execute(array($_POST['productCode']));

		// $data = $query->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();
	
		if($ch){
			echo "deleted!";	
		}else{
			echo "somthing go wrong!";
		}

	}

 ?>
	
    </div> <!-- /container -->
  </body>
</html>