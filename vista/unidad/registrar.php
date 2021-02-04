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
                <li class="breadcrumb-item">Unidad Curricular</li>
                <li class="breadcrumb-item active">Registros</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>unidad/Nuevo" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                    <input type="hidden" id="modulo" value="unidades">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Registros de Unidad Curricular
                                    </h1>
                                </div>

                                <div class="col-md-6 m-t-10">
                                    <label for="unidad">
                                        Nombre de la Unidad
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="unidad" name="nombre_unidad" placeholder="Nombre" type="text"/>

                                    </div>
                                    <div id="validNombreUnidad" style="color: red"></div>
                                </div>   

                                <div class="col-6 m-t-10">
                                    <label for="Trayecto">
                                            Trayecto
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-image-filter-none">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="Trayecto" name="trayecto">
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
                                      <div id="validTrayectoUnidad" style="color: red"></div>
                                </div>  

                                <div class="col-6 m-t-10">
                                    <label for="fase">
                                        Fase
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-arrange-bring-forward">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="fase" name="fase">
                                        <option selected="" value="0">
                                            Seleccione....
                                        </option>
                                        <option  value="1">
                                            Fase I
                                        </option>
                                        <option  value="2">
                                            Fase II
                                        </option>
                                        <option  value="3">
                                            Anual
                                        </option>
                                    </select> 
                                  
                                    </div>
                                      <div id="validFaseUnidad" style="color: red"></div>
                                </div>

                                <div class="col-6 m-t-10">
                                    <label for="horas">
                                        Horas de la Unidad
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-timer">
                                            </i>
                                        </div>
                                   <input class="form-control input-number" id="horas" name="hora_unidad" placeholder="Horas" type="text">
                                    </input>
                           
                                    </div>
                                    <div id="validHorasUnidad" style="color: red"></div>
                                </div>  

                                <div class="col-12 m-t-10">
                                    <label for="eje">
                                       Eje de Formacion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-format-list-bulleted">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="eje" name="id_eje_formacion">
                                        <option selected="" value="0">
                                            Seleccione....
                                        </option>
                                        <?php foreach($this->eje as $ejes){   ?>
                                            <option value="<?php echo $ejes["id_eje_formacion"];?> ">
                                                <?php echo $ejes["nombre_eje"];?> 
                                            </option> 
                                        <?php } ?> 
                                    </select> 
                                    </div>
                                    <div id="validEjeUnidad" style="color: red"></div>
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
