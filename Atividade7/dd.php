<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$numero = 50;

	switch ($numero) {
		case ( $numero > 100 ):
			echo 'Valor muito alto';
		break;
		case ( $numero < 80 && $numero > 51 ):
			echo 'Valor medio';
		break;
		case ( $numero === 50 ):
			echo 'Valor perfeito';
		break;
		case ( $numero <= 10 ):
			echo 'Valor muito baixo';
		break;
		case ( $numero == 0 ):
			echo 'Sem valor';
		break;	
	}
	?>
</body>
</html>