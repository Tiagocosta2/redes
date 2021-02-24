<?php 
include "css.php";
session_start();
    $con=new mysqli("localhost","root","","filmes");
    if($con->connect_error!=0){
        echo"Ocorreu um erro ".$con->connect_error;
        exit;
    }else{
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="ISO-8859-1">
        <title>atores</title>
        </head>
        <body>
        <h1 align="center"> Lista de atores</h1>
            <?php
                $stm=$con->prepare('select * from atores');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado=$res->fetch_assoc()){
                    echo '<a href="atores_show.php?ator='.$resultado['id_ator'].'">';
                    echo $resultado['nome'];
                    echo'</a>';
                    echo '<br>';
                }
                $stm->close();
                echo '<br>';
                
?>      
<?php
        if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
            echo '<button type="button" class="btn btn-outline-success"><a href="atores_create.php">Adicionar</a></button>';
            echo '<br>';
            echo '<br>';
            echo '<button type="button" class="btn btn-outline-primary"><a href="index.php">Filmes</a></button>';
            echo '<button type="button" class="btn btn-outline-primary"><a href="realizadores.php">Realizadores</a></button>';  
            echo '<button type="button" class="btn btn-outline-danger"><a href="processa_logout.php">Logout</a></button>';
        }
        else{
            echo '<button type="button" class="btn btn-outline-danger"><a href="login.php">Login</a></button>';
            echo '<button type="button" class="btn btn-outline-danger"><a href="register.php">Registar</a></button>'; 
        }
        ?>
        
        </body>
        </html>
        <?php 
        }
        ?>          