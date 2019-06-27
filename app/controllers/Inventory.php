<?php

class Inventory extends MainController{

    public function __construct(){
      sessionUser();
      $this->ModelInventory = $this->model('ModelInventory');
      $this->ModelProviders = $this->model('ModelProviders');
      $this->ModelCategories = $this->model('ModelCategories');

   }

   public function index($alert = ''){

      $inventory = $this->ModelInventory->get_inventaries();
      $providers = $this->ModelProviders->get_providers();
      $categories = $this->ModelCategories->get_categories();

      $parameters = [
         'menu' => 'Inventario',
         'inventory' => $inventory,
         'alert' => $alert,
         'providers' => $providers,
         'categories' => $categories
      ];

      $this->view('inventory/index', $parameters);
   }

   public function add_inventory($alert = '')
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         if ($_SERVER["REQUEST_METHOD"]=='POST') {
            $inventory['nombre'] = sanitize($_POST['nombre']);
            $inventory['cantidad'] = sanitize($_POST['cantidad']);
            $inventory['precio'] = sanitize($_POST['precio']);
            $inventory['categoria'] = sanitize($_POST['categoria']);
            $inventory['proveedor'] = sanitize($_POST['proveedor']);
            $inventory['descripcion'] = sanitize($_POST['descripcion']);
            $inventory['idusuario'] = $_SESSION['user']->idusuario;
         }

         if ($this->ModelInventory->add_inventory($inventory)) {
            header('location: '. ROUTE_URL . '/inventory/saved');
         }else{
            echo "No se pudo guardar la informacion";
         }
      }
      $parameters = [
         'menu' => 'Inventario'
      ];

      // Cargando la vista
      $this->view('inventory/index', $parameters);
   }

   public function info($id = 0){

      // Obtenemos la información del paciente
      $inventory = $this->ModelInventory->get_inventory($id);

      // Si no hay un paciente con ese id redireccionamos
      if (!$inventory) {
           redirect('/inventory');
      }

      // Preparamentos para enviar a la vista
      $parameters = [
           'menu' => 'Inventario',
           'inventory' => $inventory
      ];

      // llamamos la vista y mandamos los parámetros
      $this->view('inventory/info', $parameters);
   }
}

?>
