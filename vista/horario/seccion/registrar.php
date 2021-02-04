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
                <li class="breadcrumb-item ">Seccion</li>
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
                                        Horario De Seccion
                                    </h1>
                                </div>
                                <div class="col-12"></div>
                                <div class="col-md-12 ">

                                    <label for="dia">
                                        Dia de la Semana
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-calender">
                                            </i>
                                        </div>
                                        <select class="custom-select form-control" id="dia" name="dia">
                                        <option selected="" value="0">
                                            Seleccione....
                                        </option>

                                        <?php foreach ($GLOBALS['dias'] as $key => $value) {?>
                                        <option value="<?php echo  $value;?>">
                                            <?php echo  $value;?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    </div> 

                                </div>

                                 <div class="col-md-12 m-t-10">
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

                                <div class="col-md-6 m-t-10">

                                    <label for="materia">
                                        Materia
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-book-open-page-variant">
                                            </i>
                                        </div>
                                        <input class="form-control input-number" id="materia" name="materia" placeholder="Materia" type="text">
                                        </input>
                                    </div> 

                                </div> 

                                <div class="col-md-6 m-t-10">

                                    <label for="aula">
                                        Aula
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-animation">
                                            </i>
                                        </div>
                                        <input class="form-control input-number" id="aula" name="aula" placeholder="Aula (Opcional)" type="text">
                                        </input>
                                    </div> 

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
                                </div>   

                                <div class="col-md-6 m-t-10">
                                    <label for="seccion">
                                         Seccion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <select class="custom-select form-control" id="seccion" name="seccion">
                                        <option selected="" value="0">
                                            Seleccione....
                                        </option>
                                        <option value="1">
                                            seccion I
                                        </option>
                                        <option value="2">
                                            seccion II
                                        </option>
                                        <option value="3">
                                            seccion III
                                        </option>
                                        <option value="4">
                                            seccion IV
                                        </option>
                                    </select>
                                    </div>
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
                                        <option  value="0">
                                            Fase I
                                        </option>
                                        <option  value="0">
                                            Fase II
                                        </option>
                                    </select> 
                                    </div>
                                </div>

                                <div class="col-md-6 m-t-10">
                                    <label for="anio">
                                        Año
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                           <i class="mdi mdi-timetable">
                                           </i>
                                        </div>
                                    <select class="custom-select" id="anio" name="anio" style="width: 100%!important;">
                                        <option selected="">
                                            Selecione...
                                        </option>
                                        <option value="2010">
                                            2010
                                        </option>
                                        <option value="2011">
                                            2011
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
