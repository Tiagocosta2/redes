<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><b>Classes IP</b></h1>
	<br>
	<h2><b>Digite o endereço IP que pretende verificar</b></h2>
	<form action="ip.php">
	<input type="text" name="n1" required>
	<input type="text" name="n2" required>
	<input type="text" name="n3" required>
	<input type="text" name="n4" required><br> <br>
	<input type="submit" name="verificar">
	</form>
	<br>
	<br>
	<h3>Protocolos</h3><br>
	<h4><b>Selecione o protocolo que se deseja</b></h4>
		<br>
		<br>
	<form action="protocol.php">
		<select name="pr">
			<option value="DNS">DNS</option>
			<option value="FTP">FTP</option>
			<option value="HTTP">HTTP</option>
			<option value="IP">IP</option>
		</select><br><br>
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>