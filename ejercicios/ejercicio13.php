<?php

    $animales = ["Perro", "Gato", "Tigre", "Elefante"];
    $colores = ["Rojo", "Verde", "Azul", "Amarillo"];

    // Número de elementos
    $numAnimales = count($animales);
    $numColores = count($colores);

    // Añadir un elemento al final de $animales
    array_push($animales, "León");

    // Añadir un elemento al principio de $colores
    array_unshift($colores, "Negro");

    // Crear un tercer array uniendo los dos
    $combinados = array_merge($animales, $colores);




    include "ejercicio13.view.php";
?>