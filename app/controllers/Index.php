<?php

class Index extends MainController{

   public function __construct(){
      sessionUser();
   }

   public function index(){

      $parameters = [
          'menu' => 'Inicio'
      ];

      $this->view('index/index', $parameters);
   }

   public function article(){
      echo "MOSTRAR ARTICULOS";
   }
}

?>
