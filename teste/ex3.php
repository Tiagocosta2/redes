<?php
$numeros = array(
	'numero1'=> rand(1,100),
	'numero2'=> rand(1,100),
	'numero3'=>rand(1,100),
	'numero4'=> rand(1,100),
	'numero5'=> rand(1,100),
	'numero6'=> rand(1,100),
	'numero7'=> rand(1,100),
	'numero8'=> rand(1,100),
	'numero9'=> rand(1,100),
	'numero10'=> rand(1,100),
	'numero11'=> rand(1,100),
	'numero12'=> rand(1,100),
	'numero13'=> rand(1,100),
	'numero14'=> rand(1,100),
	'numero15'=> rand(1,100),
	'numero16'=> rand(1,100),
	'numero17'=> rand(1,100),
	'numero18'=> rand(1,100),
	'numero19'=> rand(1,100),
	'numero20'=> rand(1,100),
);
$maior =0;
$menor =$numeros;
$mult =1;
$media=0;
$soma=0;


foreach ($numeros as $num) {


	if($num>$maior ) {
		$maior=$num;
	}
	elseif($num<$menor){
		$menor=$num;
	}
	$mult=$num*$num;
	$soma=$soma+$num;

}
$media=$soma/20;

echo"Maior é: " .$maior."<br>";
echo"Menor é: " .$menor."<br>";
echo "Multiplicação é  " . $mult."<br>";
echo "A media é ".$media;
?>