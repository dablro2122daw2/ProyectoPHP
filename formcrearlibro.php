<?php

  session_start();  
  echo "usuari:  ".$_SESSION['user']."<br>";
  echo "Sessió: ".session_id()."</br>";
 
 
  if($_SESSION['user']!="admin"){
 
	 echo "Apartat User";
	// $comandes.getAll();
 
	
 }

?>

<html> 
<head> 	<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head>
<body>

	<h2>Registre de Llibres</h2>
   
	  <form method="POST" action="crearlibro.php">
		Títol del llibre: <br />
   
		<input type="text" name="titolLlibre" size="50" />
		<p>
            Autor del llibre: <br />
   
            <input type="text" name="autorLlibre" size="50" />

   			
		<p>
   
			Prestec: <br />
   
			<select name="prestec">
				<option value="Si">Si</option>
				<option value="No">No</option>
			  </select>


		<p>
   
			Data del prestec: <br />
   
			<input type="date" name="dataPrestec">
        <p>
      
                Codi d'usuari <br />
           
                <input type="text" name="user" size="50" />
		<p>
   
			ISBN del llibre: <br />
   
			<input type="text" name="ISBN" size="50" />	


		<input type="submit" name="submit" value="Crear" />
		<input type="button" value="tornar" onclick="location.href='registroulogin.php'">				
	  </form>
   
	  
	</body>
	</html>