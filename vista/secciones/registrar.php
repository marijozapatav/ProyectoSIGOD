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
                <li class="breadcrumb-item">Secciones</li>
                <li class="breadcrumb-item active">Registros</li>
            </ol> 
        </div>
    </div> 
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>secciones/Nuevo" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                    <input type="hidden" name="modulo" id="modulo" value="secciones">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Registros de Secciones
                                    </h1>
                                </div>
                                <div class="col-12"></div>
                                <div class="col-md-6 ">
                                    <label for="trayecto">
                                        Trayecto
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-image-filter-none">
                                            </i>
                                        </div>
                                        <select class="custom-select form-control" id="trayecto" name="id_trayecto">
                                            <option selected="" value="0">
                                                Seleccione....
                                            </option>
                                            <?php foreach($this->trayecto as $trayectos){   ?>
                                            <option value="<?php echo $trayectos["id_trayecto"];?> ">
                                                <?php echo $trayectos["nombre_trayecto"];?> 
                                            </option> 
                                            <?php } ?> 
                                        </select>

                                    </div>
                                    <div id="msjTrayecto" style="color:red;"></div>
                                </div>

                                <div class="col-md-6 ">
                                    <label for="nombre">
                                        Nombre de la Seccion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <input class="form-control" id="nombre" name="codigo_seccion" placeholder="Nombre" type="text">
                                        </input>
                                    </div>
                                    <div id="msjSeccion" style="color:red;"></div>
                                </div>
                                
                                
                            </div>
                            
                            <div class="col-12"></div>
                  
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">

                                <input type="button" class="btn  btn-success m-r-10" name="guardar" id="guardar" value="Guardar">

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
