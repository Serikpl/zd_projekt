<?php 

/**
* controller Cart
*/
class cartController 
{
	
	static function actionAdd($id)
	{
		
        // $referrer = $_SERVER['HTTP_REFERER'];
        // header("Location: $referrer");
	
		echo Cart::addProduct($id);	
		return true;
	}

	static function actionIndex()
	{
		
		$products = Cart::getProducts();
		$common_price = Cart::getTotalPrice();

		require_once(ROOT.'/Views/Cart/cart.php');		
	}

	static function actionDel($id)
	{	
		Cart::delProd($id);

		header('Location: /cart/');
	}

}