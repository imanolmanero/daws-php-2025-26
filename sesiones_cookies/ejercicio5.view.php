<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 05</title>
</head>
<body>
    <p>Bienvenid@ <?= $usuarios[$usuario]["nombre"] ?></p>
    <form action="ejercicio5.php" method="post">
        <input type="submit" value="Cerrar sesión" name="cerrarSesion">
    </form>
</body>
</html>