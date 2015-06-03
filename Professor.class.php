<?php 
	
	class Professor extends Pessoa
	{
		use Endereco;

		function __construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha)
		{
			parent::__construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha);
		}


	}


 ?>