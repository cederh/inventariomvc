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
            <form action="<?php echo ROUTE_URL?>/providers/" method="post" id="form-usuario">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-alternative" id="nombre"
                                    name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <input type="text" class="form-control form-control-alternative" id="telefono" name="telefono"
                                    placeholder="Telefono">
                           </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                              <input type="text" class="form-control form-control-alternative" id="direccion"
                                   name="direccion" placeholder="Direccion">
                           </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="descripcion">Descripcion</label>
                                 <textarea class="form-control form-control-alternative" id="descripcion" name="descripcion" placeholder="Descripcion">

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

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
                </div>
            </form>
            <!-- Formulario nuevo usuario -->
        </div>
    </div>
</div>

<?php require_once('../app/views/inc/footer.php'); ?>
