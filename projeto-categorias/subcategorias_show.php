<?php
include "css.php";
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['subcategoria']) || !is_numeric($_GET['subcategoria'])){
            echo '<script>alert("Erro ao abrir a subcategoria");</script>';
            echo 'Aguarde um momento. A reencaminhar página';
            header("refresh:5;url=subcategorias.php");
            exit();
        }
        $idSubCategoria=$_GET['subcategoria'];
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql = 'select * from subcategorias where id = ?';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idSubCategoria);
                $stm->execute();
                $res=$stm->get_result();
                $subcategoria = $res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo '<br>';
                echo "Aguarde um momento.A reencaminhar página";
                echo '<br>';
                header("refresh:5; url=subcategorias.php");
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
    <div class="jumbotron">
            <div class="container">
<h1 align="center">Detalhes da subcategoria</h1>
</div>
</div>
<?php
    if(isset($subcategoria)){
        echo '<br>';
        echo"Id categoria:"." ". $subcategoria['id_categoria'];
        echo '<br>';
        echo "SubCategoria:"." ".$subcategoria['subcategoria'];
        echo '<br>';
        echo"Numero:"." ". $subcategoria['numero'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que a subcategoria selecionada não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<a href="subcategorias_edit.php?subcategoria='.$subcategoria['id'].'">Editar</a>';
    echo "<br>";
    echo '<a href="subcategorias_delete.php?subcategoria='.$subcategoria['id'].'">Eleminar</a>'; 
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