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
        <title>filmes</title>
        </head>
        <body>
        <h1> Lista de filmes</h1>
            <?php
                $stm=$con->prepare('select * from filmes');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado=$res->fetch_assoc()){
                    echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
                    echo $resultado['titulo'];
                    echo '<br>';
                    echo'</a>';
                   
                }
                $stm->close();
                echo '<br>';
                echo '<br>';

                $stm = $con->prepare('select * from utilizadores');
                $stm->execute();
                $res=$stm->get_result();
                 while($resultado = $res->fetch_assoc()){
                    if($resultado['id'] == $_SESSION['id_user']){
                        echo '<a href="user_edit.php?utilizadores='.$resultado['id'].'">Editar Utilizador</a><br>';
                    }
                }

            ?>
        <br>
        <?php
        if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
            echo '<button><a href="filmes_create.php">Adicionar</a></button>';
            echo '<br>';
            echo '<br>';
            echo '<button><a href="atores.php">Atores</a></button>';  
            echo '<button><a href="realizadores.php">Realizadores</a></button>';          
            echo '<button><a href="users.php">Lista de utilizadores</a></button>';
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