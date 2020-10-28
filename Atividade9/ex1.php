<!DOCTYPE html>
<html>
<head>
	<title>Media</title>
</head>
<body>
	<?php
	$n1=9;
	$n2=10;
	$n3=8;
	$media=($n1 + $n2 + $n3)/3;
	if($media>=9.5) {
		echo "aluno está aprovado";
	}
	elseif ($media>=8 && $media<9.5) {
		echo "o aluno vai a recuperação";
	}
	else {
		echo "Aluno reprovado";
	}	
	
	?>

</body>
</html>