<?php 

    function operaciones($num1,$num2,$operacion){
        switch($operacion){
            case "suma":
                return $num1 + $num2;
                break;
            case "resta":
                return $num1 - $num2;
                break;
            case "multiplicacion":
                return $num1 * $num2;
                break;
            case "division":
                return $num1 / $num2;
                break;
        }
    };

    if(!empty($_POST)){
        $resultado = operaciones($_POST['num1'],$_POST['num2'],$_POST['oper']);
    }

    include "ejercicio2.view.php";
?>