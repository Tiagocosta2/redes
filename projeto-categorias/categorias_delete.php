<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['categoria']) || is_numeric($_GET['categoria'])){
        $idCategoria = $_GET['categoria'];
        $con = new mysqli("localhost","root","","categorias");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from categorias where id=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idCategoria);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Categoria eliminada com sucesso');</script>");
            echo 'Aguarde um momento. A reencaminar página';
            header("refresh:5; url=index.php");
        }
        else{
            echo '<br>';
            echo $con->error;
            echo '<br>';
            echo "Aguarde um momento. A reencaminhar página";
            header("refresh:5; url=index.php");
        }
    }
 }
 else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
}
else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=index.php");
    }
?>