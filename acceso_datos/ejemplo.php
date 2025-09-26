<?php
// Datos de conexión
$host = "localhost";
$usuario = "root";     
$password = "";          
$baseDatos = "acceso_datos"; 

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $baseDatos);

// Comprobar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "Conexión exitosa";


// Crear consulta 
$stmt = $dbh->prepare ("SELECT nombre,apellidos,email,edad from alumnos");

// Modo en el que se reciben los datos
$stmt ->setFetchMode(PDO::FETCH_ASSOC);

//Ejercutar sentencia
$stmt -> execute();

//Mostrar resultados
$fila = $stmt ->fetch(PDO::FETCH_ASSOC);

?>
