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

<h1>Administrador</h1>
<form action="espaiadmin.php" method="GET">
  <input type="submit" name="consultarusuaris" value="Visualització de totes les dades de l'usuari">
  <input type="submit" name="consultarbibliotecaris" value="Visualització de totes les dades dels bibliotecaris">
  <input type="submit" name="consultarllibres" value="Visualització del cataleg de llibres">


  
  <?php
    if(isset($_GET['consultarusuaris'])){
      $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
      $encontrado=false;
      
      while ($linea = fgets($archivo)){
        $partes = explode('|', trim($linea));
        
        //no mostramos los datos del admin 
        if ($partes[0] =="admin" ){
          echo "";
        }
        else{
          echo "<br>".$linea."<br>";
        }
      }
    
      fclose($archivo);
    }
    if(isset($_GET['consultarbibliotecaris'])){
      $archivo = fopen("bibliotecarios.txt", "r") or die("Error - No fue poible abrir el archivo");
      $encontrado=false;
      
      while ($linea = fgets($archivo)){
        $partes = explode('|', trim($linea));
        
        //no mostramos los datos del admin 
        if ($partes[0] =="admin" ){
          echo "";
        }
        else{
          echo "<br>".$linea."<br>";
        }
      }
    
      fclose($archivo);
    }
    if(isset($_GET['consultarllibres'])){
      $archivo = fopen("libros.txt", "r") or die("Error - No fue poible abrir el archivo");
      $encontrado=false;
      
      while ($linea = fgets($archivo)){
        $partes = explode('|', trim($linea));
        
        //no mostramos los datos del admin 
        if ($partes[0] =="admin" ){
          echo "";
        }
        else{
          echo "<br>".$linea."<br>";
        }
      }
    
      fclose($archivo);
    }
  ?>  
</form>

<input type="button" value="Nou llibre" onclick="location.href='formcrearlibro.php'">
<input type="button" value="Esborrar llibre" onclick="location.href='formeliminarlibro.php'">
<input type="button" value=" Modificar llibre" onclick="location.href='formmodificarlibro.php'"><br>
<br>
<input type="button" value="Nou usuari/bibliotecari" onclick="location.href='formcrearusuario.php'">
<input type="button" value="Esborrar usuari/bibliotecari" onclick="location.href='eliminartipusUsuario.php'">
<input type="button" value=" Modificar usuari/bibliotecari" onclick="location.href='modificartipusUsuario.php'">
