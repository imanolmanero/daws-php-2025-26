<?php 

    $diccionario = [
    "jvadillo" => [
        "nombre" => "Jon",
        "apellidos" => "Vadillo Pérez",
        "email" => "jvadillo@egibide.org"
    ],
    "mmartinez" => [
        "nombre" => "María",
        "apellidos" => "Martínez López",
        "email" => "mmartinez@egibide.org"
    ],
    "aperez" => [
        "nombre" => "Ander",
        "apellidos" => "Pérez Díaz",
        "email" => "aperez@egibide.org"
    ]
];

// Función que obtiene datos de un usuario
function getDatos($diccionario, $usuario, $dato) {
    if (isset($diccionario[$usuario][$dato])) {
        return $diccionario[$usuario][$dato];
    } else {
        return "Dato no encontrado";
    }
}

    include "ejercicio15.view.php"
?>