<?php
    // Función que realiza las tres operaciones según la opción
    function sumaNumeros($numero, $opcion) {
        $suma = 0;
        $ultimo = 0;

        switch($opcion) {
            case 1: // Suma de todos los números
                for ($i = 0; $i <= $numero; $i++) {
                    $suma += $i;
                }
                return "La suma de todos los números hasta $numero es: $suma";

            case 2: // Suma de solo los pares
                for ($i = 0; $i <= $numero; $i++) {
                    if ($i % 2 == 0) {
                        $suma += $i;
                    }
                }
                return "La suma de los números pares hasta $numero es: $suma";

            case 3: // Suma hasta superar 100
                for ($i = 0; $i <= $numero; $i++) {
                    if ($suma + $i > 100) {
                        break;
                    }
                    $suma += $i;
                    $ultimo = $i;
                }
                return "La suma se detuvo antes de superar 100. Último número sumado: $ultimo, suma total: $suma";

            default:
                return "Opción no válida. Elige 1 (todos), 2 (pares) o 3 (hasta 100).";
        }
    }

    // Recoger datos de la URL con GET
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : null;
    $opcion = isset($_GET['opcion']) ? (int)$_GET['opcion'] : null;

    // Resultado de la operación
    $resultado = null;
    if ($numero !== null && $opcion !== null) {
        $resultado = sumaNumeros($numero, $opcion);
    }

    // Incluir la vista
    include "ejercicio19.view.php";
?>