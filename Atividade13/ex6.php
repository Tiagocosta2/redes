<!DOCTYPE html>
<html>
<head>
	<title>fdsf</title>
</head>
<body>
	<?php
		$rapazes=5;
		$raparigas=5;
		function turma($rapazes,$raparigas){

			$total=$rapazes+$raparigas;
			$percentagemrapazes=($rapazes/$total)*100;
			$percentagemraparigas=($raparigas/$total)*100;
			echo $percentagemrapazes;
			echo '<br>';
			echo $percentagemraparigas;
		}
		turma($rapazes,$raparigas);
	?>
</body>
</html>