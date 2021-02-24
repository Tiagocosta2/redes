<?php
include "css.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>Login</title>
</head>
<body>

	<h1 align="center">Login</h1>
	<form method="post" action="processa_login.php">
	<div class="container-fluid">
	<label>Nome de utilizador</label><input type="text" name="user_name" required><br><br>
	<label>Palavra-passe</label><input type="text" name="password" required><br><br>
	<input type="submit" name="login"><br>		
	</form>
</div>
</body>
</html>