<?php require_once('../app/views/inc/header.php')?>
<div class="card">
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/users"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
               <?php
                  if($parameters['user']->usu_genero == 1) {
                     $sexo = 'Hombre';
                  }elseif ($parameters['user']->usu_genero == 2) {
                     $sexo = 'Mujer';
                  }
                ?>
                <p><b>Información del Usuario</b></p>
                <hr>
                <p><b>Nombre: </b> <?php echo $parameters['user']->usu_nombre. " ". $parameters['user']->usu_apellido?></p>
                <p><b>Genero: </b> <?php echo $sexo ?></p>
                <p><b>DUI: </b><?php echo $parameters['user']->usu_dui?></p>
                <p><b>Usuario: </b><?php echo $parameters['user']->usu_usuario?></p>
            </div>
            <div class="col-md-6">
                  <p><b>Información de registro</b></p>
                  <hr>
                  <p><b>Nombre del usuario que modifico: </b> <?php echo $parameters['user']->usu_nombre?></p>
                  <p><b>Fecha de Modificacion: </b> <?php echo $parameters['user']->fecha_mod?></p>
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>
<?php require_once('../app/views/inc/footer.php')?>
