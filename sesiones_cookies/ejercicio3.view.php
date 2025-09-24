<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie 3</title>
</head>
<body>
    <?php if (isset($idioma)): ?>
        <p>Idioma: <?= $idioma?></p>
    <?php else: ?>
        <p>No hay ningun texto almacenado</p>
    <?php endif; ?>


    <form action="ejercicio3.php" method="get">
        <label for="idioma">Elige tu idioma </label>
        <select name="idioma" id="idioma">
            <option value="Euskera">Euskera</option>
            <option value="Castellano">Castellano</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>