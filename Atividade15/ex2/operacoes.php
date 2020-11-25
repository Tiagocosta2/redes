<?php
 if($_POST["operacao"] == "soma"){
        soma();
    }
    else if($_POST["operacao"] == "subtracao"){
        subtracao();
    }
    else if($_POST["operacao"] == "multiplicacao"){
        multiplicacao();
    }
    else if($_POST["operacao"] == "divisao"){
        divisao();
    }
 function soma(){
        $num1 = $_POST["txt_n1"];
        $num2 = $_POST["txt_n2"];
        $soma = $num1 + $num2;
        echo "Soma= ".$soma."<br>";
    };
    
    function subtracao(){
        $num1 = $_POST["txt_n1"];
        $num2 = $_POST["txt_n2"];
        $subtracao = $num1 - $num2;
        echo " Subtração= ".$subtracao."<br>";
    };

    function multiplicacao(){
        $num1 = $_POST["txt_n1"];
        $num2 = $_POST["txt_n2"];
        $multiplicacao = $num1 * $num2;
        echo "Multiplicação= ".$multiplicacao."<br>";
    };

    function divisao(){
        $num1 = $_POST["txt_n1"];
        $num2 = $_POST["txt_n2"];
        $divisao = $num1 / $num2;
        echo "Divisão= ".$divisao;
    }
?>