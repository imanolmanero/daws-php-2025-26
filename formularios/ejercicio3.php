<?php 
    if(!empty($_POST)){
        $enviado = true;
        $asunto = $_POST['asunto'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $motivo = $_POST['motivo'];
        $mensaje = $_POST['mensaje'];
    }

    include "ejercicio3.view.php";
?>