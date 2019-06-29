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
       <form action="<?php echo ROUTE_URL?>/inventory/update_product/<?php echo $parameters["inventory"]->idproducto ?>" method="post" id="form-inventario">
          <div class="modal-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control form-control-alternative" id="nombre"
                              name="nombre" placeholder="Nombre" value="<?php echo $parameters['inventory']->nombre_producto ?>" required>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                          <label for="cantidad">Cantidad</label>
                          <input type="text" class="form-control form-control-alternative" id="cantidad"
                              name="cantidad" placeholder="Cantidad" value="<?php echo $parameters['inventory']->stock?>" disabled>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                          <label for="precio">Precio $</label>
                          <input type="text" class="form-control form-control-alternative" id="precio"
                              name="precio" placeholder="Precio" value="<?php echo $parameters['inventory']->precio?>" required>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                          <label for="categoria">Categoria</label>
                          <select  class="form-control form-control-alternative" id="categoria" name="categoria" required>
                             <?php foreach ($parameters['categories'] as $key => $categories): ?>
                                <?php if ($parameters['categoria']->idcategoria == $categories->idcategoria): ?>
                                   <option value="<?php echo $categories->idcategoria ?>" selected="true">
                                      <?php echo $categories->nombre_categoria ?></option>
                                 <?php else: ?>
                                    <option value="<?php echo $categories->idcategoria ?>">
                                       <?php echo $categories->nombre_categoria ?></option>
                                <?php endif; ?>
                             <?php endforeach; ?>
                          </select>
                       </div>
                   </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                         <label for="proveedor">Proveedor</label>
                         <select  class="form-control form-control-alternative" id="proveedor" name="proveedor" required>
                            <?php foreach ($parameters['providers'] as $key => $providers): ?>
                               <?php if ($parameters['providers']->idproveedor == $providers->idproveedor): ?>
                                  <option value="<?php echo $providers->idproveedor ?>" selected="true">
                                     <?php echo $providers->nombre_proveedor ?></option>
                                <?php else: ?>
                                   <option value="<?php echo $providers->idproveedor ?>">
                                      <?php echo $providers->nombre_proveedor ?></option>
                               <?php endif; ?>
                            <?php endforeach; ?>
                         </select>
                      </div>
                  </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                      <div class="form-group">
                         <label for="descripcion">Descripcion</label>
                           <textarea class="form-control form-control-alternative" id="descripcion" name="descripcion" placeholder="Descripcion" required><?php echo $parameters["inventory"]->descripcion_producto?></textarea>
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
