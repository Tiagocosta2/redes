<!DOCTYPE html>
<html>
<head>
	<title>gfdgd</title>
</head>
<body>
	<?php
	$carros=array(
		'Punto'=>array(
			'cor'=>'azul',
			'potencia'=>'1.0',
			'opcionais'=>'Ar cond'
		),
		'Corsa'=> array(
			'cor'=>'cinza',
			'potencia'=>'1.3',
			'opcionais'=> 'MP3'
		),
		'Golf'=>array(
			'cor'=> 'branco',
			'potencia'=>'1.0',
			'opcionais'=>'Metalica'
		)
	); 

	echo $carros['punto']['opcionais'];

	foreach ($carros as $modelo => $carro) {
		echo '<h1>' .$modelo. '</h1>';
		foreach ($carro as $chave => $detalhes) {
			echo '<b>' .$chave. '</b> ='.$detalhes. '<br>';
		}
	}

	//cria 3 arrays dentro de 1 e depois mostra as 3
?>
</body>
</html>