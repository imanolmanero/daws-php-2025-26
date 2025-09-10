<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];

        $resta = $a - $b ;
        echo "El resultado de la resta es " .$resta. "<br>";
        $division = $a / $b;
        echo "El resultado de la division es " .$division. "<br>";
        $mayor = $a > $b;
        echo "¿$a es mayor que $b ? " . var_export($mayor, true) . "<br>";
        $menorIgual = $a <= $b;
        echo "¿$a es menor o igual que $b ? " .var_export($menorIgual,true). "<br>";
        

    ?>
    
</body>
</html>