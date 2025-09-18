<?php

    if(!empty($_GET)){
        $temp= $_GET['temp'];
        $unid= $_GET['unid'];
        $resultado = 0;

        if($unid == "celsius"){
            $resultado = ($temp *9/5) +32;
        }else{
            $resultado = ($temp-32)*5/9;
        }
        
    }

    include "ejercicio1.view.php";
?>