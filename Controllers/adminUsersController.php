<?php

class adminUsersController extends AdminBase
{	

	static public function actionIndex()
	{
		self::checkAdmin();

		$users = User::getListUsers();

		require_once(ROOT.'/Views/Admin/Users/index.php');
	}

	static public function actionAddUser()
	{
		self::checkAdmin();

		$communicats = '';
		$name='';
		$email='';
		$password='';
		$user_type = 'user';
		$errors = false;

		if(isset($_POST))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$user_type = $_POST['user_type'];

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
	
		require_once(ROOT.'/Views/Admin/Users/add_user.php');	
	
		if($check)
		{
			header('Location: /ad/users');	
		}
	}	

	static public function actionRemoveUser($id)
	{
		self::checkAdmin();

		$data = User::removeUser($id);

		header('Location: /ad/users');
	}

}