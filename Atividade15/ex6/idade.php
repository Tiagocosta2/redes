<?php
    $idade=$_POST["idade"];
    if($idade<18){
        echo "“Você tem ".$idade. "anos - é MENOR de idade.";
    }
    elseif($idade>=18 && $idade<=100){
        echo "Você tem".$idade. "anos - é MAIOR de idade";
    }
    else{
        echo "Voce é um dinossauro";
    }  
?>