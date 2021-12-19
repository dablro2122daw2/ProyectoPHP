<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
	
	<h2>Accedeix al teu compte </h2>
   	<form method="POST" action="login.php">
   	
	   Nom d'Usuari:<br/>
	   <input type="text" name="user" size="50" /></p>
   
		Contrasenya:<br/>
		<input type="password" name="pass" size="50" /></p>

		Tipus d'Usuari:<br/>
		<select name="tipus">
			<option value="Bibliotecari">Bibliotecari</option>
			<option value="Usuari">Usuari</option>
			<option value="Admin">Admin</option>

	 	</select></p>
        <input type="submit" name="submit" value="Login" onclick="location.href='login.php'" />

	</form>   
</body>
</html>






