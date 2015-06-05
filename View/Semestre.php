<?php 
	require_once(" \\xampp\htdocs\phpOO\Main.php");
	echo "Semestre : ".$semestre->getNome()."<br>";
    foreach ($semestre->getMateria() as $key => $value)
    {
        echo "Materia : ".$value->getNome()."<br>";
        echo "Professor : ".$value->getProfessor()->getNome()."<br>";
        echo  "Livro : <br>";
        echo  $value->listarLivros()."<br>";
    }

 ?>