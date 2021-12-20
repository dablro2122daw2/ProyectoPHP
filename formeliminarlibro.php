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

	<h2>Eliminar llibre</h2>
	<form method="POST" action="eliminarlibro.php">
		
		Títol del llibre:<br/>
		<input type="text" name="titolLlibre" size="50" /></p>

        <input type="submit" name="submit" value="Eliminar" />
        </form>
</body>
</html>