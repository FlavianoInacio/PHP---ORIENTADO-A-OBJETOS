<?php 
	require_once ( dirname( dirname( __FILE__ ) ) .DIRECTORY_SEPARATOR."Main.php");
	echo "Semestre : ".$semestre->getNome()."<br>";
    foreach ($semestre->getMateria() as $key => $value)
    {
        echo "Materia : ".$value->getNome()."<br>";
        echo "Professor : ".$value->getProfessor()->getNome()."<br>";
        echo  "Livro : <br>";
        echo  $value->listarLivros()."<br>";
    }

 ?>