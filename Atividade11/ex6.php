<!DOCTYPE html>
<html>
<head>
	<title>dfdfd</title>
</head>
<body>
	<?php
		$soma = 0;
		$matriz = array(
		array(0,1),	
        array(1,2),
        array(2,3),
        array(3,4),
        array(4,5),
        array(5,6),
        array(6,7),
        array(7,8),
        array(8,9),
        array(9,10),
    	);
    	for ($i=0; $i<10; $i++) {
        	for ($j=0; $j<2; $j++) {
            $soma += $matriz[$i][$j];
       		}
    	}
    	echo $soma;
	?>

</body>
</html>