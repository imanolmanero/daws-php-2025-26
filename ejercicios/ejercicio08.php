<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php
        function esMayor($num1, $num2) {
            return $num1 > $num2;
        }

        $a = 10;
        $b = 5;

        echo "¿$a es mayor que $b?: " . var_export(esMayor($a, $b), true) . "<br>";

        $c = 3;
        $d = 7;

        echo "¿$c es mayor que $d?: " . var_export(esMayor($c, $d), true) . "<br>";
    ?>
    
</body>
</html>