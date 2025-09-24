<?php

    if(isset($_GET['idioma'])){
        $idioma = $_GET['idioma'];
        setcookie("idioma",$idioma,time()+60);
    }

    if(isset($_COOKIE['idioma'])){
        $idioma = $_COOKIE['idioma'];
    }

include "ejercicio3.view.php";
?>