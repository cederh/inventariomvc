<?php require_once('../app/views/inc/header.php')?>

    <div class="card shadow">
       <div class="card-header bg-transparent">
          <h3 class="mb-0 text-blue"><i class="fas fa-building"></i> Empresa</h3>
       </div>
       <div class="card-body">
           <div class="row justify-content-center">
               <div class="col-md-8">
               <br>
                   <form action="<?php echo ROUTE_URL?>/company" method="post" id="form-empresa">
                       <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <i class="fas fa-building"></i>
                                 <label for="nombre">Nombre de la Empresa</label>
                                 <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Empresa" required value="<?php echo $parameters['company']->nombre_empresa?>">
                              </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <i class="fas fa-directions"></i>
                                 <label for="direccion">Dirección</label>
                                 <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required value="<?php echo $parameters['company']->direccion?>">
                              </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <i class="fas fa-phone"></i>
                                 <label for="telefono">Telefono</label>
                                 <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required value="<?php echo $parameters['company']->telefono?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <i class="fas fa-id-card"></i>
                                 <label for="nit">NIT</label>
                                 <input type="text" class="form-control" id="nit" name="nit" placeholder="NIT" required value="<?php echo $parameters['company']->nit?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <i class="fas fa-id-card"></i>
                                 <label for="iva">IVA</label>
                                 <input type="text" class="form-control" id="iva" formenctype=""name="iva" placeholder="IVA" required value="<?php echo $parameters['company']->iva?>">
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
                       <div class="text-right">
                           <input type="submit" class="btn btn-primary" value="Guardar">
                       </div>
                   </form>
               </div>
           </div>
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
