<?php

    $usuarios = array(
        "user1" => array (
            "nombre" =>'Ane',
            "apellidos" =>'Lopez',
            "password" =>'123Abc',
        ),
        "user2" => array (
            "nombre" =>'Amaia',
            "apellidos" =>'Otsoa',
            "password" =>'456Xyz',
        ),
    );

    $Error_Mensaje = [1 => "Contraseña incorrecta", 2=> "Usuario Incorrecto"];

    function validar($usuarios,$usuario,$contrseña){
        if (isset($usuarios[$usuario])){
            if ($usuarios[$usuario]["contraseña"] === $contrseña){
                return 0;
            }
            return 1;
        }
        return 2;
    }


    include "ejercicio4.view.php";
?>