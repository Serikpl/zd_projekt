<?php 

/**
* User class
*/
class User
{

	public static function loginUser($id)
	{
		$_SESSION['user'] = $id;
	}	

	public static function logOutUser()
	{
		unset($_SESSION['user']);
	}

	public static function checkLogged()
    {

        if (isset($_SESSION['user'])) {
            return true;
        }

    }
	
	public static function checkLoggedType()
    {

        if (isset($_SESSION['user'])) {
            
        	$id = $_SESSION['user'];

			$pdo = Database::connect();

			$sql = 'SELECT user_type FROM users WHERE id = ?';
			$query = $pdo->prepare($sql);	        	

			try{
				$query->execute(array($id));
			}
			catch(PDOexeption $e)
			{
				echo $e->getMessage;
			}

			$type = $query->fetch(PDO::FETCH_ASSOC);

			Database::disconnect();

            return $type['user_type'];
        }

    }	

    public static function getLogedName()
    {

        if (isset($_SESSION['user'])) {
            
        	$id = $_SESSION['user'];

			$pdo = Database::connect();

			$sql = 'SELECT name FROM users WHERE id = ?';
			$query = $pdo->prepare($sql);	        	

			try{
				$query->execute(array($id));
			}
			catch(PDOexeption $e)
			{
				echo $e->getMessage;
			}

			$name = $query->fetch(PDO::FETCH_ASSOC);

			Database::disconnect();

            return $name['name'];
        }

    }

	public static function loggedId()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }    	
    }

    public static function getListUsers()
    {
		$pdo = Database::connect();

		$sql = 'SELECT * FROM users';
		$query = $pdo->prepare($sql);		

		try{
			$query->execute();
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		// fetchAll(PDO::FETCH_ASSOC);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);

		Database::disconnect();   
		
		return $data; 	
    }

	public static function registerUser($name, $email, $password, $user_type = "admin")
	{

		// date now
		$register_date = date('Y-m-d G:i:s');
		
		// user type 
		// $user_type = "admin";

		$password = self::make_password_hash($password);

		$pdo = Database::connect();

		// def 1 'Serhii', 'serikpl@ukr.net', 'root', 'admin', '2017-05-09' 
		$sql = "INSERT INTO users(id, name, email, password, user_type, register_date) value(?, ?, ?, ?, ?, ?)";
		
		$query = $pdo->prepare($sql);

		try{
			$check = $query->execute(array('', $name, $email, $password, $user_type, $register_date));
		} catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		Database::disconnect();

		return $check;

	}

	public static function checkEmailExist($email)
	{

		$pdo = Database::connect();

		// literowka byla: bylo emial, musi byc email 
		$sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
		$query = $pdo->prepare($sql);		
		$query->bindParam(':email', $email, PDO::PARAM_STR);

		try{
			$query->execute();
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		// not fetch() not fetchAll(PDO::FETCH_ASSOC);
		$data = $query->fetchColumn();

		Database::disconnect();

		$result = "";		

		if ($data) 
		{
			// exist
			$result = true;
		}
		else
		{
			// not exist
			$result = false;	
		}

		return $result;
	}	

	public static function checkUserExist($email, $password)
	{

		$pdo = Database::connect();

		$sql = 'SELECT * FROM users WHERE email = ?';
		$query = $pdo->prepare($sql);		

		try{
			$query->execute(array($email));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		// fetchAll(PDO::FETCH_ASSOC)/fetchAll(PDO::FETCH_NUM)
		$user = $query->fetch(PDO::FETCH_ASSOC);
	
		$hash = $user['password'];

		$result = self::verify_password_hash($password, $hash);
		
		Database::disconnect();	

		if ($result) 
		{
			// exist and return ID
			return $user['id'];
		}
		else
		{
			return false;
		}

	}

	public static function checkUserAdmin($email)
	{
		$user_type = 'admin';

		$pdo = Database::connect();

		$sql = 'SELECT * FROM users WHERE email = ? AND user_type = ?';
		$query = $pdo->prepare($sql);		

		try{
			$query->execute(array($email, $user_type));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		// fetchAll(PDO::FETCH_ASSOC)/fetchAll(PDO::FETCH_NUM)
		$user_admin = $query->fetch(PDO::FETCH_ASSOC);

		Database::disconnect();

		$result = "";		

		if ($user_admin) 
		{
			// exist and return ID
			return true;
		}

		return false;		
	}	

	public static function removeUser($id)
	{
		$pdo = Database::connect();

		$sql = 'DELETE FROM users WHERE id = ?';
		$query = $pdo->prepare($sql);		

		try{
			$res = $query->execute(array($id));
		}
		catch(PDOexeption $e)
		{
			echo $e->getMessage;
		}

		Database::disconnect();

		return $res;

	}

 	public static function make_password_hash($password) 
 	{ 
 		return password_hash($password, PASSWORD_DEFAULT, ['cost' => 13]); 
 	} 

 	public static function verify_password_hash($password, $hash) 
 	{ 
 		return password_verify($password, $hash); 
 	} 

}

?>		