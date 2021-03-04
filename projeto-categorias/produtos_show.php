<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['produto']) || !is_numeric($_GET['produto'])){
            echo '<script>alert("Erro ao abrir o produto");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5;url=produtos.php");
            exit();
        }
        $idProduto=$_GET['produto'];
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql = 'select * from produtos where id = ?';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idProduto);
                $stm->execute();
                $res=$stm->get_result();
                $produto = $res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo '<br>';
                echo "Aguarde um momento.A reencaminhar página";
                echo '<br>';
                header("refresh:5; url=produtos.php");
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
<h1 align="center">Detalhes do produto</h1>
<?php
    if(isset($produto)){
        echo '<br>';
        echo $produto['nome'];
        echo '<br>';
        echo $produto['id_categoria'];
        echo '<br>';
        echo $produto['descricao'];
        echo '<br>';
        echo $produto['stock'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o produto  selecionada não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="produtos_edit.php?produto='.$produto['id'].'">Editar</a>';
    echo "<br>";
    echo '<a href="produtos_delete.php?produto='.$produto['id'].'">Eleminar</a>'; 
?>
<br>
<br>
<button><a href="produtos.php">Produtos</a></button>

</body>
</html>
<?php
    }
    else{
    echo 'Para entrar nesta pagina necessita de efetuar <a href="login.php">login</a>';
    header("refresh:2; url=login.php");
}
?>