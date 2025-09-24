<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies 1</title>
</head>
<body>
    <?php if (isset($nombre)): ?>
        <p>El texto almacenado es: <?=$nombre ?> </p>
    <?php else: ?>
        <p>No hay ningun texto almacenado </p>
    <?php endif ; ?>

    <form action="ejercicio1.php" method="post">
        <label for="user" >Introduce el texto que deseas almacenar: </label>
        <input type="text" name="user" id="user">
        <input type="submit" value="Enviar" name="guardarDatos">
        <input type="submit" value="Borrar" name="eliminarCookies">
    </form>
</body>
</html>