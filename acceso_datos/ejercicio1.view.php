<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejercicio1.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Lista de la compra </h1>

    <!-- Mostrar lista -->
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li>
                <?= $producto['nombre'] ?>
                <a href="ejercicio1.php=<?= $producto['id'] ?>">(Eliminar)</a>
            </li>
        <?php endforeach ; ?>
    </ul>

     <!-- Formulario añadir -->
    <form action="ejercicio1.php" method="post" class="formulario">
        <label for="nuevo">Añadir elemento</label>
        <input type="text" name="nuevo" id="nuevo" required>
        <button type="submit" name="agregar">Añadir</button>
    </form>

    <!-- Vaciar lista -->
    <p>
        <a href="ejercicio1.php?vaciar=1">Vaciar lista</a>
    </p>
    
</body>
</html>