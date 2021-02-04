<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include (call."Meta.php"); ?>
        <?php include (call."Link.php"); ?> 
        <?php include (call."Title.php"); ?>
        <?php include (call."Header.php"); ?>
    </head>
    <body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Inicio contenido de pagina -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="container-fluid">
               
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Registros</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo constant('URL'); ?>inicio/">Inicio</a></li>
                <li class="breadcrumb-item">Usuario</li>
                <li class="breadcrumb-item active">Registros</li>
            </ol>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>usuario/Nuevo" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                      <input type="hidden" id="modulo" name="modulo" value="usuarios" >
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Registros de Usuarios
                                    </h1>
                                </div>
                                <div class="col-12">
                                 
                                </div>



                                <div class="col-md-12 m-t-15">
                                    <label for="cedula">
                                        Cedula
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control input-number" id="cedula" name="cedula" placeholder="Cedula de identidad" type="text-center"/>
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeCedula">El campo cédula se encuentra vacío</h5>
                                    </div>
                                </div>

                                <div class="col-md-6 m-t-15">
                                    <label for="nombre">
                                       Nombre
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control mb-10" id="nombre" name="nombre" placeholder="Primer Nombre" type="text"/>
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeNombre">El campo nombre se encuentra vacío</h5>
                                    </div>
                                </div>

                                 <div class="col-md-6 m-t-15">
                                    <label for="apellido">
                                       Apellido
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control mb-10" id="apellido" name="apellido" placeholder="Primer Apellido" type="text"/>
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeApellido">El campo apellido se encuentra vacío</h5>
                                    </div>
                                </div> 

                                <div class="col-md-6 m-t-15">
                                                <div class="form-group">
                                                    <label for="correo">
                                                        Correo Electronico
                                                    </label> 
                                                    <div class="input-group">
                                                        <input class="form-control" id="correo" name="correo" placeholder="Correo" type="text">
                                                            <span class="input-group-addon text-black">
                                                                @
                                                            </span>
                                                            <select class="custom-select" id="tcorreo" name="tcorreo">
                                                                <option selected="" value="@gmail.com">
                                                                    gmail.com
                                                                </option>
                                                                <option  value="@hotmail.com">
                                                                    hotmail.com
                                                                </option>
                                                                <option value="@yahoo.com">
                                                                    yahoo.com
                                                                </option>
                                                                <option value="@yahoo.es">
                                                                    yahoo.es
                                                                </option>
                                                                <option value="@outlok.com">
                                                                    outlok.com
                                                                </option>
                                                            </select>
                                                        </input>
                                                    </div>
                                                    <div>
                                    <h5 style="color:white;" id="mensajeCorreo">El campo correo electrónico se encuentra vacío</h5>
                                    </div>
                                                </div>
                                            </div>

                                <div class="col-md-6 m-t-15">
                                    <div class="form-group">
                                        <label for="fecha_n">
                                            Fecha De Nacimiento
                                        </label>
                                        <input class="form-control" id="fecha_n" name="fecha_n" type="date">
                                        </input>
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeFecha">El campo fecha de nacimiento se encuentra vacío</h5>
                                    </div>
                                </div>

                                 <div class="col-md-6 ">
                                    <label for="contrasenia">
                                       Contraseña
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control espacios" id="contrasenia" name="contrasenia" placeholder="Contraseña" type="password">
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeContrasenia">El campo contraseña se encuentra vacío</h5>
                                    </div>
                                </div>

                                <div class="col-md-6 ">
                                    <label for="confirmar">
                                       Confirmar
                                    </label>
                                    <div class="input-group">
                                        <input class="form-control espacios" id="confirmar" name="confirmar" placeholder="Confirmar " type="password">
                                        </input>
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeConfirmar">Por favor, confirme su contraseña</h5>
                                    </div>
                                </div>
                            </div>

                            <div>
                                  <center>  <h5 style="color:white;" id="mensajeDosContra">Las contraseñas no coinciden</h5></center>
                                    </div>
                            
                            <div class="form-group row  m-t-5">
                                <div class="col-md-12 ">
                                    <label class="text-themecolor" for="rol">
                                        Rol de Usuario
                                    </label>
                                    <div class="input-group">
                                        <select class="custom-select" id="rol" name="rol" style="width: 100%;">
                                        <option value="0">
                                            Seleccione...
                                        </option>
                                        
                                        <option value="Super Usuario" >
                                           Super Usuario
                                        </option>
                                        <option value="Usuario">
                                           Usuario
                                        </option>
                                        <option value="Administrador">
                                           Administrador
                                        </option>      
                                                                
                                        </select>
                                    </div>
                                    <div>
                                    <h5 style="color:white;" id="mensajeRol">Debe seleccionar el rol del usuario</h5>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="form-group text-center m-t-10">
                                <div class="col-xs-12">
                                    <label class="text-themecolor" for="">
                                        Rol de Usuario
                                    </label>
                                    <div class="switchery-demo m-b-20">
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="id_rol" type="radio" class="custom-control-input" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Super Usuario</span>
                                            </label>

                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="id_rol" type="radio" class="custom-control-input" value="0">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Usuario</span>
                                            </label>

                                            <label class="custom-control custom-radio">
                                                <input id="radio3" name="id_rol" type="radio" class="custom-control-input" value="0">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Administrador</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center m-t-10">
                                <div class="col-xs-12">
                                    <label class="text-themecolor" for="">
                                        Estado de Usuario
                                    </label>
                                    <div class="switchery-demo m-b-20">
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="id_rol" type="radio" class="custom-control-input" value="1" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Activo</span>
                                            </label>

                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="id_rol" type="radio" class="custom-control-input" value="0">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Inactivo</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                  
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">

                              <input type="button" class="btn  btn-success m-r-10" name="guardar" id="guardar" value="Guardar"> 
                               
                               <!--      <input type="button" class="btn  btn-success m-r-10" name="imprimir" id="imprimir" value="Guardar" aria-hidden="true" data-placement="bottom" data-target="#reporte" data-toggle="modal">-->

                                    <?php include modal."permisos_usuario_modulos.php"; ?>  
                                
                                <input type="button" class="btn btn-danger" id="limpiar" name="limpiar" value="Limpiar">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
<!-- ============================================================== -->
<!-- Final contenido de pagina -->
<!-- ============================================================== -->
       <?php include (call."Footer.php"); ?> 
       <?php include (call."Script.php"); ?>
    </body>
</html>
