<?php require_once('../app/views/inc/header.php'); ?>
<div class="card shadow">
    <div class="card-header bg-transparent">
        <h3 class="mb-0">Desactivar Usuario </h3>
    </div>
    <div class="card-header">
        <a class="text-info" href="<?php echo ROUTE_URL?>/users"><i class="fas fa-step-backward"></i>
            Regresar</a>
    </div>
    <div class="card-body">
        <form action="<?php echo ROUTE_URL?>/users/update/<?php echo $parameters['user']->idusuario?>" method="post" id="form-usuario">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="nombre">Nombre</label>
                            <input type="text" required class="form-control form-control-alternative" id="nombre" name="nombre"
                                placeholder="Nombre" value="<?php echo $parameters['user']->usu_nombre?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="apellido">Apellido</label>
                            <input type="text" required class="form-control form-control-alternative" id="apellido"
                                name="apellido" placeholder="Apellido" value="<?php echo $parameters['user']->usu_apellido?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                       <label for="">Sexo</label>
                        <div class="form-group form-inline">
                            <div class="custom-control custom-radio mb-3 form-check-inline">
                                <input name="genero" class="custom-control-input" id="hombre" value="1"
                                type="radio" required <?php echo $var = ($parameters['user']->usu_genero == 1)?'checked':''?>>
                                <label class="custom-control-label" for="hombre">Hombre</label>
                            </div>
                            <div class="custom-control custom-radio mb-3 form-check-inline">
                                <input name="genero" class="custom-control-input" id="mujer" value="2"
                                type="radio" required <?php echo $var = ($parameters['user']->usu_genero == 2)?'checked':''?>>
                                <label class="custom-control-label" for="mujer">Mujer</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="dui">Numero de DUI</label>
                            <input type="text" required class="form-control form-control-alternative" id="dui" name="dui"
                                placeholder="DUI" value="<?php echo $parameters['user']->usu_dui?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="usuario">Nombre de Usuario</label>
                            <input type="text" required class="form-control form-control-alternative" id="user" name="user"
                                placeholder="Usuario" value="<?php echo $parameters['user']->usu_usuario?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Tipo de Usuario</label>
                        <div class="form-group form-inline">
                            <div class="custom-control custom-radio mb-3 form-check-inline">
                                <input name="user_type" class="custom-control-input" id="estandar" value="1"
                                    type="radio" required <?php echo $var = ($parameters['user']->usu_tipo == 1)?'checked':''?>>
                                <label class="custom-control-label" for="estandar">Estandar</label>
                            </div>
                            <div class="custom-control custom-radio mb-3 form-check-inline">
                                <input name="user_type" class="custom-control-input" id="admin" value="2"
                                type="radio" required <?php echo $var = ($parameters['user']->usu_tipo == 2)?'checked':''?>>
                                <label class="custom-control-label" for="admin">Admin</label>
                            </div>
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
