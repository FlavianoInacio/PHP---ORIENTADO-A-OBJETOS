<?php 
  /**
    * 
    */
    class Semestre
    {
       	private $nome;
       	private $codigo;
        private $materias;

        function __construct($codigo,$nome)
        {
            $this->nome = $nome;
            $this->codigo = $codigo;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getMateria()
        {
            return $this->materias;
        }

        public function getCodigo()
        {
            return $this->codigo;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }
    	
        public function addMaterias($materia)
        {
            $this->materias[] = $materia;
        }
    }
 ?>