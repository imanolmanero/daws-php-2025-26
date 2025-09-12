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
        echo $diccionario[$usuario][$dato];
    } else {
        echo "Dato no encontrado";
    }
}

    include "ejercicio15.view.php"
?>