<meta charset="UTF-8">
<?php 
	mb_http_output('UTF-8');
    
    function __autoload($class)
    {
   	    require_once($class.".class.php");
    }

    $semestre = new Semestre(01,"2015.1");
    $semestre2 = new Semestre(02,"2015.2");
    $pedro = new Professor(01,"Pedro","111.111.111-11","01-01-2010","01020304","5545545");
    $pooPHP = new Livro("Programação Orientada a Objetos com PHP","05-07-2009","Pabli de Oino",1);
    $pooJava = new Livro("Programação Orientada a Objetos com Java","05-07-2009","Pabli de Oino",1);
    /*
    echo "Código do Semestre : ".$semestre->getCodigo()."<br>";
    echo "Semestre cadastrado : ".$semestre->getNome()."<br>";
    $semestre->setNome("2015.2");
    $semestre->setCodigo(02);
    echo $semestre->getNome()."<br>";
    echo $semestre->getCodigo()."<br>";
	*/

    $topicosI = new Materia(01,"TOPICOS I",$semestre,$pedro);
    $topicosI->addLivro($pooPHP);
    $topicosI->addLivro($pooJava);
    echo "Matéria : " . $topicosI->getNome() . "<br>";
    echo "Semestre : " . $topicosI->getSemestre()->getNome() ."<br>";
    echo "Professor : " . $topicosI->getProfessor()->getNome() . "<br>";
    echo $topicosI->getLivros();
    /*
    $topicosI->setSemestre($semestre2);
    echo "Matéria : ".$topicosI->getNome()."<br>";
    echo "Semestre : ".$topicosI->getSemestre()->getNome()."<br>";
	*/

 ?>