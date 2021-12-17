<html> 
<head> 	<meta http-equiv="content-type" content="text/html; charset=UTF-8"></head>
<body>
	
	<h2>Accedeix al teu compte </h2>
   
	  <form method="POST" action="login.php">
   
		Nom d'usuari: <br />
   
		<input type="text" name="user" size="50" />
   
		<p>
   
			Contrasenya: <br />
   
		<input type="password" name="pass" size="50" />
	
		<p>
		Tipus d'usuari: <br />
   
  	 <select name="tipus">
	   <option value="Bibliotecari">Bibliotecari</option>
	   <option value="Usuari">Usuari</option>
	 </select>
		<p>
   
        <input type="submit" name="submit" value="login" onclick="location.href='login.php'" />

        <h4>Encara no estàs registrat? </h4>
		
        <input type="button" value="registrar-me" onclick="location.href='tipousuario.html'">
   
	  </form>
   
	</body>
	
	</html>






