<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        // Función con un parámetro por defecto
        function concatenar($cadena1, $cadena2 = "Mundo!") {
            return $cadena1 . $cadena2;
        }

        // Ejemplo 1: paso los dos parámetros
        echo concatenar("Hola, ", "PHP!") . "<br>";

        // Ejemplo 2: paso solo uno, usa el valor por defecto en $cadena2
        echo concatenar("Hola, ");
    ?>
</body>
</html>