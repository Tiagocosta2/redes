<?php
echo "<span style='color:blue;'><h3><b>****************************Pagina Principal*********************</b></h3></span><br>";

$nome = $_POST['txt_nome'];
$idade = $_POST['txt_idade'];

session_name('VariaveisNomeIdade');
session_start();

$_SESSION['NomeAluno'] = $nome;
$_SESSION['IdadeAluno'] = $idade;

echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";

echo "<a href='Formulario.html'>Voltar<h5><b></b></h5></a>";
echo "<a href='Visitante.php'>Visitante<h5><b></b></h5></a>";
?>