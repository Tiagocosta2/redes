<!DOCTYPE html>
<html>
<head>
	<title>Numero de vezes</title>
</head>
<body>
	<?php
	$num = rand(1,10);
	$i=0;
	while ($i != $num) 
	{
		echo $num;
		$i=$i+1;
	}
	?>
</body>
</html>