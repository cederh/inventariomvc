<?php
 /**
  *
  */
 class Company extends MainController
 {
    function __construct()
    {
       sessionAdmin();
       $this->ModelCompany = $this->model('ModelCompany');
    }

    public function index($alert='')
    {
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Limpiando los datos enviados por el usuario
         $company['nombre'] = sanitize($_POST['nombre']);
         $company['direccion'] = sanitize($_POST['direccion']);
         $company['telefono'] = sanitize($_POST['telefono']);
         $company['nit'] = sanitize($_POST['nit']);
         $company['iva'] = sanitize($_POST['iva']);

         if ($this->ModelCompany->update($company)) {
            header("location:".ROUTE_URL."/company/saved");
         }else {
            die("Error al Actualizar el Usuario");
         }
      }

       $company = $this->ModelCompany->get_info();
       $parameters =[
          'menu' => 'Empresa',
          'company' => $company,
          'alert' => $alert
       ];

       $this->view('company/index', $parameters);
    }

 }

 ?>
