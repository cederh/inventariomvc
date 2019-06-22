<?php

class Users extends MainController{
    public function __construct(){
      sessionAdmin();
      $this->ModelUsers = $this->model('ModelUsers');

   }

   public function index($alert = ''){

        // Obtener los datos de los usuarios
      $users = $this->ModelUsers->get_users();
      $parameters = [
         'menu' => 'Usuarios',
         'users' => $users,
         'alert' => $alert
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
      // $errores = '';

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         $user['nombre'] = sanitize($_POST['nombre']);
         $user['apellido'] = sanitize($_POST['apellido']);
         $user['genero'] = sanitize($_POST['genero']);
         $user['dui'] = sanitize($_POST['dui']);
         $user['user'] = sanitize($_POST['user']);
         $user['user_type'] = sanitize($_POST['user_type']);

         // if ($user['nombre'] == ''){
         //    $errores .= "<p>Por favor Ingrese el Nombre</p>";
         // }elseif (strlen($user['nombre']) > 50 ) {
         //    $errores .= '<p>El nombre debe tener menos de 50 Caracteres</p>';
         // }
         //
         // if ($user['apellido'] == ''){
         //    $errores .= "<p>Por favor Ingrese el Apellido</p>";
         // }elseif (strlen($user['apellido']) > 50 ){
         //    $errores .= '<p>El Apellido debe tener menos de 50 Caracteres</p>';
         // }
         //
         // if ($user['dui'] == ''){
         //    $errores .= "<p>Por favor Ingrese el DUI</p>";
         // }
         //
         // if ($user['user'] == ''){
         //    $errores .= "<p>Por favor Ingrese el Nombre de Usuario</p>";
         // }elseif (strlen($user['user']) > 50 ) {
         //    $errores .= '<p>El Usuario debe tener menos de 50 Caracteres</p>';
         // }

         // if($user['pass'] == ''){
         //    $errores.= '<p>Por favor Ingrese su Contraseña</p>';
         // }
         //
         // if($user['pass'] != $user['pass2']) {
         //    $errores.= '<p>Las Contraseñas no coinciden.</p>';
         // }


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
         // 'errores' => $errores,
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
}

?>
