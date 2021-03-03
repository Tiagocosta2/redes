<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['categoria']) || !is_numeric($_GET['categoria'])){
            echo '<script>alert("Erro ao abrir categoria");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5;url=index.php");
            exit();
        }
        $idCategoria=$_GET['categoria'];
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql = 'select * from categorias where id = ?';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idCategoria);
                $stm->execute();
                $res=$stm->get_result();
                $categoria = $res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo '<br>';
                echo "Aguarde um momento.A reencaminhar página";
                echo '<br>';
                header("refresh:5; url=index.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Detalhes</title>
</head>
<body>
<h1 align="center">Detalhes da categoria</h1>
<?php
    if(isset($categoria)){
        echo '<br>';
        echo $categoria['categoria'];
        echo '<br>';
        echo $categoria['sinopse'];
        echo '<br>';
        echo $categoria['numero'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que a categoria selecionada não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="categorias_edit.php?categoria='.$categoria['id'].'">Editar</a>';
    echo "<br>";
    echo '<a href="categorias_delete.php?categoria='.$categoria['id'].'">Eleminar</a>'; 
?>
<br>
<br>
<button><a href="index.php">Principal</a></button>

</body>
</html>
<?php
    }
    else{
    echo 'Para entrar nesta pagina necessita de efetuar <a href="login.php">login</a>';
    header("refresh:2; url=login.php");
}
?>