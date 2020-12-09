<?php
$ano=$_POST['ano'];
$nome=$_POST['nome'];

$idade=2020-$ano;
echo "O".$nome."tem".$idade."anos";
echo "<br>";
echo "<br>";
if ($idade<18) {
	echo "Não tem idade para votar";
}
else{
	echo "tem idade para votar";
}
        


?>