<?php require_once('../app/views/inc/header.php'); ?>
<div class="card shadow">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">Actualizar Proveedor </h3>
    </div>
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/providers"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>
    <div class="card-body">
      <form action="<?php echo ROUTE_URL?>/providers/update_provider/<?php echo $parameters['providers']->idproveedor ?>" method="post" id="form-proveedores">
          <div class="modal-body">
               <div class="row">
                  <div class="col-md-6">
                       <div class="form-group">
                          <label for="nombre">Nombre del Proveedor</label>
                           <input type="text" required class="form-control form-control-alternative" id="nombre"
                              name="nombre" placeholder="Nombre" value="<?php echo $parameters['providers']->nombre_proveedor ?>">
                       </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="telefono">Telefono</label>
                           <input type="text"required  class="form-control form-control-alternative" id="telefono" name="telefono"
                              placeholder="Telefono" value="<?php echo $parameters['providers']->telefono ?>">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" required class="form-control form-control-alternative" id="direccion"
                              name="direccion" placeholder="Direccion" value="<?php echo $parameters['providers']->direccion ?>">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                           <textarea class="form-control form-control-alternative" id="descripcion"
                           name="descripcion" placeholder="Descripcion" required><?php echo $parameters['providers']->descripcion?></textarea>
                     </div>
                  </div>
               </div>
               <!-- Alerta PHP -->
               <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $parameters['errores'] != ''):?>
               <div class="row">
                   <div class="col-md-12">
                       <div class="alert alert-danger errores">
                        <?php echo $parameters['errores'] ?>
                       </div>
                   </div>
               </div>
               <?php endif;?>

             <!-- Errores JS -->
               <div class="row">
                   <div class="col-md-12">
                       <div class="alert alert-danger errores" id="errores" style="display:none">

                       </div>
                   </div>
               </div>
          </div>
          <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
      </form>
    </div>
</div>
<?php require_once('../app/views/inc/footer.php');
//Alertas
if ($parameters['alert'] == 'saved') {
    echo
    "<script>
        Swal.fire({
        title: 'Datos guardados',
        text: 'Datos actualizados exitosamente',
        type: 'success',
        confirmButtonText: 'Aceptar'
      })
    </script>";
}
?>
