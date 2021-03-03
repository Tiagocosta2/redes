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

    if(isset($_GET['categoria']) && is_numeric($_GET['categoria'])){
        $idCategoria = $_GET['categoria'];
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from categorias where id=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idCategoria);
            $stm->execute();
            $res=$stm->get_result();
            $categoria = $res->fetch_assoc();
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
    <h1 align="center">Editar Categorias</h1>
    <form action="categorias_update.php?categoria=<?php echo $categoria['id']; ?>" method="post">
        <div class="container-fluid">
        <label>Categoria</label><input type="text" name="categoria" required value="<?php echo $categoria['categoria'];?>"><br>
        <label>Sinopse</label><input type="text" name="sinopse" required value="<?php echo $categoria['sinopse'];?>"><br>
        <label>Numero</label><input type="numeric" name="numero" required value="<?php echo $categoria['numero'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</div>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}
?>