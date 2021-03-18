<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:#d9d9d9;">
<?php
include "css.php";
$pr=$_GET['pr'];
if($pr=="DNS"){
	echo "<b>DNS<b>";
	echo "<br>";
	echo "É o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácilde ser memorizado pelos utilizadores. Por exemplo, www.portoeditora.pt, poderá,corresponder ao endereço IP 192.16831.32.";
}
elseif($pr=="FTP"){
	echo "<b>FTP</b>";
	echo "<br>";
	echo "É o protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://";
}
elseif($pr=="HTTP"){
	echo "<b>HTTP</b>";
	echo "<br>";
	echo "é o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser,ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente receber a página Web correspondente.";
}
else{
	echo "<b>IP</b>";
	echo "<br>";
	echo "é o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetorpara que a informação não se perca na rede.";
}
?>
</body>
</html>
