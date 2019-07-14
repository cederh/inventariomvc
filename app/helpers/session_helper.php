<?php
    // Función que se encarga de verificar que se ha logeado un administrador
    //para verificar que inicio sesion un administrador
    function sessionAdmin(){
        //iniciamos una sesion
        session_start();
            if (!isset($_SESSION['user']) || $_SESSION['user']->usu_tipo == 1) {
                //sacar o redireccionar el usuario
                header("location:".ROUTE_URL);

            }
    }
//verificar si es un usuario normal
    function sessionUser(){
        session_start();
            if (!isset($_SESSION['user'])) {
                header("location:".ROUTE_URL."/login");
            }
    }

?>
