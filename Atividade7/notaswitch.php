<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$nota = 12;

	switch ($nota) {
		case ($nota<10):
			echo 'Aluno <span style="color:#ff0000">REPROVADO</span> com '.$nota. 'valores.';
			echo '<br>Deverá trabalhar mais para alcançar resultados positivos';
			break;
		case ($nota>=10 && $nota<=20):
			echo 'Aluno <span style="color:#00ff00">APROVADO</span> com '.$nota. 'valores.';
			echo '<br>Muito bom trabalho';
			break;
		default:
			echo 'Valor da nota não é valido';
			break;
	}
	?>

</body>
</html>