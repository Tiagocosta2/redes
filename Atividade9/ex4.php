<!DOCTYPE html>
<html>
<head>
	<title>Maior e menor</title>
</head>
<body>
	<?php
	$num1 = 5;
	$num2 = 7;
	$num3 = 3;
	if ($num1>$num2 && $num1>$num3 && $num2>$num3) {
		echo "O maior numero é" .$num1. "o menor é ".$num3;
	}
	elseif ($num1>$num2 && $num1>$num3 && $num3>$num2) {
		echo "O maior numero é" .$num1. "o menor é ".$num2;
	}
	elseif ($num2>$num1 && $num2>$num3 && $num1>$num3) {
		echo "O maior numero é" .$num2. "o menor é ".$num3;
	}
	elseif ($num2>$num1 && $num2>$num3 && $num3>$num1) {
		echo "O maior numero é" .$num2. "o menor é ".$num1;
	}
	elseif ($num3>$num1 && $num3>$num2 && $num2>$num1) {
		echo "O maior numero é" .$num3. "o menor é ".$num1;
	}
	else{
		echo "O maior numero é ".$num3. "o menor é ".$num2;
	}
	?>

</body>
</html>