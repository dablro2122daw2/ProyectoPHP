<?php
  session_start();  
  echo "<p style='text-align:right'>"."Nom Usuari:  ".$_SESSION['user']."</p>";
  echo "<p style='text-align:right'>"."Tipus Usuari:  ".$_SESSION['tipus']."</p>";
  echo "<p style='text-align:right'>"."Sessió: ".session_id()."</p>";

  echo "<form style='text-align:right' action='retrocedirpagina.php' method='GET'>";
  echo "<input type='submit' name='RetrocedirPagina' value='Tornar a la Página Anterior'>";
  echo "</form>";

  echo "<form style='text-align:right' action='logout.php' method='GET'>";
  echo "<input type='submit' name='TancarSessio' value='Tancar Sessió'>";
  echo "</form>";

?>

<html> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>

	<h2>Modificar Llibres</h2>
	
	<form method="POST" action="modificarlibro.php">
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

		<input type="submit" name="submit" value="Modificar" />
		<input type="button" value="tornar" onclick="location.href='retrocedirpagina.php'">				
	</form>  
</body>
</html>