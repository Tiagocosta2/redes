<?php
    $rapazes=$_POST["num1"];
    $raparigas=$_POST["num2"];

    $soma=$raparigas+$rapazes;

    $percrapazes=($rapazes/$soma)*100;
    $percraparigas=($raparigas/$soma)*100;

    echo "Alunos da turma = ".$soma."<br>";
    echo "Rapazes= ".$percrapazes."%"."<br>"; 
    echo "Raparigas= ".$percraparigas."%"."<br>"; 
?>