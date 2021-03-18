<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' media='screen' href='bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='all.min.css'>
    <script src='all.min.js'></script>
    <script src='bootstrap.min.js'></script>
    <script src='jquery-3.5.1.min.js'></script>
</head>
<body style="background-color:#d9d9d9;">
	<div class="jumbotron" style="background-color: grey;">
        <div class="container">
	<h3 style="text-align: center;"><b>Classes IP</b></h3>
	</div>
	</div>
	<br>
	<div class="container">
	<h4>Digite o endereço IP que pretende verificar</h4> <br>

	<form action="ip.php" style="text-align: center;">
	<input type="text" name="n1" required>
	<input type="text" name="n2" required>
	<input type="text" name="n3" required>
	<input type="text" name="n4" required><br> <br>
	<input type="submit" name="verificar">
	</form>
	</div>
	<br>
	<br>
	<div class="jumbotron" style="background-color: grey;">
        <div class="container">
	<h3 style="text-align: center;"><b>Protocolos</b></h3><br>
	</div>
</div>
<div class="container">
	<h4>Selecione o protocolo que se deseja</h4>

		<br>
		<br>
	<form action="protocol.php" style="text-align: center;">
		<select name="pr">
			<option value="DNS">DNS</option>
			<option value="FTP">FTP</option>
			<option value="HTTP">HTTP</option>
			<option value="IP">IP</option>
		</select><br><br>
		<br>
		<input type="submit" value="Enviar">
	</form>
</div>	
</body>
</html>