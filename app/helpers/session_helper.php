<?php
// Función que se encarga de verificar que se ha logeado un administrador

//Para verificar que inicio session un administrador
function sessionAdmin(){
//Para iniciar session User
   session_start();

   if (!isset($_SESSION['user']) || $_SESSION['user']->usu_tipo == 2) {
      // Redireccionar al usuario
      header("location:".ROUTE_URL);
   }
}

function sessionUser(){
   session_start();
   if (!isset($_SESSION['user'])) {
      header("location:".ROUTE_URL."/login");
   }
}

?>
