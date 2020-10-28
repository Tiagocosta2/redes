<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    for($i=1;$i<=20;$i++){
        $nota = rand(1,28);
        echo 'A nota do aluno <span style="color:#0000cc">'.$nota . "</span><br>";  
        if($nota <= 8){
            echo 'O aluno <span style="color:#ff0000">REPROVOU</span> <br>';
        }
        else if($nota >8 && $nota <= 9.4){
            echo 'O aluno foi admitido a exame<br>';
        }
        else if($nota >= 9.5 && $nota < 20){
            echo 'O aluno aprovou<br>';
        }
    }
?>

</body>
</html>