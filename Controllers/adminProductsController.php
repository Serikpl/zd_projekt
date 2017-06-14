<?php


class adminProductsController extends AdminBase
{

	static public function actionIndex()
	{

		// self::checkAdmin();

		$products = array();
		$products = Product::get_list_products();
		
		require_once(ROOT.'/Views/Admin/Products/index.php');
		
	}



	static public function actionAddProduct()
	{
		// self::checkAdmin();

		$products = array();
		$products = Product::get_list_products();
	
		$brands = Brand::getListBrands();

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
		}// end check_img()

		echo "<pre>";

		//check if MAIN image was selected and upload it file if all okay  
		if(!empty($_FILES['main_img']['name'])){

			if(!empty($_POST['productName'])){

				$target_file = $_SERVER['DOCUMENT_ROOT'].'/assets/img/products/'.basename($_FILES['main_img']['name']);
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
						echo "<img class='smallimg' width='150' src='../../assets/img/products/".$_FILES['main_img']['name']."'> <br>";
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
			$brand_id = $_POST['brand_id'];
			$productDescription = $_POST['productDescription'];
			$quantityInStock = $_POST['quantityInStock'];
			$buyPrice = $_POST['buyPrice'];
			$warehouseCode = $_POST['warehouseCode'];
			$main_img = 'assets/img/products/'.$_FILES['main_img']['name'];
			$recommended = $_POST['recommended'];
			$diameter = $_POST['diameter'];

			$pdo = Database::connect();
			$sql = "INSERT INTO products(productCode, productName, brand_id, productDescription, quantityInStock, buyPrice, warehouseCode, main_img, its_recommended, diameter) value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$query = $pdo->prepare($sql);
			
			try{
				$result = $query->execute(array('', $productName, $brand_id, $productDescription, $quantityInStock, $buyPrice, $warehouseCode, $main_img, $recommended ,$diameter));
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
				$target_file_ad = $_SERVER['DOCUMENT_ROOT'].'/assets/img/products/'.basename($_FILES['add_imgs']['name'][$i]);

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

		require_once(ROOT.'/Views/Admin/Products/add_product.php');
	
	}// end actionAdd_product()

	// delete product
	static public function actionRemoveProd($id)
	{

		// self::checkAdmin();

		$result_d = Product::remove_prod($id);

		header('Location: /ad');

	}

	//	edition product 
	static public function actionEditProd($id)
	{
		// self::checkAdmin();

		$data = Product::get_one_product($id);

		// var_dump($data);

		$brands = Brand::getListBrands();

		if(!empty($_POST))
		{


			if($data['productName'] != $_POST['productName'] && $_POST['productName'] != ''){
				$productName = $_POST['productName'];
			}
			else{
				$productName = $data['productName'];
			}			

			if($data['brand_id'] != $_POST['brand_id'] && $_POST['brand_id'] != ''){
				$brand_id = $_POST['brand_id'];
			}
			else{
				$brand_id = $data['brand_id'];
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

			if($data['its_recommended'] != $_POST['its_recommended'] && $_POST['its_recommended'] != ''){
				$its_recommended = $_POST['its_recommended'];
			}
			else{
				$its_recommended = $data['its_recommended'];
			}

			if($data['diameter'] != $_POST['diameter'] && $_POST['diameter'] != ''){
				$diameter = $_POST['diameter'];
			}
			else{
				$diameter = $data['diameter'];
			}						
			
			// var_dump($productName, $brand_id, $productDescription, $quantityInStock, $buyPrice, $warehouseCode, $its_recommended ,$diameter, $id);

			$pdo = Database::connect();

			$sql = "UPDATE products SET productName = ?, brand_id = ?, productDescription = ?, quantityInStock = ?, buyPrice = ?, warehouseCode = ?, its_recommended = ?, diameter = ? WHERE productCode = ?";
			$query = $pdo->prepare($sql);

			try{
				$ch = $query->execute(array($productName, $brand_id, $productDescription, $quantityInStock, $buyPrice, $warehouseCode, $its_recommended ,$diameter, $id));

				var_dump($ch);
		
			} catch(PDOException $e)
			{
				echo $e->getMessage();
			}	

			Database::disconnect();

			if($ch){
				// header("Location: index.php");
				echo "Edited";	
			}
			else{
				echo "error ";
			}
		}

		require_once(ROOT.'/Views/Admin/Products/edit_prod.php');

	}/*end action edit_prod*/

}/*end admin controller*/