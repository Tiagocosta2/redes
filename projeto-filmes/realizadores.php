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
        <title>Realizadores</title>
        </head>
        <body>
        <h1> Lista de realizadores</h1>
            <?php
                $stm=$con->prepare('select * from realizadores');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado=$res->fetch_assoc()){
                    echo '<a href="realizadores_show.php?realizador='.$resultado['id_realizador'].'">';
                    echo $resultado['nome'];
                    echo'</a>';
                    echo '<br>';
                }
                $stm->close();
                echo '<br>';
                
?>      
<?php
        if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
            echo '<button><a href="realizadores_create.php">Adicionar</a></button>';
            echo '<br>';
            echo '<br>';
            echo '<button><a href="index.php">Filmes</a></button>';
            echo '<button><a href="atores.php">Atores</a></button>';  
            echo '<button><a href="processa_logout.php">Logout</a></button>';
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