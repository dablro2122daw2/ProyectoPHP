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
	header( "refresh:10;url=./retrocedirpagina.php" );
?>

<h1>El bibliotecari ha sigut eliminat amb éxit</h1>
<p>Esperi uns segons a que sigui retornat al menú principal</p>

<?php

$user= $_SESSION['user'];
?>

<?php

# archivo a leer 
$f_users = 'bibliotecarios.txt';
$path = '';

# abro archivo, lo leo y lo cargo en variable como string y se cierra
$file = file_get_contents($path.$f_users);

# separo enlineas
$lineas = explode($_POST['user'],$file);

$users = array();
foreach ($lineas  as $ix => $linea)
{
	if (!in_array($user,$users))
	{
		$users[] = $user;
	}else
		unset ($lineas[$ix]);
}


# sobre-escribo el archivo
file_put_contents($path.$f_users,$lineas);
?>
