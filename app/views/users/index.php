<?php require_once('../app/views/inc/header.php'); ?>

<div class="card shadow">
    <div class="card-header bg-transparent">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-0 text-blue"><i class="fas fa-users"></i> Usuarios </h3>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-icon btn-2 btn-sm btn-primary" type="button" data-toggle="modal"
                    data-target="#new_user">
                    <i class="fas fa-user-plus"></i>
                </button>
                <button class="btn btn-icon btn-2 btn-sm btn-default" type="button" data-toggle="modal"
                    data-target="#disable_users">
                    <i class="fas fa-trash-restore"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Tipo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($parameters['users'] as $key => $user):?>
                    <tr>
                        <td>
                            <?php echo $user->usu_nombre . ' ' . $user->usu_apellido?>
                        </td>
                        <td>
                            <?php echo $var = ($user->usu_genero == 1 )?'Hombre' : 'Mujer' ?>
                        </td>
                        <td>
                            <?php echo $user->usu_usuario?>
                        </td>
                        <td>
                            <?php echo $var = ($user->usu_tipo == 2)?'Administrador':'Estandar'?>
                        </td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item"
                                        href="<?php echo ROUTE_URL?>/users/update/<?php echo $user->idusuario?>"><i
                                            class="fas fa-user-edit"></i>Actualizar</a>
                                    <a class="dropdown-item"
                                        href="<?php echo ROUTE_URL?>/users/disable/<?php echo $user->idusuario?>"><i
                                            class="fas fa-minus-circle"></i> Desactivar</a>
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
<div class="modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus"></i> Nuevo usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Formulario nuevo usuario -->
            <form action="<?php echo ROUTE_URL?>/users/add_user" method="post" id="form-usuario">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="nombre">Nombre</label>
                                <input type="text" class="form-control form-control-alternative" id="nombre"
                                    name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="apellido">Apellido</label>
                                <input type="text" class="form-control form-control-alternative" id="apellido"
                                    name="apellido" placeholder="Apellido">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <label for="">Sexo</label>
                            <div class="form-group form-inline">
                                <div class="custom-control custom-radio mb-3 form-check-inline">
                                    <input name="genero" class="custom-control-input" id="hombre" value="1"
                                        type="radio">
                                    <label class="custom-control-label" for="hombre">Hombre</label>
                                </div>
                                <div class="custom-control custom-radio mb-3 form-check-inline">
                                    <input name="genero" class="custom-control-input" id="mujer" value="2" type="radio">
                                    <label class="custom-control-label" for="mujer">Mujer</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="dui">Numero de DUI</label>
                                <input type="text" class="form-control form-control-alternative" id="dui" name="dui"
                                    placeholder="DUI">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="user">Nombre de Usuario</label>
                                <input type="text" class="form-control form-control-alternative" id="user" name="user"
                                    placeholder="Usuario">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <label for="">Tipo de Usuario</label>
                            <div class="form-group form-inline">
                                <div class="custom-control custom-radio mb-3 form-check-inline">
                                    <input name="user_type" class="custom-control-input" id="estandar" value="1"
                                        type="radio">
                                    <label class="custom-control-label" for="estandar">Estandar</label>
                                </div>
                                <div class="custom-control custom-radio mb-3 form-check-inline">
                                    <input name="user_type" class="custom-control-input" id="admin" value="2"
                                        type="radio">
                                    <label class="custom-control-label" for="admin">Admin</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <label for="pass">Contraseña</label>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-alternative" id="pass"
                                    name="pass" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <label for="pass2">Repetir Contraseña</label>
                                <input type="password" class="form-control form-control-alternative" id="pass2"
                                    name="pass2" placeholder="Repetir Contraseña">
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

<!-- Usuarios desactivados -->
<div class="modal fade" id="disable_users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-minus"></i> Usuarios desactivados
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tabla de usuarios desactivados -->
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Tipo</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Wilber Méndez
                                </td>
                                <td>
                                    Hombre
                                </td>
                                <td>
                                    tmsh
                                </td>
                                <td>
                                    Administrador
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-icon btn-2 btn-sm btn-success" type="button"> <i
                                            class="fas fa-plus-circle"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Yanci Martínez
                                </td>
                                <td>
                                    Mujer
                                </td>
                                <td>
                                    yanci
                                </td>
                                <td>
                                    Estandar
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-icon btn-2 btn-sm btn-success" type="button"> <i
                                            class="fas fa-plus-circle"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>




<?php require_once('../app/views/inc/footer.php'); ?>
