<?php

/**
 * class Cart
 */
class Cart
{

	public static function addProduct($id)
	{
		$cart = [];

        if (isset($_SESSION['products'])) {
           
            $cart = $_SESSION['products'];
        }		

		if(!empty($cart[$id]))
		{
			$cart[$id]++;	
		}
		else
		{
			$cart[$id] = 1;
		}
		
		$_SESSION['products'] = $cart;	

		return self::countCartItems();	

	}

	static public function countCartItems()
	{
		if(isset($_SESSION['products']))
		{
			$count = 0;
			foreach ($_SESSION['products'] as $id => $quantity) {
				$count = $count+$quantity;
			}
			return $count;
		}
		else
		{
			return 0;
		}
	}	

	static public function getProducts()
	{

		$session_products = array();

		if(isset($_SESSION['products']))
		{
			foreach ($_SESSION['products'] as $key=>$value) {
				$session_products[$key] = Product::get_one_product($key);
				$session_products[$key]['quantity'] = $value;
			}	
		}

		return $session_products;
	}

	static public function delProd($id)
	{

		unset($_SESSION['products'][$id]);

		// return $_SESSION['products'];
	}

	static public function getTotalPrice()
	{
		$common_price = 0;

		$session_products = self::getProducts();
		foreach ($session_products as $key => $value) {
			$val_p = $session_products[$key]['buyPrice']*$session_products[$key]['quantity'];
			$common_price=$common_price+$val_p;
		}

		return $common_price;
	}

}
