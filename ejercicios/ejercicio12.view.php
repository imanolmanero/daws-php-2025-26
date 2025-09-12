<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h2>Ejercicio 12</h2>

    <p>En la posición 2 está: <strong><?php echo $valor; ?></strong></p>

    <p>Array después de cambiar:</p>
    <ul>
        <?php foreach ($ciudades as $ciudad): ?>
            <li><?php echo $ciudad; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>