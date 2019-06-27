<?php require_once('../app/views/inc/header.php')?>
<div class="card">
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/inventory"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><b>Información del Producto</b></p>
                <hr>
                <p><b>Nombre: </b> <?php echo $parameters['inventory']->nombre_producto?></p>
                <p><b>Cantidad Disponible: </b> <?php echo $parameters['inventory']->stock?></p>
                <p><b>Precio $: </b><?php echo $parameters['inventory']->precio?></p>
                <p><b>Categoria: </b><?php echo $parameters['inventory']->nombre_categoria?></p>
                <p><b>Proveedor: </b><?php echo $parameters['inventory']->nombre_proveedor?></p>
                <p><b>Descripcion: </b><?php echo $parameters['inventory']->descripcion?></p>
            </div>
            <div class="col-md-6">
                  <p><b>Información de registro</b></p>
                  <hr>
                  <p><b>Nombre del usuario que modifico: </b> <?php echo $parameters['inventory']->usu_nombre?></p>
                  <p><b>Fecha de Modificacion: </b> <?php echo $parameters['inventory']->fecha_mod?></p>
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>
<?php require_once('../app/views/inc/footer.php')?>
