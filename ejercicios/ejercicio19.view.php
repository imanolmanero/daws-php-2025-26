<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Ejercicio 19-21: Suma de números</h2>

    <?php if ($resultado !== null): ?>
        <p><?= $resultado ?></p>
    <?php else: ?>
        <p>Por favor, indica el número y la opción en la URL. <br>
        Ejemplo: ?numero=10&opcion=2</p>
    <?php endif; ?>
</body>
</html>