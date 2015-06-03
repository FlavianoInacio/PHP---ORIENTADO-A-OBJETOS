<?php 

	trait Endereco
	{
		private $endereco;
		private $bairro;
		private $cidade;
		private $uf;
		private $cep;
		private $tel;

		public function setEndereco($endereco)
		{
			$this->endereco = $endereco;
		}

		public function GetEndereco()
		{
			return $this->endereco;
		}
	}

 ?>