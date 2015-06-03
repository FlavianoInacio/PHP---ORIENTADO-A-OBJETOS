<meta charset="UTF-8">
<?php 
	mb_http_output('UTF-8');
    
    function __autoload($class)
    {
   	    require_once($class.".class.php");
    }
    Conexao::getInstance();
    /*
        INTANCIANDO TODOS OBJETOS
    */
    $semestre = new Semestre(01,"2015.1"); 
    $semestre2 = new Semestre(02,"2015.2");
    $pedro = new Professor(01,"Pedro","111.111.111-11","01-01-2010","01020304","5545545");
    $livroPhp = new Livro("Programação Orientada a Objetos com PHP","05-07-2009","Pabli de Oino",1);
    $livroJava = new Livro("Programação Orientada a Objetos com Java","05-07-2009","Pabli de Oino",1);
    $topicosI = new Materia(01,"TOPICOS I",$pedro);
    $Compiladores = new Materia(02,"COMPILADORES",$pedro);

    /*
        Movimenação dos Objetos
    */
    
    $semestre->addMaterias($topicosI);
    $semestre->addMaterias($Compiladores);

    $topicosI->addLivro($livroPhp);
    $topicosI->addLivro($livroJava);

    echo "Semestre : ".$semestre->getNome()."<br>";

    foreach ($semestre->getMateria() as $key => $value) {
        echo "Materia : ".$value->getNome()."<br>";
        echo "Professor : ".$value->getProfessor()->getNome()."<br>";
        echo  "Livro : <br>";
        echo  $value->listarLivros()."<br>";
    }
 ?>