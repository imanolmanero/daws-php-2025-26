<?php

    $paises = ["Brasil","Portugal","Islandia","Mexico", "Filipinas", "Marruecos"];

    function encontrarPosicion($array,$pais){
        for($i= 0 ; $i < count($array); $i++){
            if($array[$i] === $pais){
                return $i;
            }
        }
        return -1;
    }
    $paisBuscado = $_GET['pais'] ?? null;

    $resultado = null;
    if ($paisBuscado !== null) {
        $resultado = encontrarPosicion($paises, $paisBuscado);
    }

    include "ejercicio22.view.php";
?>