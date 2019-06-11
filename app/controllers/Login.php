<?php

class Login extends MainController{

   public function __construct(){
      session_start();
      if (isset($_SESSION['user'])) {
         header("location:".ROUTE_URL);
      }

      $this->ModelLogin = $this->model('ModelLogin');
   }

   public function index(){
      $errores = '';

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         $user = sanitize($_POST['user']);
         $pass = sanitize(hash('sha512', $_POST['password']));

         $user = $this->ModelLogin->login($user, $pass);

         if (!$user) {
            $errores .= "<p>Usuario o Contraseña incorrectas.</p>";
         }else {
            $_SESSION['user'] = $user;
            header("location:".ROUTE_URL);
         }
      }

      $parameters = [
         'errores' => $errores
      ];

      $this->view('login/index', $parameters);
   }

   public function logout(){
      session_destroy();
      header("location:".ROUTE_URL.'/login');
   }
}

?>
