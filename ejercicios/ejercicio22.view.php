<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h2>Ejercicio 22: Buscar posición de un país</h2>

    <?php echo "<pre>";
    print_r($paises);
    echo "</pre>";?>

    <?php if ($resultado !== null): ?>
        <?php if ($resultado != -1): ?>
            <p>El país <?= htmlspecialchars($paisBuscado) ?> se encuentra en la posición <?= $resultado ?>.</p>
        <?php else: ?>
            <p>El país <?= htmlspecialchars($paisBuscado) ?> no se encuentra en el array. Resultado: -1</p>
        <?php endif; ?>
    <?php else: ?>
        <p>Indica un país en la URL. Ejemplo: ?pais=Islandia</p>
    <?php endif; ?>
</body>
</html>