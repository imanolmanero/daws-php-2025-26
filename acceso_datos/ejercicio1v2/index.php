<?php
require_once "db-functions.php";

// Acción: agregar
if (isset($_POST['agregar']) && !empty($_POST['nuevo'])) {
    agregarProducto($dbh, $_POST['nuevo']);
}

// Acción: eliminar
if (isset($_GET['eliminar'])) {
    eliminarProducto($dbh, $_GET['eliminar']);
}

// Acción: vaciar
if (isset($_GET['vaciar'])) {
    vaciarProductos($dbh);
}

// Obtener productos para mostrar
$productos = obtenerProductos($dbh);

// Incluir vista
include "index.view.php";

?>
