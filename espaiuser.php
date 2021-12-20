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
  <input type="submit" name="dades" value="Visualitzar Dades Personals">
  <input type="submit" name="consultarllibres" value="Visualització del cataleg de llibres">


  <?php
    if(isset($_POST['dades'])){
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
    if(isset($_POST['consultarllibres'])){
      $archivo = fopen("libros.txt", "r") or die("Error - No fue poible abrir el archivo");
      $encontrado=false;
      
      while ($linea = fgets($archivo)){
        $partes = explode('|', trim($linea));
        
        //no mostramos los datos del admin 
        if ($partes[0] =="user" ){
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