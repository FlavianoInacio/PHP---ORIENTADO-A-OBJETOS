<?php 
    /**
    * 
    */
    class Materia
    {	
    	private $codigo;
        private $nome;
        private $semestre;
        private $professor;
        private $livros;


    	function __construct($codigo,$nome,$semestre,$professor)
    	{
    		$this->codigo = $codigo;
    		$this->nome = $nome;
    		$this->semestre = $semestre;
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
    	public function getSemestre()
    	{
    		return $this->semestre;
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
    	public function setSemestre($semestre)
    	{
    		$this->semestre = $semestre;
    	}
    	public function setProfessor($professor)
    	{
    		$this->professor = $professor;
    	}
    	public function addLivro($livro)
    	{
    		$this->livros[] = $livro;
    	}
    	public function getLivros()
    	{
    		foreach ($this->livros as $key => $value) {
    			echo "Livro : " . $value->getNome() . "<br>";
    		}
    	}
    
    }


 ?>