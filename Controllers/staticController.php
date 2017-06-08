<?php


class staticController 
{

	static public function actionContact()
	{
		require_once(ROOT.'/Views/Static/contact.php');	
	}

	static public function actionEx_rate()
	{

		$base = 'PLN';
		$def_sumbols = 'USD,GBP,EUR,RUB';
		$currencys = array('PLN','USD','GBP','EUR','RUB');

		$json = file_get_contents('http://api.fixer.io/latest?base='.$base.'&symbols='.$def_sumbols);
		$data = json_decode($json, true);

		$new_data = "";

		if(isset($_POST['currency']))
		{
			$new_base = $_POST['currency'];

			foreach ($currencys as $key => $value) 
			{
				if($new_data == $value)
				{
					unset($currencys[$key]);
				}
			}

			$symbols = implode(',',$currencys);
			

			$json = file_get_contents('http://api.fixer.io/latest?base='.$new_base.'&symbols='.$symbols);

			$data = json_decode($json, true);



		}


		require_once(ROOT.'/Views/Static/ex_rate.php');	
	}

}