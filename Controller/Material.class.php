<?php 
	namespace Controller;
	class Material 
	{
		private $nome;
		private $dataPublicacao;
		private $autor;

		function __construct($nome,$dataPublicacao,$autor)
		{
			$this->nome = $nome;
			$this->dataPublicacao = $dataPublicacao;
			$this->autor = $autor;
		}
		public function getNome()
    	{
    		return $this->nome;
    	}
    	public function getDataPublicacao()
    	{
    		return $this->dataPublicacao;
    	}
    	public function getAutor()
    	{
    		return $this->autor;
    	}
	}

 ?>