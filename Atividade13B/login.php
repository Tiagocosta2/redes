<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php
$login="aluno";
$password="124";
if($login=="aluno" && $password=="123")
    {
        header("Location: main.php");
    }
else{
    header("Location: erro.php");
}
?>
</body>
</html>
