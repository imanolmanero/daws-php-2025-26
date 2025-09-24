<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$usuarios = [
    "imanol" => "1234",
    "ana" => "abcd",
    "pedro" => "qwerty"
];

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    // Miramos si el usuario existe y la contraseña coincide
    if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
        $_SESSION['usuario'] = $user; // guardamos en sesión que el usuario está logueado
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}

if (isset($_GET['cerrar'])) {
    session_destroy(); // borra toda la sesión
    header("Location: login.php"); // recarga la página
    exit;
}



include "ejercicio5.view.php"
?>