<?php
    $idProduto=$_GET['produto'];
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
            $sql = "update produtos set nome=?,id_categoria=?,descricao=?,stock=? where id=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sisii",$nome,$idcategoria,$descricao,$stock,$idProduto);
                $stm->execute();
                $stm->close();
                echo '<script>alert("produtos alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=produtos.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=produtos.php");
    }