<?php 
    namespace Classes;
    class Materia
    {	
    	private $codigo;
        private $nome;
        private $professor;
        private $livros;


    	function __construct($codigo,$nome,$professor)
    	{
    		$this->codigo = $codigo;
    		$this->nome = $nome;
    		$this->professor = $professor;
    	}
    	public function getNome()
    	{
    		return $this->nome;
    	}
    	public function getCodigo()
    	{
    		return $this->codigo;
    	}
    	public function getProfessor()
    	{
    		return $this->professor;
    	}
    	public function setNome($nome)
    	{
    		$this->nome = $nome;
    	}
    	public function setCodigo($codigo)
    	{
    		$this->nome = $codigo;
    	}
    	public function setProfessor($professor)
    	{
    		$this->professor = $professor;
    	}
    	public function addLivro($livro)
    	{
    		$this->livros[] = $livro;
    	}
    	public function listarLivros()
    	{   
            if($this->livros)
            {
                foreach ($this->livros as $key => $value)
                {
                    echo $value->getNome() . "<br>";
                }
            }
    		
    	}
    
    }


 ?>