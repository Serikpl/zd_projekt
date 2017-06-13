<?php


class adminBrandsController extends AdminBase
{

	

	static public function actionIndex()
	{
		// self::checkAdmin();

		$brands = Brand::getListBrands();

		require_once(ROOT.'/Views/Admin/Brands/index.php');
	}

	static public function actionAddBrand()
	{
		// self::checkAdmin();

		if($_POST)
		{
			$name_new_brand = $_POST['brandName'];

			$check = Brand::addNewBrand($name_new_brand);
		}
	
		require_once(ROOT.'/Views/Admin/Brands/add_brand.php');	
	
		if($check)
		{
			header('Location: /ad/brands');	
		}
	}	

	static public function actionRemoveBrand($id)
	{
		// self::checkAdmin();

		var_dump($id);
		$data = Brand::removeBrand($id);

		header('Location: /ad/brands');
	}

}