<?php

// Para redireccionar la pagina
function redirect($pagina){
   header('location:' . ROUTE_URL . $pagina);
}

?>
