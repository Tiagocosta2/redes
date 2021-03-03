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

    if(isset($_GET['subcategoria']) && is_numeric($_GET['subcategoria'])){
        $idSubCategoria = $_GET['subcategoria'];
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from subcategorias where id=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idSubCategoria);
            $stm->execute();
            $res=$stm->get_result();
            $subcategoria = $res->fetch_assoc();
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
    <h1 align="center">Editar SubCategorias</h1>
    <form action="subcategorias_update.php?subcategoria=<?php echo $subcategoria['id']; ?>" method="post">
        <div class="container-fluid">
        <label>ID Categoria</label><input type="numeric" name="id_categoria" required value="<?php echo $subcategoria['id_categoria'];?>"><br>    
        <label>SubCategoria</label><input type="text" name="subcategoria" required value="<?php echo $subcategoria['subcategoria'];?>"><br>
        <label>Numero</label><input type="numeric" name="numero" required value="<?php echo $subcategoria['numero'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</div>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=subcategorias.php");
 }
}
?>