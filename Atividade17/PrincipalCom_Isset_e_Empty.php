<?php
echo "<span style='color:blue;'><h3><b>****************************Pagina Principal*********************</b></h3></span><br>";

session_name('VariaveisNomeIdade');
session_start();

if (isset($_POST['btn_enviar']) && !empty($_POST['txt_nome']) && !empty($_POST['txt_idade'])) {
	
	$nome = $_POST['txt_nome'];
	$idade = $_POST['txt_idade'];

	$_SESSION['NomeAluno'] = $nome;
	$_SESSION['IdadeAluno'] = $idade;

	echo "Nome: ".$nome."<br>";
	echo "Idade: ".$idade."<br>";
}
else
{
	$nome = $_SESSION['NomeAluno'];
	$idade = $_SESSION['IdadeAluno'];
	echo "<br><br>";
	echo "Nome: ".$nome."<br>";
	echo "idade: ".$idade."<br>";
}
echo "<a href='Formulario.html'><h5><b>Voltar</b></h5></a> ";
echo "<a href='Visitante.php'><h5><b>Visitante</b></h5></a> ";
?>