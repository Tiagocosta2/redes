<?php
    $idCategoria=$_GET['categoria'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $categoria = "";
        $sinopse = "";
        $numero = 0;
        if(isset($_POST['categoria'])){
            $categoria = $_POST['categoria'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento da categoria.");</script>';
        }

        if(isset($_POST['sinopse'])){
            $sinopse= $_POST['sinopse'];
        }

        if(isset($_POST['numero']) && is_numeric($_POST['numero'])){
            $numero = $_POST['numero'];
        }
        $con = new mysqli("localhost","root","","categorias");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update categorias set categoria=?,sinopse=?,numero=? where id=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("ssii",$categoria,$sinopse,$numero,$idCategoria);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Categoria alterada com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }