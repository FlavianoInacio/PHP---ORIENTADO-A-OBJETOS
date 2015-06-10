<?php 
	require_once(dirname(dirname(__FILE__))."/Autoload.php");
	use Controller\Materia;
	if(isset($_POST['Cadastrar'])){
		$materia = new Materia($_POST['Materia'],$_POST['Professor']);
		echo $materia->getNome();
	}
 	echo "<form method='POST' >
 		<label>Materia</label><br>
 		<input type='text' name='Materia'><br>
 		<label>Professor</label><br>
 		<input type='text' name='Professor'><br>
 		<label>Livros</label><br>
 		<select name='linguagens' size='7' multiple='multiple'>
 			<optgroup label='Livros para Web'>
  				<option value='Livros para Web'>PHP ORIENTADO A OBJETOS</option>
  				<option value='Livros para Web'>PHP MODERNO</option>
  				<option value='Livros para Web'>JSF DESIGN PATNERS</option>
  				<option value='Livros para Web'>CAKE PHP 3</option>
 			</optgroup>
 			<optgroup label='Livros Desktop'>
  				<option value='Livros Desktop'>C# + .NET</option>
  				<option value='Livros Desktop'>JAVA JSE</option>
  				<option value='Livros Desktop'>BIBLIA DO C</option>
  				<option value='Livros Desktop'>RUBY</option>
 			</optgroup>
		</select> 
		<br><input	type='submit' value='Cadastrar' name='Cadastrar'>
 	</form>";
  ?>