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

    if(isset($_GET['realizador']) && is_numeric($_GET['realizador'])){
        $idRealizador = $_GET['realizador'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from realizadores where id_realizador=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idRealizador);
            $stm->execute();
            $res=$stm->get_result();
            $livro = $res->fetch_assoc();
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
    <h1 align="center">Editar realizador</h1>
    <form action="realizadores_update.php?realizador=<?php echo $livro['id_realizador']; ?>" method="post">
        <div class="container-fluid">
     <label>Nome</label><input type="text" name="nome" required value="<?php echo $livro['nome'];?>"><br><br>
        <label>nacionalidade</label><input type="text" name="nacionalidade" required value="<?php echo $livro['nacionalidade'];?>"><br><br>
        <label>Data_Nascimento</label><input type="date" name="data_nascimento" required value="<?php echo $livro['data_nascimento'];?>"><br><br>
        <input type="submit" name="enviar"><br>
    </form>
</div>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=realizadores.php");
 }
}
?>