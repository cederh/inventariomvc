<?php
   function sanitize($texto){
      return trim(filter_var($texto, FILTER_SANITIZE_STRING));
   }
?>
