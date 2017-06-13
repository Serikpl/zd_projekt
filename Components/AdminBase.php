<?php 

/**
* AdminBase class that contains common logic for controllers that are used in admin panel 
*/
class AdminBase
{
	
    /**
     * Method that checks if user is admin or not
     * @return boolean
     */
    public static function checkAdmin()
    {
       
        $userId = User::checkLogged();

        if($userId)
        {
	        $user_type = User::checkLoggedType();

	        if ($user_type == 'admin') {
	            return true;
	        }        	
        }

        die('Access denied');
    }

}
