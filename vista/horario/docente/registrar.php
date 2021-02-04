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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item ">Horarios</li>
                <li class="breadcrumb-item ">Docente</li>
                <li class="breadcrumb-item active">Registros</li>
            </ol>
        </div> 
    </div>
    
     <div class="row"> 
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Horario Docente
                                    </h1>
                                </div>
                                <div class="col-md-12 ">
                                    <label for="docente">
                                        Nombre del Docente
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-account-box">
                                            </i>
                                        </div>
                                        <select class="custom-select form-control" id="docente" name="docente">
                                        <option selected="" value="0">
                                            Seleccione....
                                        </option>
                                        <option value="1">
                                            docente I
                                        </option>
                                        <option value="2">
                                            docente II
                                        </option>
                                        <option value="3">
                                            docente III
                                        </option>
                                        <option value="4">
                                            docente IV
                                        </option>
                                    </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-12 m-t-10 text-center">

                                    <h2 class="text-themecolor">
                                        Horas de Clase
                                    </h2>
                                </div>       

                                <div class="col-md-6 ">
                                    <label for="desde">
                                         Desde
                                    </label>
                                    <div class="input-group">
                                        
                                        <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="7:05"> <span class="input-group-addon" id="desde"> <span class="fa fa-clock-o"></span> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="hasta">
                                        Hasta
                                    </label>
                                    <div class="input-group">
                                        
                                        <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" placeholder="Opcional"> <span class="input-group-addon" id="hasta"> <span class="fa fa-clock-o"></span> </span>
                                        </div>
                                    </div> 
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
