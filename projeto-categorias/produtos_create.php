<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome="";
        $idcategoria="";
        $descricao="";
        $stock=0;
 
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }

        if(isset($_POST['id_categoria']) && is_numeric($_POST['id_categoria'])){
            $idcategoria = $_POST['id_categoria'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do produto.");</script>';
        }
        if(isset($_POST['descricao'])){
            $descricao = $_POST['descricao'];
        }

        if(isset($_POST['stock']) && is_numeric($_POST['stock'])){
            $stock = $_POST['stock'];
        }

        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }

        else{
            $sql = 'insert into  produtos(nome,id_categoria,descricao,stock) values(?,?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('sisi',$nome,$idcategoria,$descricao,$stock);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Produto adicionada com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=produtos.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=produtos.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Adicionar Produto</title>
</head>
<body>
<h1 align="center">Adicionar Produto</h1>
<br>
<form action="produtos_create.php" method="post">
<label>Nome:</label><input type="text" name="nome" required><br><br>    
<label>ID Categoria:</label><input type="is_numeric" name="id_categoria" required=""><br><br>
<label>Descrição:</label><input type="text" name="descricao" ><br><br>
<label>Stock:</label><input type="is_numeric" name="stock"><br>
<input type="submit" name="enviar"><br>
</form>
</body>
</html>
<?php
    };
?>