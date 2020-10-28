<!DOCTYPE html>
<html>
<head>
	<title>gdfgd</title>
</head>
<body>
	<?php
	$multa['carro']='Palido';
	$multa['valor']=178.00;

	$multa['carro'].=' ED 1.0';
	$multa['valor']+=20;

	foreach ($multa as $chave => $a) {
		echo $chave. " " .$a;
	}
	echo '<br>';
	$comidas[]='Lazanha';
	$comidas[]='Pizza';
	$comidas[]='Macarrao';

	$comida[1]='Pizza Calabreza';
?>
</body>
</html>