<?php

  session_start();  
  
?>
<h1>  Administrador </h1>
<?php

 // recupera los datos del envío POST



 echo "usuari:  ".$_SESSION['user']."<br>";




if($_SESSION['user']=="admin"){

    echo "Apartat Administrador";
   // $comandes.getAll();


}



?>

<form action="espaiadmin.php" method="GET">
  
  <input type="submit" name="consultarusuaris" value="Visualització de totes les dades de l'usuari"><br>
  
  <?php
   
   if(isset($_GET['consultarusuaris']))
	
   {
	
    $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
       
    $encontrado=false;
   
    while ($linea = fgets($archivo))
    {
      $partes = explode('|', trim($linea));

//no mostramos los datos del admin 
     if ($partes[0] =="admin" ) { echo ""; }else
      echo "<br>".$linea."<br>";
    }

 
 fclose($archivo);
 
  
 
   

   }
	
   ?>  
   
   
  </form>


<!--
  <form action="espaiadmin.php" method="GET">
  
  <input type="submit" name="esborrarusuaris" value=" Esborrament d´usuaris per mitjà de sol·licitud  "><br>
  -->
  
  <?php
   /*
   if(isset($_GET['esborrarusuaris']))
  

   {
	
    $archivo = fopen("usuarios.txt", "r+") or die("Error - No fue poible abrir el archivo");
       
    $encontrado=false;
   
    while ($linea = fgets($archivo))
    {
      $partes = explode('|', trim($linea));
     
    
    
      $string=$linea;
     
    $linea = explode("\n",$string);
    $unwanted = "sol·licito esborrar el meu compte";
    $cleanArray= preg_grep("/$unwanted/i",$linea,PREG_GREP_INVERT);
    $cleanString=implode("\n",$cleanArray);
    fwrite($archivo, "$linea");
    if ($partes[0] =="admin" ) { echo ""; }else{ 
   $nuevalinea=$cleanString;
      echo ( $cleanString."<br>" );
      //echo $nuevalinea;

     
    }
    
    }
  
          fclose($archivo);
    

  }
	
*/
 ?>
   
   
 </form>
 <!--<input type="button" value="Afegir producte" onclick="location.href='Compra.php'">-->
 <input type="button" value="Crear comandes" onclick="location.href='Compra.php'">
<input type="button" value="Esborrar comanda" onclick="location.href='esbCom.php'">
<input type="button" value=" Gestió comandes" onclick="location.href='LecturaCom.php'">
 <a href="logout.php">Tancar Sessió</a>
