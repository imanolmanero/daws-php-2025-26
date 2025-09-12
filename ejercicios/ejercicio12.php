<?php
    $ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];
    var_export($ciudades);

    // Funciones
    function getValor($array, $posicion) {
        return $array[$posicion];
    }

    function setValor($array, $posicion, $valor) {
        $array[$posicion] = $valor;
        return $array;
    }

    // Ejemplos
    $valor = getValor($ciudades, 2); // Amsterdam
    $ciudades = setValor($ciudades, 1, "Roma"); // Cambia Berlin -> Roma

    include "ejercicio12.view.php";
?>