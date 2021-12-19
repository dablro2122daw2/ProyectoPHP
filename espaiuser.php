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

<h1>Usuari</h1>
<form method="POST">
  <input type="submit" name="submit" value="Visualitzar Dades Personals"><br>

  <?php
    if(isset($_POST['submit'])){
      $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
      $encontrado=false;
   
      while($linea = fgets($archivo)){
        $partes = explode('|', trim($linea));
        
        if(($_SESSION['user'] == $partes[0])){
          $encontrado=true;
          break;
        }
      }
      
      echo "Les teves dades personales son: ".$linea;
      fclose($archivo);
    }
  ?>
</form>


<form method="post">
  <input type="submit" name="submitmodificacio" value="Modificar Dades Personals"><br>
  
  <?php
    if(isset($_POST['submitmodificacio'])){
      echo "Modificacio de dades";
      header('Location: '."formularioModificarUsuario.php");
    }
  ?>  
</form>

<input type="button" value="Crear comandes" onclick="location.href='Compra.php'">
<input type="button" value="Esborrar comanda" onclick="location.href='esbCom.php'">
<input type="button" value=" Gestió comandes" onclick="location.href='LecturaCom.php'">