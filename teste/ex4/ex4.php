<html> 
    <?php
        $dias=array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabado");
        $meses=array("janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");
    ?>
    <form action="captar.php" method="post">
        <select name="dia">
            <?php
                for($i=0;$i<7;$i++){
                    echo "<option value='$dias[$i]'>$dias[$i]</option>";
                }
            ?>
        </select>

        <select name="mes">
            <?php
                for($i=0;$i<12;$i++){
                    echo "<option value='$meses[$i]'>$meses[$i]</option>";
                }
            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
</html>