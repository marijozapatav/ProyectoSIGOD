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
                <li class="breadcrumb-item">Cohorte</li>
                <li class="breadcrumb-item active">Registros</li>
            </ol>
        </div> 
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>cohorte/Nuevo" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                    <input type="hidden" id="modulo" value="cohorte">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Registros de Cohorte
                                    </h1>
                                </div>
                                <div class="col-12"></div>
                                <div class="col-md-6 m-t-10">
                                    <label for="unidad">
                                        Número del Cohorte
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="nombre" name="cohorte" placeholder="Número de cohorte" type="number"/>
                                    </div>
                                    <div id="validNombreCohorte" style="color:red"></div>
                                </div>   

                                <div class="col-md-6 m-t-10">
                                                <div class="form-group">
                                                    <label for="fecha">
                                                        Fecha 
                                                    </label>
                                                    <input class="form-control" id="fecha" name="fecha" type="date">
                                                <div id="validFechaCohorte" style="color:red"></div>
                                                </div>

                                </div>

                                

                                <div class="col-md-12 m-t-10">
                                    <div class="form-group">
                                        <label for="descripcion">
                                            Descripcion
                                        </label>
                                        <textarea class="form-control" cols="5" id="descripcion" name="descripcion" rows="5"></textarea>
                                      <div id="validDescripcionCohorte" style="color:red"></div>
                                    </div>

                                </div>      
                                
                            </div>
                            
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
