<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if(isset($resultado)): ?>
       <b>Resultado de la conversion (<?= $temp ." ". $unid ?>): <?=$resultado ?></b><br><br> 
    <?php endif; ?>

    <form action="ejercicio1.php" method="get">
        <label for="temp">Introduce la temperatura: </label>
        <input type="number" name="temp" required id="temp">
        <br><br>
        <label for="unid">Indica la unidad de la temperatura introducida</label>
        <select name="unid" id="unid">
            <option value="Celsius">Celsius</option>
            <option value="Farenheit">Farenheit</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>