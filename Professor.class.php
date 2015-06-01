<?php 
	
	class Professor extends Pessoa
	{
		
		function __construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha)
		{
			parent::__construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha);
		}


	}


 ?>