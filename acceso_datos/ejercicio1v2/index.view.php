<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de la compra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de compra</h1>

    <!-- Mostrar lista -->
    <ul>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $producto): ?>
                <li>
                    <?= htmlspecialchars($producto['nombre']) ?>
                    <a href="index.php?eliminar=<?= $producto['id'] ?>">(Eliminar)</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay productos en la lista.</li>
        <?php endif; ?>
    </ul>

    <!-- Formulario añadir -->
    <form action="index.php" method="post" class="formulario">
        <label for="nuevo">Añadir elemento</label>
        <input type="text" name="nuevo" id="nuevo" placeholder="Ej: Pan" required>
        <button type="submit" name="agregar">Añadir</button>
    </form>

    <!-- Vaciar lista -->
    <p class="vaciar">
        <a href="index.php?vaciar=1">Vaciar lista</a>
    </p>
</body>
</html>