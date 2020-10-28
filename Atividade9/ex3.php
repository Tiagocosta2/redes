<!DOCTYPE html>
<html>
<head>
	<title>Tabuada</title>
</head>
<body>
	<?php
	$x =1;
	$num = 6;
	while ($x <= 10) {
		$res = $x * $num;
		echo $num.' x ' . $x .' = ' . $res .'<br>';
		$x++;
	}
	?>
</body>
</html>