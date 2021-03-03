<?php
    $idSubCategoria=$_GET['subcategoria'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $idcategoria="";
        $subcategoria = "";
        $numero = 0;
        
        if(isset($_POST['id_categoria']) && is_numeric($_POST['id_categoria'])){
            $idcategoria = $_POST['id_categoria'];
        }

        if(isset($_POST['subcategoria'])){
            $subcategoria = $_POST['subcategoria'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento da subcategoria.");</script>';
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
            $sql = "update subcategorias set id_categoria=?,subcategoria=?,numero=? where id=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("isii",$idcategoria,$subcategoria,$numero,$idSubCategoria);
                $stm->execute();
                $stm->close();
                echo '<script>alert("SubCategoria alterada com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=subcategorias.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=subcategorias.php");
    }