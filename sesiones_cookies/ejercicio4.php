<?php

    session_start();
    

    if(isset($_POST['nombre']) && $_POST['nombre'] !== ''){
        if(!isset($_SESSION['lista'])){
            $_SESSION['lista'] = [];
        }

        $_SESSION['lista'][] = $_POST['nombre'];
    }

    if (isset($_POST['borrar'])){
        unset($_SESSION['lista']);
    }

    include "ejercicio4.view.php"
?>