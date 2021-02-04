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
            <h3 class="text-themecolor m-b-0 m-t-0">Reporte</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo constant('URL'); ?>inicio/">Inicio</a></li>
                <li class="breadcrumb-item">Horario de Docente</li>
                <li class="breadcrumb-item active">Reporte</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>reporte/Reporte_Aulario" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Reporte Horario de Docente
                                    </h1>
                                </div>
                               
                                <div class="col-12 ">
                                    <label for="docente">
                                        Docentes
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-account-multiple">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="docente" name="docente">
                                        <option selected="" value="0">
                                            Seleccione....
                                        </option>
                                        <option  value="0">
                                            Docente I
                                        </option>
                                        <option  value="0">
                                            Docente II
                                        </option>
                                    </select> 
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                  
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">

                                <input type="submit" class="btn  btn-success m-r-10" name="imprimir" id="imprimir" value="Imprimir">

                                <input type="button" class="btn  btn-info m-r-10" name="completo" id="completo" value="Imprimir Todos">
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
