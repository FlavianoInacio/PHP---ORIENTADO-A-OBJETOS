<?php 
	namespace Controller;
	class Professor extends Pessoa
	{
		use Endereco
		{
			Endereco::__construct as private __constructEndereco;
		}

		function __construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha,$endereco,$bairro,$cidade,$uf,$cep,$tel)
		{
			parent::__construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha);
			$this->__constructEndereco($endereco,$bairro,$cidade,$uf,$cep,$tel);
		}


	}


 ?>