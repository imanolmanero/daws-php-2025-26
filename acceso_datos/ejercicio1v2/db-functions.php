<?php
require_once "database.php";

// Obtener todos los productos
function obtenerProductos($dbh) {
    $stmt = $dbh->query("SELECT * FROM productos ORDER BY id ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Añadir producto
function agregarProducto($dbh, $nombre) {
    $sql = "INSERT INTO productos (nombre) VALUES (:nombre)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':nombre' => $nombre]);
}

// Eliminar producto
function eliminarProducto($dbh, $id) {
    $sql = "DELETE FROM productos WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':id' => $id]);
}

// Vaciar lista
function vaciarProductos($dbh) {
    $dbh->exec("TRUNCATE TABLE productos");
}

?>