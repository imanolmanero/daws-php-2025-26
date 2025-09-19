<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 02</title>
</head>
<body>

    <?php if(isset($resultado)): ?>
        <b>Ultimo resultado <?= $resultado ?></b><br><br>
    <?php endif; ?>

    <form action="ejercicio2.php" method="post">
        <label for="num1">Primer numero </label>
        <input type="text" name="num1" id="num1" required>
        <br><br>      
        <label for="num2">Segundo numero </label>
        <input type="text" name="num2" id="num2" required>
        <br><br> 
        <label for="oper">Seleccione la operacion deseada</label>
        <select name="oper" id="oper">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>        
        <br><br> 
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>