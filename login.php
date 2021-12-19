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

<h1>Accés usuari </h1>

<?php

 // recupera los datos del envío POST

  $user = $_POST["user"];

  $pass = $_POST["pass"];

  $tipus = $_POST["tipus"];


  $_SESSION['user']= $user;
  $_SESSION['tipus']= $tipus;

  echo $_SESSION['tipus']."<br>";
  define("ARCHIVO_USUARIOS", "usuarios.txt","bibliotecarios.txt");

  // Mostramos contenido del archivo
  $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
  $archivo2 = fopen("bibliotecarios.txt", "r") or die("Error - No fue poible abrir el archivo");
  $archivo3 = fopen("admin.txt", "r") or die("Error - No fue poible abrir el archivo");
     
  $encontrado=false;

  while($linea = fgets($archivo)){
    $partes = explode('|', trim($linea));
    
    if(($user == $partes[0]) && ($pass == $partes[1])){
      $encontrado=true;
      break;
    }
  }
 
  while($linea = fgets($archivo2)){
    $partes = explode('|', trim($linea));
    
    if (($user == $partes[0]) && ($pass == $partes[1])){
      $encontrado=true;
      break;
    }
  }
  while($linea = fgets($archivo3)){
    $partes = explode('|', trim($linea));
    
    if (($user == $partes[0]) && ($pass == $partes[1])){
      $encontrado=true;
      break;
    }
  }
  if($encontrado==true && $_SESSION['tipus']=="Bibliotecari"){
    echo "Apartat bibliotecari";
    header('Location: '."espaibibliotecari.php");
  }

  else if($encontrado==true && $_SESSION['tipus']=="Usuari"){
    echo ' Apartat usuari.'."<br>";
    header('Location: '."espaiuser.php");
    echo "Les teves dades personales son: ".$linea;
  }
  else if($encontrado==true && $_SESSION['tipus']=="Admin"){
    echo ' Apartat administrador.'."<br>";
    header('Location: '."espaiadmin.php");
    echo "Les teves dades personales son: ".$linea;
  }
  else{
    echo "   l´usuari o el password introduït son incorrectes ";
    echo "   Retornant a la página de registre, un moment si us plau ";
    header( "refresh:10;url=./registroulogin.php" );
  }
  
  fclose($archivo);
 
?>

<br><br><br>
<input type="button" value="tornar" onclick="location.href='registroulogin.php'">