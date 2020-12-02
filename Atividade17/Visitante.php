<?php
	echo "<span style='color:red;'><h3><b>****************************Pagina Visitante*********************</b></h3></span><br>";

	session_name('VariaveisNomeIdade');
	session_start();

	echo "Nome: ".$_SESSION['NomeAluno']."<br>";
	echo "Idade: ".$_SESSION['IdadeAluno'];

	$nome = $_SESSION['NomeAluno'];
	$idade = $_SESSION['IdadeAluno'];
	echo "<br><br>";
	echo "Nome: ".$nome."<br>";
	echo "idade: ".$idade."<br>";

	echo "<a href='Formulario.html'><h5><b>Voltar</b></h5></a> ";
	echo "<a href='Principal.php'><h5><b>Principal</b></h5></a> ";
	echo "<a href='PrincipalCom_Isset_e_Empty.php'><h5><b>Principal (com Issset e Empty)</b></h5></a> ";

?>