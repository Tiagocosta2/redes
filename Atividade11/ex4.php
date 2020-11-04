<!DOCTYPE html>
<html>
<head>
    <title>vxvx</title>
</head>
<body>
<?php
    $a = array("a"=>"maçã","b"=>"banana");
    $b = array("a"=>"kiwi","b"=>"ananás","c"=>"morango");
    $uniaoAB = array_merge($a,$b);
    print_r($uniaoAB);
    echo "<br>";
    $uniaoBA = array_merge($b,$a);
    print_r($uniaoBA);
?>
</body>
</html>