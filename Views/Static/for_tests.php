<?php 



echo "<pre><br>";
print_r($return_arr);
echo "</pre><br>";


echo "<pre><br>";
// var_dump($data);
echo "</pre><br>";


echo "<pre><br>";
// echo $return_arr;
echo "</pre><br>";



 // Создание класса Password для управления: 
  
  // class Password { 
  		
  // 		const SALT = 'MyVoiceIsMyPassport'; 
  		
  // 		public static function hash($password) 
  // 		{ 
  // 			return hash('sha512', self::SALT . $password); 
  // 		} 
  	
  // 		public static function verify($password, $hash) 
  // 		{ 
  // 			return ($hash == self::hash($password)); 
  // 		} 
  // } 


//  class Password 
//  { 
//  	public static function hash($password) 
//  	{ 
//  		return password_hash($password, PASSWORD_DEFAULT, ['cost' => 14]); 
//  	} 

//  	public static function verify($password, $hash) 
//  	{ 
//  		return password_verify($password, $hash); 
//  	} 
// }

//   // Хеширование пароля: 
//   $hash = Password::hash('root'); 
//   var_dump($hash);
//   // Проверка по введенному паролю (В этом примере верификация закончится неудачей) 
//   if (Password::verify('root', $hash)) 
//   	{ echo 'Correct Password!\n'; } 
//   else 
//   	{ echo "Incorrect login attempt!\n"; }

 
