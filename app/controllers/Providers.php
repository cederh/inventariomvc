<?php

class Providers extends MainController{

    public function __construct(){
      sessionUser();
      $this->ModelProviders = $this->model('ModelProviders');

   }

   public function index(){

      $providers = $this->ModelProviders->get_providers();

      $parameters = [
         'menu' => 'Proveedores',
         'providers' => $providers
      ];

      $this->view('providers/index', $parameters);
   }

   public function add_provider(){
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

   public function update_provider($id = 0){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         if ($_SERVER["REQUEST_METHOD"]=='POST') {
            $providers['nombre'] = sanitize($_POST['nombre']);
            $providers['telefono'] = sanitize($_POST['telefono']);
            $providers['direccion'] = sanitize($_POST['direccion']);
            $providers['descripcion'] = sanitize($_POST['descripcion']);

            $providers['idusuario'] = $_SESSION['user']->idusuario;

         }

         if ($this->ModelProviders->update_provider($id, $providers)) {
            header("location:".ROUTE_URL."/providers/update_provider/".$id);
            //.$id."/true");
         }else {
            die("Error al Actualizar el Usuario");
         }
      }

      $providers = $this->ModelProviders->get_provider($id);

      if (!$providers) {
         header('location:'.ROUTE_URL.'/providers');
      }

      $parameters = [
         'menu' => 'Proveedores',
         'providers' => $providers
      ];

      $this->view('providers/update', $parameters);
   }

   public function info($id = 0){

      // Obtenemos la información del paciente
      $providers = $this->ModelProviders->get_provider($id);

      // Si no hay un paciente con ese id redireccionamos
      if (!$providers) {
           redirect('/providers');
      }

      // Preparamentos para enviar a la vista
      $parameters = [
           'menu' => 'Proveedores',
           'providers' => $providers
      ];

      // llamamos la vista y mandamos los parámetros
      $this->view('providers/info', $parameters);
   }
}

?>
