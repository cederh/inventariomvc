<?php

class Providers extends MainController{

    public function __construct(){
      sessionUser();
      $this->ModelProviders = $this->model('ModelProviders');

   }

   public function index(){
      // Obtener los datos de los usuarios
      // $providers = $this->ModelProviders->get_users();
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         if ($_SERVER["REQUEST_METHOD"]=='POST') {
            $providers['nombre'] = sanitize($_POST['nombre']);
            $providers['telefono'] = sanitize($_POST['telefono']);
            $providers['direccion'] = sanitize($_POST['direccion']);
            $providers['descripcion'] = sanitize($_POST['descripcion']);

            $providers['idusuario'] = $_SESSION['user']->idusuario;
         }

         if ($this->ModelProviders->add_provider($providers)) {
            header('location: '. ROUTE_URL . '/providers');
         }else{
            echo "No se pudo guardar la informacion";
         }
      }
      $parameters = [
         'menu' => 'Proveedores',
         // 'users' => $users
      ];

      // Cargando la vista
      $this->view('providers/index', $parameters);
   }
   //
   // public function add_provider(){
   //
   // }


}

?>
