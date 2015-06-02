<?php 
	
	class Conexao 
	{
		public static $instance;

		private function __construct()
		{
			/*
			*/
		}
		public static function getInstance()
		{
			if(!isset(self::$instance))
			{
				self::$instance = new PDO('mysql:host=localhost;dbname=phpoo','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			return self::$instance;
		}
	}


 ?>