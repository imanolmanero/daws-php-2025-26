<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de estudiantes</title>
</head>
<body>
    <h2>Listado de estudiantes</h2>
    <ul>
        <?php
        $i = 0; 

        while ($i < count($estudiantes)) {
            echo "<li>" . $estudiantes[$i] . "</li>";
            $i++; 
        }
        ?>
    </ul>
</body>
</html>
