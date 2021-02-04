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
                <li class="breadcrumb-item">Aulas</li>
                <li class="breadcrumb-item active">Registros</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>aula/Consultas" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                    <input type="hidden" id="modulo" value="aulas">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Registros de Aulas
                                    </h1>
                                </div>
                                <div class="col-12"></div>
                                <!-- <div class="col-md-4" id="texto2">
                                    
                                </div>
                               <div class="col-md-4" id="texto3">
                                    
                                </div> -->
                                
                                <div class="col-md-6 ">
                                    <label for="numero">
                                        Número del Aula
                                    </label>
                                    
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-format-list-bulleted-type">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="numero" name="numero" placeholder="Número" type="number"/>
                                    </div>
                                    <div id="msjNroAula" style="color:red;"></div>
                                </div>
                                
                                <div class="col-md-6 ">
                                    <label for="nombre">
                                        Nombre del Aula
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-school">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="nombre" name="nombre_aula" placeholder="Nombre" type="text"/>
                                    </div>
                                    <div id="msjAula" style="color:red;"></div>
                                </div>

                                <div class="col-md-4  m-t-10">
                                    <label for="ubicacion">
                                        Ubicación
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-google-maps">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="ubicacion" name="ubicacion" placeholder="Ubicación" type="text"/>
                                    </div>
                                    <div id="msjUbicacion" style="color:red;"></div>
                                </div>
                                               <div class="col-md-4  m-t-10">
                                    <label for="asignacion">
                                        Asignación
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-alpha">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="asignacion" name="asignacion" placeholder="Asignación" type="text"/>
                                    </div>
                                    <div id="msjAsignacion" style="color:red;"></div>
                                </div>
                                <div class="col-md-4 m-t-10">
                                    <label for="capacidad">
                                        Capacidad
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-account-multiple-plus">
                                            </i>
                                        </div>
                                       <input class="form-control mb-10 input-number" id="capacidad" name="capacidad" placeholder="Capacidad" type="text"/>
                                    </div>
                                    <div id="msjCapacidad" style="color:red;"></div> 
                                </div>
                                            <div class="col-12" >
                                            <br>
                                                <div class="form-group">
                                                    <table style="width:100%">
                                                        <tr>
                                                            <td >
                                                    <label for="disponibilidad">
                                                       Disponibilidad del aula
                                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"  id="changeDisponibilidad">
                                            <i class="mdi mdi-plus-box">
                                            </i>
                                        </div>
                                            <select class="custom-select form-control" id="disponibilidad" style="display: block" >
                                                    <option value='0'>
                                                        Seleccione...
                                                    </option>
                                                                   <?php
                                                      foreach ($this->disponibilidades as $disponibilidad) { ?>
                                                          <option value="<?php echo $disponibilidad['id_disponibilidad'];?>">
                                                             <?php echo $disponibilidad['nombre_disponibilidad'];?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                     
                                                  </select>
                                                  
                                                  <select class="custom-select form-control" id="select-turno" style="display:none">
                                                      <option value='0'>Turno disponible</option>
                                                      <option value='1'>Mañana</option>
                                                      <option value='2'>Tarde</option>
                                                      <option value='3'>Noche</option>
                                                  </select>
                                                    <select class="custom-select form-control" id="select-dia" style="display: none">
                                                      <option value='0'>Día disponible</option>
                                                      <option value='1'>Lunes</option>
                                                      <option value='2'>Martes</option>
                                                      <option value='3'>Miércoles</option>
                                                      <option value='4'>Jueves</option>
                                                      <option value='5'>Viernes</option>
                                                      <option value='6'>Sábado</option>
                                                  </select>
                                            
                                    </div>
                                    <div style="color:red;" id="validDisponibilidades"></div>

                                             </td>
                                    
                                      <td style="text-align: center"><br>

                                                    
                                                 <input type="button" id="botonAggDispo" class="btn btn-info" value="Agregar >>">
                                    
                                         </td>
                                         <td style="text-align: center">
                                             <label for="disponibilidadesAg">
                                               Días disponibles del aula:
                                             </label><br>
                                                <div style="text-align: center;" id="disponibilidadesAgregadas"></div>
                                         </td>
                                     </tr>
                                        </table>
                                        <div id="validDisponibilidad" style="color:red"></div>
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
