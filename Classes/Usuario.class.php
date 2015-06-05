<?php 
	namespace Classes;
	class Usuario 
	{
		private $matricula;
		private $senha;
		function __construct($matricula,$senha)
		{
			$this->matricula = $matricula;
			$this->senha = $senha;
		}
		protected function login()
		{
			return null;
		}
	}

 ?>