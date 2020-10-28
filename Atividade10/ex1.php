<!DOCTYPE html>
<html>
<head>
	<title>gfgdg</title>
</head>
<body>
	<?php
		$cores = array('vermelho', 'azul', 'verde', 'amarelo');
		echo $cores[0];
		echo $cores[1];
		echo $cores[2];
		echo $cores[3];
		$a = array('Tesla', 2000, 3.0, 'BMW', 'Fiat');
		echo $a[1]; //resultado =2000

		$a[1]=2020; //a posição 1 tem agora o valor 2020
		echo $a[1];

		$a[]="Vila das Aves"; //adicionar um novo item ao arraway
		$a[]="AEDAH"; //adicionar um novo item ao array
		foreach ($a as $item) {
			echo $item . '<br>';
		}
	?>
</body>
</html>