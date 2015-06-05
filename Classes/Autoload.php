<?php 

	function __autoload($class)
	{
		$class = dirname(__FILE__).DIRECTORY_SEPARATOR. str_replace('\\', DIRECTORY_SEPARATOR, $class).".class.php";
		
		require_once($class);

	}
 ?>