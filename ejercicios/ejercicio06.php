<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    function multiplicar($a,$b){
        return $a*$b;
    }
    $a = $_GET["a"];
    $b = $_GET["b"];

    echo "El resultado de la multiplicacion es " .multiplicar($a,$b) ;

    ?>
    
</body>
</html>