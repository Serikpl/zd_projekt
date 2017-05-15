<?php


class storeController 
{

	static public function actionIndex()
	{

		$products = array();
		$products = Product::get_list_products();
		$brands = Brand::getListBrands();
		$brand_selected = "";

		require_once(ROOT.'/Views/Store/store_view.php');		
	}

	static function actionBrand($id)
	{
		$products = array();
		$products = Product::getOneBrandProducts($id);                             
		$brands = Brand::getListBrands();
		$brand_selected = Brand::getOneBrand($id);
		$brand_selected = $brand_selected['brand_name'];

		require_once(ROOT.'/Views/Store/store_view.php');
	}	

}