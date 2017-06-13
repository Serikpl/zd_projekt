<?php 

/**
* user Controller
*/
class userController extends AdminBase{

	static public function actionLogin()
	{

		$email='';
		$password='';
		$logined = false;

		if(isset($_POST['submit']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			// make method to check validate Name, Email, Password
			
			// array $errors[] 
			$errors = false;

			// check if email exist 
			$user_id = User::checkUserExist($email, $password);

			if($user_id == false)
			{	
				$errors[0] = "Not correct data!";
			}
			else
			{
				$logined = 'Logined!';
			}

			if($errors == false)
			User::loginUser($user_id);

		}

		require_once(ROOT.'/Views/User/login.php');

		return true;

	}

	static public function actionLoginAdmin()
	{

		$errors = false;

		if(User::checkLogged() && User::checkLoggedType() == 'admin')
		{
			header("Location: /ad/products");
		}
		else
		{
			$email='';
			$password='';
			$logined = false;

			if(isset($_POST['submit']))
			{
				$email = $_POST['adlogin'];
				$password = $_POST['adpas'];

				// make method to check validate Name, Email, Password
				// var_dump($email, $password);
				// array $errors[] 
			
				// check if email exist 
				$user_id = User::checkUserExist($email, $password);
				if($user_id == false)
				{	
					$errors[0] = "Not correct data!";
				}

				// check if user admin
				$check_admin = User::checkUserAdmin($email);
				if($check_admin == false)
				{
					$errors[1] = "You not admin! <br>";
				}
				
				if($errors == false)
				{
					User::loginUser($user_id);
					header("Location: /ad/products");
				}
				else
				{
					require_once(ROOT.'/Views/Admin/ad_login.php');
				}

			}	

			require_once(ROOT.'/Views/Admin/ad_login.php');	

		}

		return true;	

	}

    public function actionLogout()
    {

    	User::LogOutUser();
        header("Location: /");
    }
	
	static public function actionRegister()
	{

		$communicats = '';
		$name='';
		$email='';
		$password='';
		$user_type = 'user';

		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

// make method to check validate Name, Email, Password
			
			// array $errors[] 
			$errors = false;

			// check if email exist 
			$email_ex = User::checkEmailExist($email);

			if($email_ex)
			{	
				$errors[0] = 'This email already exists.';
			}

			if($errors == false)
			$check = User::registerUser($name, $email, $password, $user_type);

			if($check)
			{
				$communicats = "New user was registered!";
			}

		}



		require_once(ROOT.'/Views/User/register.php');

		return true;

	}
}

?>