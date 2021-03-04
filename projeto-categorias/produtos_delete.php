<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['produto']) || is_numeric($_GET['produto'])){
        $idProduto = $_GET['produto'];
        $con = new mysqli("localhost","root","","categorias");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from produtos where id=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idProduto);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Produto eliminado com sucesso');</script>");
            echo 'Aguarde um momento. A reencaminar página';
            header("refresh:5; url=subcategorias.php");
        }
        else{
            echo '<br>';
            echo $con->error;
            echo '<br>';
            echo "Aguarde um momento. A reencaminhar página";
            header("refresh:5; url=produtos.php");
        }
    }
 }
 else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=produtos.php");
    }
}
else{
    echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
    header("refresh:5; url=produtos.php");
    }
?>