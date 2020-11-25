<?php
    $num=$_POST["valor"];
    
    if($num==1){
        echo "Aluno MAU com nota de 1 valor.";
    }
    elseif($num==2){
        echo "Aluno MEDIOCRE com nota de 2 valores.";
    }  
    elseif($num==3){
        echo "Aluno MÉDIO com nota de 3 valores.";
    }  
    elseif($num==4){
        echo "Aluno BOM com nota de 4 valores.";
    }  
    elseif($num==5){
        echo "Aluno MUITO BOM com nota de 5 valores.";
    }  
?>