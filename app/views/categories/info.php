<?php require_once('../app/views/inc/header.php')?>
<div class="card">
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/categories"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <p><b>Información de la Categoría</b></p>
                <hr>
                <p><b>Nombre: </b> <?php echo $parameters['categories']->nombre_categoria?></p>
                <p><b>Descripcion: </b><?php echo $parameters['categories']->descripcion?></p>
            </div>
            <div class="col-md-6">
                  <p><b>Información de registro</b></p>
                  <hr>
                  <p><b>Nombre del usuario que modifico: </b> <?php echo $parameters['categories']->usu_nombre?></p>
                  <p><b>Fecha de Modificacion: </b> <?php echo $parameters['categories']->fecha_mod?></p>
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>
<?php require_once('../app/views/inc/footer.php')?>
