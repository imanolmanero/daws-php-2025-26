<?php 
include "ejercicio5.datos.php";
session_start();

function verificarSesion($sesion)
{
    if (!isset($_SESSION[$sesion])){
        return false;
    }
    return true;
}

function validarInicioSesion($usuarios,$user,$contrsaseña)
{
    if (isset($usuarios[$user])){
        if($usuarios[$user]["contraseña"] === $contrsaseña){
            return 0;
        }
        return 1;
    }
    return 2;
}

function cerrarSesion()
{
    unset($_SESSION['usuario']);
    include "ejercicio5.login.php";
}

$Error_Mssg = [1 => "Contraseña incorrecta" , 2 => "Usuario incorrecto"];

if (isset($_POST['iniciarSesion'])) {
    
}

?>