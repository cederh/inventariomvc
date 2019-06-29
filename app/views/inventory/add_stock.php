<?php require_once('../app/views/inc/header.php'); ?>
<div class="card shadow">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">Actualizar Producto </h3>
    </div>
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/inventory"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>

   <div class="card-body">
      <form action="<?php echo ROUTE_URL?>/inventory/add_stock/<?php echo $parameters["inventory"]->idproducto ?>" method="post" id="form-add_stock">
         <div class="modal-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-alternative" id="nombre"
                             name="nombre" value="<?php echo $parameters["inventory"]->nombre_producto ?>" disabled>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control form-control-alternative" id="cantidad"
                             name="cantidad" value="<?php echo $parameters["inventory"]->stock ?>"disabled>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="precio">Cantidad de Producto Nuevo:</label>
                        <input type="text" class="form-control form-control-alternative" id="stockplus"
                             name="stockplus" placeholder="Nuevo Producto" required>
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
// Alertas
if ($parameters['alert'] == 'saved') {
    echo
    "<script>
        Swal.fire({
        title: 'Datos guardados',
        text: 'Nuevo Usuario registrado exitosamente',
        type: 'success',
        confirmButtonText: 'Aceptar'
      })
    </script>";
}
?>
