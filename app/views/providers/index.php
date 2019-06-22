<?php require_once('../app/views/inc/header.php'); ?>

<div class="card shadow">
   <div class="card-header bg-transparent">
     <div class="row">
         <div class="col-md-6">
             <h3 class="mb-0 text-blue"><i class="fas fa-truck"></i> Proveedores </h3>
         </div>
         <div class="col-md-6 text-right">
             <button class="btn btn-icon btn-2 btn-sm btn-primary" type="button" data-toggle="modal"
                 data-target="#new_provider">
                 <i class="fas fa-user-plus"></i>
             </button>
         </div>
     </div>
   </div>
   <div class="card-body">

      <div class="table-responsive">
           <table class="table align-items-center">
               <thead class="thead-light">
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Nombre</th>
                       <th scope="col">telefono</th>
                       <th scope="col">Opciones</th>
                   </tr>
               </thead>
               <tbody>
                   <?php foreach ($parameters['providers'] as $key => $providers):?>
                   <tr>
                       <td>
                           <?php echo $providers->idproveedor?>
                       </td>
                       <td>
                           <?php echo $providers->nombre ?>
                       </td>
                       <td>
                           <?php echo $providers->telefono?>
                       </td>
                       <td class="text-right">
                           <div class="dropdown">
                              <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item"
                                       href="<?php echo ROUTE_URL?>/providers/info/<?php echo $providers->idproveedor?>"><i
                                          class="fas fa-info-circle"></i>Informacion</a>
                                    <a class="dropdown-item"
                                       href="<?php echo ROUTE_URL?>/providers/update_provider/<?php echo $providers->idproveedor?>"><i
                                          class="fas fa-user-edit"></i>Actualizar</a>
                              </div>
                           </div>
                       </td>
                   </tr>
                   <?php endforeach;?>
               </tbody>
           </table>
      </div>

   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="new_provider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus"></i> Nuevo Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Formulario nuevo usuario -->
            <form action="<?php echo ROUTE_URL?>/providers/add_provider" method="post" id="form-proveedores">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="nombre">Nombre del Proveedor</label>
                                <input type="text" required class="form-control form-control-alternative" id="nombre"
                                    name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="telefono">Telefono</label>
                                <input type="text" required class="form-control form-control-alternative" id="telefono" name="telefono"
                                    placeholder="Telefono">
                           </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                              <label for="direccion">Direccion</label>
                              <input type="text" required class="form-control form-control-alternative" id="direccion"
                                   name="direccion" placeholder="Direccion">
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="descripcion">Descripcion</label>
                                 <textarea class="form-control form-control-alternative" id="descripcion" name="descripcion" placeholder="Descripcion" required></textarea>
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

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
                </div>
            </form>
            <!-- Formulario nuevo usuario -->
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
        text: 'Nuevo Proveedor registrado exitosamente',
        type: 'success',
        confirmButtonText: 'Aceptar'
      })
    </script>";
}
?>
