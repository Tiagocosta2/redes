<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $categoria="";
        $sinopse="";
        $numero=0;
    

        if(isset($_POST['categoria'])){
            $titulo = $_POST['categoria'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento da categoria.");</script>';
        }

        if(isset($_POST['sinopse'])){
            $sinopse = $_POST['sinopse'];
        }

        if(isset($_POST['numero']) && is_numeric($_POST['numero'])){
            $numero = $_POST['numero'];
        }

        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }

        else{
            $sql = 'insert into categorias(categoria,sinopse,numero) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('sis',$categoria,$sinopse,$numero);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Categoria adicionada com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Adicionar categoria</title>
</head>
<body>
<h1 align="center">Adicionar filmes</h1>
<br>
<form action="categorias_create.php" method="post">
<label>Categoria:</label><input type="text" name="categoria" required><br>
<br>
<label>Sinopse:</label><input type="text" name="sinopse"><br>
<br>
<label>Numero:</label><input type="text" name="numero"><br>
<input type="submit" name="enviar"><br>
</form>
</body>
</html>
<?php
    };
?>