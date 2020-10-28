<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    $pararLoop = rand(1,30);
    for($numero = 0; ; $numero++){
       if($numero == $pararLoop){
       break;
       }
       echo $numero."<br>";
    }
?>


</body>
</html>