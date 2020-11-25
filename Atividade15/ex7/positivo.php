<?php
    $n=$_POST["num"];
    
    if($n>=0 && is_numeric($n)){
        echo $n;
    }
    else{
        echo "erro";
    }
    
    
?>