<?php require_once('../app/views/inc/header.php'); ?>

<div class="card shadow">
    <div class="card-header bg-transparent">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-0 text-blue"><i class="fas fa-inventorys"></i> Inventario </h3>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-icon btn-2 btn-sm btn-primary" type="button" data-toggle="modal"
                    data-target="#new_inventory">
                    <i class="fas fa-boxes"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($parameters['inventory'] as $key => $inventory):?>
                    <tr>
                        <td>
                            <?php echo $inventory->idproducto?>
                        </td>
                        <td>
                            <?php echo $inventory->nombre_producto?>
                        </td>
                        <td>
                            <?php echo $inventory->precio?>
                        </td>
                        <td>
                            <?php echo $inventory->stock?>
                        </td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item"
                                       href="<?php echo ROUTE_URL?>/inventory/info/<?php echo $inventory->idproducto?>"><i
                                           class="fas fa-info-circle"></i>Información
                                    </a>
                                    <a class="dropdown-item"
                                        href="<?php echo ROUTE_URL?>/inventory/update_product/<?php echo $inventory->idproducto?>"><i
                                            class="fas fa-inventory-edit"></i>Actualizar
                                    </a>
                                    <a class="dropdown-item"
                                       href="<?php echo ROUTE_URL?>/inventory/add_stock/<?php echo $inventory->idusuario?>"><i
                                          class="fas fa-plus-circle"dropzone=""></i>Cargar

                                    </a>
                                    <a class="dropdown-item"
                                       href="<?php echo ROUTE_URL?>/inventory/remove_stock/<?php echo $inventory->idusuario?>"><i
                                          class="fas fa-minus-circle"></i>Descartar
                                    </a>
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
<div class="modal fade" id="new_inventory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-inventory-plus"></i> Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Formulario nuevo usuario -->
            <form action="<?php echo ROUTE_URL?>/inventory/add_inventory" method="post" id="form-inventario">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="nombre">Nombre</label>
                                <input type="text" class="form-control form-control-alternative" id="nombre"
                                    name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="cantidad">Cantidad</label>
                                <input type="text" class="form-control form-control-alternative" id="cantidad"
                                    name="cantidad" placeholder="Cantidad" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="precio">Precio $</label>
                                <input type="text" class="form-control form-control-alternative" id="precio"
                                    name="precio" placeholder="Precio" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="categoria">Categoria</label>
                               <select  class="form-control form-control-alternative" id="categoria" name="categoria" required>
                                  <?php foreach ($parameters['categories'] as $key => $categories): ?>
                                     <option value="<?php echo $categories->idcategoria ?>"> <?php echo $categories->nombre_categoria ?></option>
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
                                    <option value="<?php echo $providers->idproveedor ?>"> <?php echo $providers->nombre_proveedor ?></option>
                                 <?php endforeach; ?>
                              </select>
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
        text: 'Nuevo Usuario registrado exitosamente',
        type: 'success',
        confirmButtonText: 'Aceptar'
      })
    </script>";
}
?>
