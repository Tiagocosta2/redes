<?php
    $ordenado=$_POST["ordenado"];
    $inerentes=$ordenado*0.15;
    $cantina=$ordenado*0.1;
    $transporte=$ordenado*0.05;
    $ordliquido=$ordenado-($inerentes+$cantina+$transporte);
    echo "Ordenado liquido= ".$ordliquido. "<br>";
    echo "Inerentes= ".$inerentes. "<br>";
    echo "Cantina= ".$cantina. "<br>";
    echo "transporte= ".$transporte;
    
?>