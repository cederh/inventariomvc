<?php

class Categories extends MainController{

   function __construct(){
      sessionUser();
      $this->ModelCategories = $this->model('ModelCategories');
   }

   public function index($alert = ''){

      $categories = $this->ModelCategories->get_categories();

      $parameters = [
         'menu' => 'Categorías',
         'categories' => $categories,
         'alert' => $alert
      ];

      $this->view('categories/index', $parameters);
   }

   public function add_category(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         if ($_SERVER["REQUEST_METHOD"]=='POST') {
            $categories['nombre'] = sanitize($_POST['nombre']);
            $categories['descripcion'] = sanitize($_POST['descripcion']);
            $categories['idusuario'] = $_SESSION['user']->idusuario;
         }

         if ($this->ModelCategories->add_category($categories)){
            header('location: '. ROUTE_URL . '/categories/saved');
         }else{
            echo "No se pudo guardar la informacion";
         }
      }
      $parameters = [
         'menu' => 'Categorías'
      ];

      // Cargando la vista
      $this->view('categories/index', $parameters);
   }

   public function update_category($id = 0, $alert = ''){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         if ($_SERVER["REQUEST_METHOD"]=='POST') {
            $categories['nombre'] = sanitize($_POST['nombre']);
            $categories['descripcion'] = sanitize($_POST['descripcion']);
            $categories['idusuario'] = $_SESSION['user']->idusuario;
         }

         if ($this->ModelCategories->update_category($id, $categories)) {
            header("location:".ROUTE_URL."/categories/update_category/".$id."/saved");
            //.$id."/true");
         }else {
            die("Error al Actualizar la Categoria");
         }
      }

      $categories = $this->ModelCategories->get_category($id);

      if (!$categories) {
         header('location:'.ROUTE_URL.'/categories');
      }

      $parameters = [
         'menu' => 'Categorías',
         'categories' => $categories,
         'alert' => $alert
      ];

      $this->view('categories/update', $parameters);
   }

   public function info($id = 0){

      // Obtenemos la información del paciente
      $categories = $this->ModelCategories->get_category($id);

      // Si no hay un paciente con ese id redireccionamos
      if (!$categories) {
           redirect('/categories');
      }

      // Preparamentos para enviar a la vista
      $parameters = [
           'menu' => 'Categoría',
           'categories' => $categories
      ];

      // llamamos la vista y mandamos los parámetros
      $this->view('categories/info', $parameters);
   }

}

?>
