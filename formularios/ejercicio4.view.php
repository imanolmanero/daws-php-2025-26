<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 04</title>
</head>
<body>
    <?php if(isset($enviado) && $login !== 0):?>
        <p style="color: red;"><?= $Error_Mensaje[$login]?></p>
    <?php endif ?>

    <form action="ejercicio4.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario"><br><br>

        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña"><br><br>

        <input type="submit" name="Enviar">
    </form>
    
</body>
</html>