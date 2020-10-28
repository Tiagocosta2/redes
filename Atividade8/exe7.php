<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    $numero = 1;
    $pararLoop = rand(1,30);
    do {
        echo $numero."<br>";
        $numero++;
    }
    while($numero != $pararLoop)
?>
</body>
</html>