<?php


class productController 
{

	static public function actionView($productCode)
	{

		$product = Product::get_one_product($productCode);
		
		$brand = Brand::getOneBrand($product['brand_id']);
		$brand_name = $brand['brand_name'];

		require_once(ROOT.'/Views/Product/product_view.php');
		
	}

}