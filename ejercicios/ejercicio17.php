<?php

    $usuarios = [
        "user1" => [
            "nombre" => "Nora",
            "password" => "1234",
            "email" => "nora@example.com"
        ],
            "user2" => [
            "nombre" => "Ander",
            "password" => "abcd",
            "email" => "ander@example.com"
        ]
    ];  

    function validarUsuario($usuarios, $usuario, $password) {
    if (!isset($usuarios[$usuario])) {
        // Usuario no existe
        return "El usuario no existe.";
    } else {
        // Usuario existe → comprobamos contraseña
        if ($usuarios[$usuario]["password"] === $password) {
            return "Bienvenido, " . $usuarios[$usuario]["nombre"] . 
                   ". Email: " . $usuarios[$usuario]["email"];
        } else {
            return "Contraseña incorrecta.";
        }
    }
    }

    $usuario = $_GET["usuario"];
    $password = $_GET["password"];

    $resultado = validarUsuario($usuarios, $usuario, $password);



    include "ejercicio17.view.php"
?>