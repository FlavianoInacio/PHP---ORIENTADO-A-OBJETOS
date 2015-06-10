<?php 
	namespace Controller;
	trait Endereco
	{
		private $endereco;
		private $bairro;
		private $cidade;
		private $uf;
		private $cep;
		private $tel;

		public function __construct($endereco,$bairro,$cidade,$uf,$cep,$tel)
		{
			$this->endereco = $endereco;
			$this->bairro = $bairro;
			$this->cidade = $cidade;
			$this->uf = $uf;
			$this->cep = $cep;
			$this->tel = $tel;
		}

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