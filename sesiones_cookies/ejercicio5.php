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
    if(verificarSesion('usuario')){
        $usuario = $_SESSION['usuario'];
        include "ejercicio5.view.php";
    }else{
        if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
            $enviado = true;

            $login = validarInicioSesion($usuarios, $_POST['usuario'], $_POST['contraseña']);
        
            switch ($login) {
                case 0:
                    $_SESSION['usuario'] = $_POST['usuario'];
                    include "ejercicio5.view.php";
                    break;
                case 1:
                case 2:
                    include_once "ejercicio5.login.php";
                    break;
            }

        }else{
            include_once "ejercicio5.login.php";
        }   
    }
}else if (isset($_POST['cerrarSesion'])){
            cerrarSesion();
}else {
    if(verificarSesion('usuario')){
        include "ejercicio5.view.php";
    }else{
        include_once "ejercicio5.login.php";
    }
}

?> 