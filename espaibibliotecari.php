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

<h1>Bibliotecari</h1>
<form action="espaibibliotecari.php" method="GET">
  <input type="submit" name="consultarbibliotecaris" value="Visualització de totes les dades dels bibliotecaris"><br>

  
  <?php
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
  ?>  
</form>

<input type="button" value="Nou llibre" onclick="location.href='formcrearlibro.php'">
<input type="button" value="Esborrar llibre" onclick="location.href='formeliminarlibro.php'">
<input type="button" value=" Modificar llibre" onclick="location.href='formmodificarlibro.php'"><br>
<br>
<input type="button" value="Nou Usuari" onclick="location.href='formaltausuario.php'">
<input type="button" value="Esborrar Usuari" onclick="location.href='formeliminarusuario.php'">
<input type="button" value=" Modificar Usuari" onclick="location.href='formModificarUsuario.php'">
