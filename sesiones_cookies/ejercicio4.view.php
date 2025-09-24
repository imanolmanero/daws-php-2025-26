<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 04</title>
</head>
<body>
    
    <h1>Control de Asistencia</h1>

    <form action="ejercicio4.php" method="post">
        <input type="text" name="nombre" placeholder="Escribe un nombre">
        <button type="submit">Añadir</button>
    </form>

    <form action="ejercicio4.php" method="post">
        <button type="submit" name="borrar">Borrar lista</button>
    </form>

    <h2>Lista de asistentes </h2>
    <ul>
        <?php 
            if (isset($_SESSION['lista'])){
                foreach($_SESSION['lista']as $persona){
                    echo "<li>$persona</li>";
                }
            }
            else{
                echo "<li>No hay asistentes todavia</li>";
            }
        ?>
    </ul>


</body>
</html>