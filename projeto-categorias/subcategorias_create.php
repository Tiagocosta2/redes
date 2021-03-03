<?php
    include "css.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $idcategoria="";
        $subcategoria="";
        $numero=0;
    
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
            $sql = 'insert into  subcategorias(id_categoria,subcategoria,numero) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('isi',$idcategoria,$subcategoria,$numero);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("SubCategoria adicionada com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=subcategorias.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=subcategorias.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Adicionar SubCategoria</title>
</head>
<body>
<h1 align="center">Adicionar subcategoria</h1>
<br>
<form action="subcategorias_create.php" method="post">
<label>ID Categoria:</label><input type="is_numeric" name="id_categoria" required=""><br><br>
<label>SubCategoria:</label><input type="text" name="subcategoria" required><br><br>
<label>Numero:</label><input type="is_numeric" name="numero"><br>
<input type="submit" name="enviar"><br>
</form>
</body>
</html>
<?php
    };
?>