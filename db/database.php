<?php
	class Database
	{
	     
	    private static $cont  = null;
	     
	    public function __construct() {
	        die('Init function is not allowed');
	    }
	     
	    public static function connect()
	    {
	       // One connection through whole application
	       if ( null == self::$cont )
	       {     
	        try
	        {
	          self::$cont =  new PDO('mysql:host=localhost;dbname=shop_db;encoding=utf8_general_ci', 'root','');
	        }
	        catch(PDOException $e)
	        {
	          die($e->getMessage()); 
	        }
	       }
	       return self::$cont;
	    }
	     
	    public static function disconnect()
	    {
	        self::$cont = null;
	    }
	}
?>
