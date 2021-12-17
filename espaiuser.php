<?php

  session_start();  

?>
<h1>  Usuari </h1>

<?php






 echo "usuari:  ".$_SESSION['user']."<br>";




if($_SESSION['user']!="admin"){

    echo "Apartat User";
   // $comandes.getAll();

   
}
/*
while($i in $comandes.getAll()){
	if($i == $user.getId()){
	echo $i;
}
}*/


?>


 <!--Part de codi que permet accedir a les dades del usuari de sessió i a traves d´un botó imprimir les dades -->

<form method="post">
  
<input type="submit" name="submit" value="visualitzar dades personals"><br>

<?php
 
 if(isset($_POST['submit']))
  
 {
  
    $archivo = fopen("usuarios.txt", "r") or die("Error - No fue poible abrir el archivo");
       
    $encontrado=false;
   
    while ($linea = fgets($archivo))
    {
      $partes = explode('|', trim($linea));
            
      if (($_SESSION['user'] == $partes[0]))
      {
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
  
<input type="submit" name="submitmodificacio" value="modificar dades personals"><br>

<?php
 
 if(isset($_POST['submitmodificacio']))
  
 {
  
    
 echo "Modificacio de dades";
 header('Location: '."formularioModificarUsuario.php");
 

 
 
 }
  
 ?>  
 
 
</form>




<input type="button" value="Crear comandes" onclick="location.href='Compra.php'">
<input type="button" value="Esborrar comanda" onclick="location.href='esbCom.php'">
<input type="button" value=" Gestió comandes" onclick="location.href='LecturaCom.php'">

<a href="logout.php">Tancar Sessió</a>