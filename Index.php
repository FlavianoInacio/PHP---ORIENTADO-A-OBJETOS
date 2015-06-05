<meta charset="UTF-8">
<?php 
	mb_http_output('UTF-8');
    require_once("Autoload.php");
    require_once(dirname(__FILE__)."\Classes\DataBase\Conexao.class.php");
    use Classes\Semestre;
    use Classes\Professor;
    use Classes\Livro;
    use Classes\Materia;
    Conexao::getInstance();   
    $semestre = new Semestre(01,"2015.1"); 
    $semestre2 = new Semestre(02,"2015.2");
    $pedro = new Professor(01,"Pedro","111.111.111-11","01-01-2010","01020304","5545545","endereco","bairro","cidade","uf","cep","tel");
    $livroPhp = new Livro("Programação Orientada a Objetos com PHP","05-07-2009","Pabli de Oino",1);
    $livroJava = new Livro("Programação Orientada a Objetos com Java","05-07-2009","Pabli de Oino",1);
    $topicosI = new Materia(01,"TOPICOS I",$pedro);
    $Compiladores = new Materia(02,"COMPILADORES",$pedro);
    $semestre->addMaterias($topicosI);
    $semestre->addMaterias($Compiladores);
    $topicosI->addLivro($livroPhp);
    $topicosI->addLivro($livroJava);
    
    echo "<a href='View/Semestre.php'>Semestre</a>";

 
 ?>