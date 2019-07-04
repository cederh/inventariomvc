<?php

class Users extends MainController{
    public function __construct(){
      sessionAdmin();
      $this->ModelUsers = $this->model('ModelUsers');

   }

   public function index($alert = ''){

        // Obtener los datos de los usuarios
      $users = $this->ModelUsers->get_users();
      $disable = $this->ModelUsers->get_disable();
      $parameters = [
         'menu' => 'Usuarios',
         'users' => $users,
         'alert' => $alert,
         'disable'=> $disable
      ];

      // Cargando la vista
      $this->view('users/index', $parameters);
   }

   public function add_user(){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         $user['nombre'] = sanitize($_POST['nombre']);
         $user['apellido'] = sanitize($_POST['apellido']);
         $user['genero'] = sanitize($_POST['genero']);
         $user['dui'] = sanitize($_POST['dui']);
         $user['user'] = sanitize($_POST['user']);
         $user['user_type'] = sanitize($_POST['user_type']);
         $user['pass'] = hash('sha512', SALT . sanitize($_POST['pass']));
         $user['pass2'] = sanitize($_POST['pass2']);

         if ($this->ModelUsers->add_user($user)) {
            header('location: '. ROUTE_URL . '/users/saved');
         }else{
            echo "No se pudo guardar la informacion";
         }
      }
   }

   public function update($id = 0, $alert = ''){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         $user['nombre'] = sanitize($_POST['nombre']);
         $user['apellido'] = sanitize($_POST['apellido']);
         $user['genero'] = sanitize($_POST['genero']);
         $user['dui'] = sanitize($_POST['dui']);
         $user['user'] = sanitize($_POST['user']);
         $user['user_type'] = sanitize($_POST['user_type']);

         if ($this->ModelUsers->update_user($id, $user)) {
            header("location:".ROUTE_URL."/users/update/".$id."/saved");
         }else {
            die("Error al Actualizar el Usuario");
         }
      }

      $user = $this->ModelUsers->get_user($id);

      if (!$user) {
         header('location:'.ROUTE_URL.'/users');
      }

      $parameters = [
         'menu' => 'Usuarios',
         'user' => $user,
         'errores' => $errores,
         'alert' => $alert
      ];

      $this->view('users/update', $parameters);
   }

   public function update_password($id = 0, $alert = ''){
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {

         // Limpiamos los datos para prevenir inyección de código
         $user['pass'] = hash('sha512', SALT . sanitize($_POST['pass']));

         if ($this->ModelUsers->update_password($id, $user)) {
            header("location:".ROUTE_URL."/users/update_password/".$id."/saved");
         }else {
            die('Error al guardar los datos');
         }
      }
      $user = $this->ModelUsers->get_user($id);
      if (!$user) {
         header('location:'.ROUTE_URL.'/users');
      }
         $
      $parameters = [
         'menu' => 'Usuarios',
         'user' => $user,
         'alert' => $alert
      ];

      $this->view('users/update_password', $parameters);
   }

   public function info($id = 0){

      // Obtenemos la información del paciente
      $user = $this->ModelUsers->get_user($id);

      // Si no hay un paciente con ese id redireccionamos
      if (!$user) {
           redirect('/users');
      }

      // Preparamentos para enviar a la vista
      $parameters = [
           'menu' => 'Usuarios',
           'user' => $user
      ];

      // llamamos la vista y mandamos los parámetros
      $this->view('users/info', $parameters);
   }

   public function disable($id = 0, $alert = '')
   {

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         $user['estado'] = sanitize($_POST['estado']);

         if ($this->ModelUsers->disable($id, $user)) {
            header("location:".ROUTE_URL."/users/saved");
         }else {
            die("Error al Actualizar el Usuario");
         }
      }

      $user = $this->ModelUsers->get_user($id);

      if (!$user) {
         header('location:'.ROUTE_URL.'/users');
      }

      // Preparamentos para enviar a la vista
      $parameters = [
           'menu' => 'Usuarios',
           'alert' => $alert,
           'user' => $user
      ];

      // llamamos la vista y mandamos los parámetros
      $this->view('users/disable', $parameters);
   }
}

?>
