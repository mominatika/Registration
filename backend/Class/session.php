<?php
 session_start();
 class session
 {
 	static function get($key)
 	{

 		if(isset($_SESSION[$key]))
 			return $_SESSION[$key];
 			return null;

 		

 	}
 	static function set($key,$value)
 	{
 		if(isset($_SESSION[$key]))
 			unset($_SESSION[$key]);
 			 $_SESSION[$key] =$value;
 	}
 	static function isLogin()
 	{
 		if(isset($_SESSION['user']) && $_SESSION['user'] != null)
 			return true;

 			return false;
 	}
 	static function destroy()
 	{
 		session_destroy();
 	}

 }

?>