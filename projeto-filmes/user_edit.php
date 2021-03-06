<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['utilizadores']) && is_numeric($_GET['utilizadores'])){
        $idUser = $_GET['utilizadores'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from utilizadores where id=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idUser);
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
    <title>Editar Utilizador</title>
</head>
<body>
    <h1>Editar Utilizador</h1>
    <form action='user_update.php?user=<?php echo $idUser ?>' method="post">
        <label>Nome do Utilizador</label><input type="text" name="user_name" required><br>
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
    }
}
?>