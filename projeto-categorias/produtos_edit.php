<?php
include "css.php";
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){

}
else{
    echo 'Para entrar nesta pagina necessita de efetuar <a href="login.php">login</a>';
    header("refresh:2; url=login.php");
}

if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['produto']) && is_numeric($_GET['produto'])){
        $idProduto = $_GET['produto'];
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from produtos where id=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idProduto);
            $stm->execute();
            $res=$stm->get_result();
            $produto = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <tile></title>
</head>
<body>
    <h1 align="center">Editar produto</h1>
    <form action="produtos_update.php?produto=<?php echo $produto['id']; ?>" method="post">
        <div class="container-fluid">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $produto['nome'];?>"><br>
        <label>ID Categoria</label><input type="numeric" name="id_categoria" required value="<?php echo $produto['id_categoria'];?>"><br>    
        <label>Descrição</label><input type="text" name="descricao" required value="<?php echo $produto['descricao'];?>"><br>
        <label>Stock</label><input type="numeric" name="stock" required value="<?php echo $produto['stock'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</div>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=produtos.php");
 }
}
?>