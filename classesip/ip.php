<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:#d9d9d9;" >
<?php
include "css.php";

$n1=$_GET['n1'];
$n2=$_GET['n2'];
$n3=$_GET['n3'];
$n4=$_GET['n4'];

//Classes 
	if($n1==127){
		echo "Endereço reservado a loopback ou localhost";
		echo "<br>";
		echo "IP Reservado e Invalido";
	}
	elseif($n1>=1 && $n1<=126 && $n2<=255 && $n3<=255 && $n4<=254){
		echo "Classe A";
	}
	elseif($n1>=128 && $n1<=191 && $n2<=255 && $n3<=255 && $n4<=254){
		echo "Classe B";
	}
	elseif($n1>=192 && $n1<=223 && $n2<=255 && $n3<=255 && $n4<=254){
		echo "Classe C";
	}
	elseif($n1>=224 && $n1<=239 && $n2<=255 && $n3<=255 && $n4<=254){
		echo "Classe D";
	}
	elseif($n1>=240 && $n1<=254 && $n2<=255 && $n3<=255 && $n4<=254){
		echo "Classe E";
	}
	else{
		echo "Erro! Indique um IP publico entre 0.0.0.0 e 255.255.255.255";
	}


echo "<br>";
//Tipos de Ips 
//Privados
if($n1==10){
	echo "IP Privado";
}
elseif($n1==172 && ($n2>=16 && $n2<=31)){
	echo "IP Privado";
}
elseif($n1==192 && $n2==168 && ($n3>0 && $n3<=255)){
	echo "IP Privado";
}
elseif($n1==0){
	echo "IP reservado e Invalido";
}
elseif($n1==128 && $n2==0){
	echo "IP Reservado";
}
elseif($n1==191 && $n2==255){
	echo "IP Reservado";
}
elseif($n1==192 && $n2==0 && $n3==0){
	echo "IP Reservado";
}
elseif($n1==223 && $n2==255 && $n3==255){
	echo "IP Reservado";
}
elseif($n1>=224 && $n1<=239){
	echo "IP Reservado";
}
elseif($n1>=240 && $n1<=255){
	echo "IP Reservado";
}
elseif($n1==255){
	echo "IP Invalido";
}
elseif($n2==0 && $n3==0 && $n4==0){
	echo "IP Invalido";
}
elseif($n3==0 && $n4==0){
	echo "IP Invalido";
}
elseif($n4==0 && $n4==255){
	echo "IP Invalido";
}
elseif($n1<255 || $n2<255 || $n3<255 || $n4<255){
	echo "IP publico";
}
else{
	echo "IP Invalido";
}






?>
</body>
</html>
