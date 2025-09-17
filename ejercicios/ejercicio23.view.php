<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Ejercicio 23</h2>

    <ul>

    <?php 
       /*for ($i = 0; $i < count($estudiantes); $i++) {
            $id = $i + 1; 
            echo "<li id='$id'>{$estudiantes[$i]}</li>";
        }*/

        foreach ($estudiantes as $estudiante) {
        echo "<li>$estudiante</li>";
        }

    ?>

    </ul>
    
</body>
</html>