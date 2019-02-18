<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        function squareValue($number) {
            echo $number*$number;
        }
        function wanted($name, $specs, $mugs, $sausage) {
            echo "<b>$name</b><br/>
                 Known to be in possession of the following items:<br/>
                 Specs: $specs<br/>
                 Mugs: $mugs<br/>
                 Sausage Rolls: $sausage<br/>
                 Award for capture: ";
            echo 10*((squareValue(($specs*$mugs*$sausage)))/2);
            echo "<br />";
        }

        $name = "Ali";
        $specs = 3;
        $mugs = 4;
        $sausage = 2;

        wanted($name,$specs,$mugs,$sausage);
        wanted(Ruth,6,4,1);
        wanted(Kim,4,2,3);
    ?>
</body>
</html>