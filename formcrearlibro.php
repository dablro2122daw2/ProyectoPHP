<?php
	session_start();  
	echo "<p style='text-align:right'>"."usuari:  ".$_SESSION['user']."</p>";
	echo "<p style='text-align:right'>"."Sessió: ".session_id()."</p>";

  	if($_SESSION['user']!="admin"){
		echo "Apartat User";
		// $comandes.getAll();
 	}
?>

<html> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>

	<h2>Registre de Llibres</h2>
	
	<form method="POST" action="crearlibro.php">
		Títol del Llibre:<br/>
		<input type="text" name="titolLlibre" size="50" /></p>
        
		Nom de l'Autor del Llibre:<br/>
        <input type="text" name="autorLlibre" size="50" /></p>
   
		Prestec:<br/>
		<select name="prestec">
			<option value="Si">Si</option>
			<option value="No">No</option>
		 </select></p>
   
		Data del Prestec:<br/>
		<input type="date" name="dataPrestec"></p>
      
        Codi d'Usuari:<br/>
        <input type="text" name="user" size="50" /></p>
   
		ISBN del Llibre:<br/>
		<input type="text" name="ISBN" size="50" /></p>

		<input type="submit" name="submit" value="Crear" />
		<input type="button" value="tornar" onclick="location.href='registroulogin.php'">				
	</form>  
</body>
</html>