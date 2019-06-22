<?php require_once('../app/views/inc/header.php'); ?>
<div class="card shadow">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">Actualizar Categoría</h3>
    </div>
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/categories"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>
    <div class="card-body">
      <form action="<?php echo ROUTE_URL?>/categories/update_category/<?php echo $parameters['categories']->idcategoria ?>" method="post" id="form-usuario">
          <div class="modal-body">
               <div class="row">
                  <div class="col-md-12">
                       <div class="form-group">
                          <label for="nombre">Nombre de la Categoría</label>
                           <input type="text" class="form-control form-control-alternative" id="nombre"
                              name="nombre" placeholder="Nombre" value="<?php echo $parameters['categories']->nombre ?>">
                       </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                           <textarea class="form-control form-control-alternative" id="descripcion"
                           name="descripcion" placeholder="Descripcion" ><?php echo $parameters['categories']->descripcion?>
                           </textarea>
                     </div>
                  </div>
               </div>
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
