<?php 
    namespace Classes;
    class Pessoa extends Usuario
    {
    	private $nome;
    	private $codigo;
    	private $cpf;
    	private $dataNascimento;

    	function __construct($codigo,$nome,$cpf,$dataNascimento,$matricula,$senha)
    	{
    		parent::__construct($matricula,$senha);
    		$this->nome = $nome;
    		$this->codigo = $codigo;
    		$this->cpf = $cpf;
    		$this->dataNascimento = $dataNascimento;
    	}
    	public function getNome()
    	{
    		return $this->nome;
    	}
    	public function getCodigo()
    	{
    		return $this->codigo;
    	}
    	public function getCpf()
    	{
    		return $this->cpf;
    	}
    	public function getDataNascimento()
    	{
    		return $this->dataNascimento;
    	}
    }


 ?>