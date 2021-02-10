<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $utilizador = $_POST['user_name'];
        $password = $_POST['password'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "insert into utilizadores(user_name,password) values(?,?)";
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("ss",$utilizador,$password);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Utilizador adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }
?>    