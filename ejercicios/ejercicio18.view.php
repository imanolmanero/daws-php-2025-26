<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
   <h2>Ejercicio 18</h2>

    <p>
        <?php
        if ($dia !== null) {
            diaSemana($dia);
        } else {
            echo "Por favor, indica un número de día en la URL (?dia=...).";
        }
        ?>
    </p>

</body>
</html>