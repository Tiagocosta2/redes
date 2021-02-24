<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['realizador']) || !is_numeric($_GET['realizador'])){
            echo '<script>alert("Erro ao abrir o realizador");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5;url=realizadores.php");
            exit();
        }
        $idRealizador=$_GET['realizador'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql = 'select * from realizadores where id_realizador = ?';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idRealizador);
                $stm->execute();
                $res=$stm->get_result();
                $livro = $res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo '<br>';
                echo "Aguarde um momento.A reencaminhar página";
                echo '<br>';
                header("refresh:5; url=realizadores.php");
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
<h1 align="center">Detalhes do realizador</h1>
<?php
    if(isset($livro)){
        echo '<br>';
        echo $livro['nome'];
        echo '<br>';
        echo $livro['data_nascimento'];
        echo '<br>';
        echo $livro['nacionalidade'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o realizador selecionado não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="realizadores_edit.php?realizador='.$livro['id_realizador'].'">Editar</a>';
    echo "<br>";
    echo '<a href="realizadores_delete.php?realizador='.$livro['id_realizador'].'">Eleminar</a>'; 
?>
<br>
<br>
<button><a href="index.php">Filmes</a></button>

</body>
</html>
<?php
    }
    else{
    echo 'Para entrar nesta pagina necessita de efetuar <a href="login.php">login</a>';
    header("refresh:2; url=login.php");
}
?>