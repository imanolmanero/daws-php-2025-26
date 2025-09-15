<?php

    function operacion($a,$b){
        if($a == $b ){
            return $a * $b;
        }else{
            return $a + $b;
        }
    }

    $a = $_GET["a"];
    $b = $_GET["b"];

    $resultado = operacion($a, $b);

    include "ejercicio16.view.php"
?>