<?php 
	namespace Controller;
	class Livro extends Material
	{
		private $capitulo;
		function __construct($nome,$dataPublicacao,$autor,$capitulo)
		{	
			$this->capitulo = $capitulo;
			parent::__construct($nome,$dataPublicacao,$autor);
		}
	}


 ?>