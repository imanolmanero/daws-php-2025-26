<?php

    $usuarios = [
        "user1" => [
            "nombre" => "Nora",
            "contraseña" => "123123",
            "email" => "nora@php.net"
        ],
        "user2" => [
            "nombre" => "Juan",
            "contraseña" => "456456",
            "email" => "juan@php.net"
        ],
        "user3" => [
            "nombre" => "Ana",
            "contraseña" => "789789",
            "email" => "ana@php.net"
        ]
    ];

    $Error_Mensaje = [1 => "Contraseña incorrecta", 2=> "Usuario Incorrecto"];

    function validar($usuarios,$usuario,$contraseña){
        if (isset($usuarios[$usuario])){
            if ($usuarios[$usuario]["contraseña"] === $contraseña){
                return 0;
            }
            return 1;
        }
        return 2;
    }

    if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
    $enviado = true;
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $login = validar($usuarios, $usuario, $contraseña);

    switch ($login) {
        case 0:
            $nombre = $usuarios[$usuario]["nombre"];
            include "ejercicio4.view.bienvenida.php";
            break;
        default:
            include "ejercicio4.view.php";
    }
    } else {
        include "ejercicio4.view.php";
    }
?>