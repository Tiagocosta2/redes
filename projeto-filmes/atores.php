<?php 
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
        <h1> Lista de atores</h1>
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
            echo '<button><a href="atores_create.php">Adicionar</a></button>';
            echo '<br>';
            echo '<button><a href="index.php">Filmes</a></button>';
            echo '<br>';
            echo '<button><a href="processa_logout.php">Logout</a></button>';
            echo '<br>';

        }
        else{
            echo '<button><a href="login.php">Login</a></button>';
            echo '<button><a href="register.php">Registar</a></button>'; 
        }
        ?>
        
        </body>
        </html>
        <?php 
        }
        ?>          