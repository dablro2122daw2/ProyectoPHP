<?php
  session_start();  
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
 
  if($encontrado==true && $_SESSION['tipus']=="Bibliotecari"){
    echo "Apartat Administrador";
    header('Location: '."espaiadmin.php");
  }

  else if($encontrado==true && $_SESSION['tipus']!="Bibliotecari"){
    echo '  Has sigut validat correctament amb l´usuari i contrasenya indicats.'."<br>";
    header('Location: '."espaiuser.php");
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