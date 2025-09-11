<?php
function concatenar ($a, $b = "anonimo"){
    return $a . " " . $b;
}

$textoA = $_GET["textoA"];
$textoB = $_GET["textoB"];
$frase = concatenar($textoA, $textoB);

include "ejercicio11.view.php"

?>
