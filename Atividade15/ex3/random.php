  
<?php
    $random1=rand(1,10);
    $random2=rand(1,10);
    $random3=rand(1,10);
    $random4=rand(1,10);
    $num1=$_POST[$random1];
    $num2=$_POST[$random2];
    $num3=$_POST[$random3];
    $num4=$_POST[$random4];
    $soma=$num1+ $num2+$num3+$num4;
    $media=$soma/4;
    echo "Valores: ".$num1." ".$num2." " .$num3." " .$num4. "<br>";
    echo "Soma = ".$soma."<br>";
    echo "Media = ".$media;

?>