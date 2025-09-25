<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 05</title>
</head>
<body>

    <?php if(isset($enviado) && $login !== 0):?>
        <p style="color: red;"><?=$Error_Mssg[$login] ?></p>
    <?php endif; ?>

    <form action="ejercicio5.php" method="post">
        <label for="usr">Introduzca el usuario: </label>
        <input type="text" name="usr" id="usr"><br><br>

        <label for="passwd">Introduzca la contraseña:</label>
        <input type="password" name="passwd" id="passwd"><br><br>

        <input type="submit" value="Enviar" name="iniciarSesion">
    </form>
    
</body>
</html>