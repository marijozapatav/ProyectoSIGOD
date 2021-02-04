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
                        <h3 class="text-themecolor m-b-0 m-t-0">
                            Registros
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo constant('URL'); ?>inicio/">
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Aulas
                            </li>
                            <li class="breadcrumb-item active">
                                Registros
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block wizard-content">
                                <div class="card text-center">
                                    <h1 class="text-themecolor">
                                        Registros de Docente
                                    </h1>
                                </div>
                                <form action="<?php echo constant('URL'); ?>docente/Consultas" enctype="multipart/form-data" id="formulario" method="POST" name="formulario" >
                                    <input type="hidden" id="modulo" value="docentes">

                                   <center>

                                   <table>
                                       <tr>
                                           <td style="text-align: center">
                                             <span id="step-1">1</span>
                                             <br><br>
                                             <h6>Datos personales</h6>
                                           </td>
                                           <td style="text-align: center">
                                             <h3><span id="lineas1">-----</span></h3>
                                           </td>
                                           <td style="text-align: center">
                                             <span id="step-2">2</span>
                                             <br><br>
                                             <h6>Información de contacto</h6>
                                           </td>
                                           <td style="text-align: center">
                                             <h3><span id="lineas2">-----</span></h3>
                                           </td>
                                            <td style="text-align: center">
                                             <span id="step-3">3</span>
                                             <br><br>
                                             <h6>Información laboral</h6>
                                           </td>
                                           <td style="text-align: center">
                                             <h3><span id="lineas3">-----</span></h3>
                                           </td>
                                            <td style="text-align: center">
                                             <span id="step-4">4</span>
                                             <br><br>
                                             <h6>Ingreso</h6>
                                           </td>
                                       </tr>
                                   </table>
</center>
                                    <!-- Step 1 -->
                                    
                                    <section id="stepN1">
                                        <div class="row">
      
                                            <div class="col-md-12 m-t-15">
                                                <label for="cedula">
                                                    Cedula
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control input-number" id="cedula" name="cedula" placeholder="Cedula de identidad" type="text-center"/>
                                                </div>
                                                <div id="validCedula" style="color:red;"></div>
                                            </div>
                                            <div class="col-md-6 m-t-15">
                                                <label for="nombre1">
                                                    Primer Nombre
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="nombre1" name="prinombre" placeholder="Nombre" type="text"/>
                                                </div>
                                                <div id="validNombre1" style="color:red;"></div>
                                            </div>
                                            <div class="col-md-6 m-t-15">
                                                <label for="segnombre">
                                                    Segundo Nombre
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="segnombre" name="segnombre" placeholder="Nombre" type="text"/>
                                                </div>
                                                <div id="validNombre2" style="color:red;"></div>
                                            </div>
                                            <div class="col-md-6 m-t-15 m-b-20">
                                                <label for="apellido1">
                                                    Primer Apellido
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="apellido1" name="priapellido" placeholder="Apellido" type="text"/>
                                                </div>
                                                <div id="validAp1" style="color:red;"></div>
                                            </div>
                                            <div class="col-md-6 m-t-15 m-b-20">
                                                <label for="apellido2">
                                                    Segundo Apellido
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="apellido2" name="segapellido" placeholder="Apellido" type="text"/>
                                                </div>
                                                <div id="validAp2" style="color:red;"></div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <section id="stepN2" style="display:none;">
                                        <div class="row">
                                            <div class="col-md-12">
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
                                                                <option selected="" value="@hotmail.com">
                                                                    hotmail.com
                                                                </option>
                                                                <option value="@gmail.com">
                                                                    gmail.com
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
                                                     <div id="validCorreo" style="color:red"></div>
                                                </div>
                                               
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="telefono">
                                                        Número de Teléfono
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control espacios input-number" id="telefono" name="telefono" placeholder="Telefono" type="text">
                                                        </input>
                                                    </div>
                                                    <div id="validTlf" style="color:red"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="direccion">
                                                        Direccion
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control " id="direccion" name="direccion" placeholder="direccion" type="text">
                                                        </input>
                                                    </div>
                                                    <div id="validDireccion" style="color:red"></div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="municipio">
                                                        Municipio
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="custom-select" id="municipio" name="municipio" style="width: 100%;">
                                                        <option value="0">
                                                            Seleccione...
                                                        </option>
                                                       <?php
                                                      foreach ($this->municipios as $mun) { ?>
                                                          <option value="<?php echo $mun['id_municipio'];?>">
                                                             <?php echo $mun['nombre'];?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                                
                                                        </select>
                                                    </div>
                                                    <div id="validMunicipio" style="color:red"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <section id="stepN3" style="display:none;">
                                        <div class="row">
                                            
                                            
                                            <div class="col-md-12" >
                                                <div class="form-group">
                                                    <label for="categoria">
                                                        Categoria
                                                    </label>
                                                    <select class="custom-select form-control" id="categoria" name="categoria">
                                                        <option selected="" value="0">
                                                            Seleccione....
                                                        </option>
                                                       <?php
                                                      foreach ($this->categorias as $cate) { ?>
                                                          <option value="<?php echo $cate['id_categoria'];?>">
                                                             <?php echo $cate['nombre_categoria'];?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                    </select>
                                                    <div style="color:blue" id="validCategoria"></div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dedicacion">
                                                        Dedicacion
                                                    </label>
                                                    <select class="custom-select form-control" id="dedicacion" name="dedicacion">
                                                        <option selected="" value="0">
                                                            Seleccione....
                                                        </option>
                                                           <?php
                                                      foreach ($this->dedicaciones as $ded) { ?>
                                                          <option value="<?php echo $ded['id_dedicacion'];?>">
                                                             <?php echo $ded['nombre_dedicacion']." (".$ded['abreviatura'].")";?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                    </select>
                                                    <div style="color:red" id="validDedicacion"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="relacion">
                                                        Relacion Laboral
                                                    </label>
                                                    <select class="custom-select form-control" id="relacion" name="relacion">
                                                        <option selected="" value="0">
                                                            Seleccione....
                                                        </option>
                                                  <?php
                                                      foreach ($this->relacionL as $rel) { ?>
                                                          <option value="<?php echo $rel['id_relacion_laboral'];?>">
                                                             <?php echo $rel['nombre_relacion'];?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                    </select>
                                                    <div style="color:red" id="validRelacion"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="concurso">
                                                       Concurso
                                                    </label>
                                                    <select class="custom-select form-control" id="concurso" name="concurso">
                                                        <option selected="" value="0">
                                                            Seleccione....
                                                        </option>
                 <?php
                                                      foreach ($this->concurso as $concu) { ?>
                                                          <option value="<?php echo $concu['id_concurso'];?>">
                                                             <?php echo $concu['tipo_concurso']." (año ".$concu['anio_concurso'].")";?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                        
                                                    </select>
                                                    <div style="color:red" id="validConcurso"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="areas">
                                                       Areas
                                                    </label>
                                                    <select class="custom-select form-control" id="areas" name="areas">
                                                        <option selected="" value="0">
                                                            Seleccione....
                                                        </option>
                                                  <?php
                                                      foreach ($this->areas as $are) { ?>
                                                          <option value="<?php echo $are['id_area'];?>">
                                                             <?php echo $are['nombre_area'];?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                    </select>
                                                    <div style="color:red" id="validAreas"></div>
                                                </div>
                                            </div> 

                                            
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <section id="stepN4" style="display:none;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fecha">
                                                        Fecha De Ingreso
                                                    </label>
                                                    <input class="form-control" id="fecha" name="fecha" type="date">
                                                    </input>
                                                    <div style="color:red" id="validFecha"></div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="traslado">
                                                        Post Traslado
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control " id="traslado" name="traslado" placeholder="Traslado" type="text">
                                                        </input>
                                                        
                                                    </div>
                                                    <div style="color:red" id="validTraslado"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="experiencia">
                                                       Experiencia
                                                    </label>
                                                    <select class="custom-select form-control" id="experiencia" name="categoria">
                                                        <option selected="" value="0">
                                                            Seleccione....
                                                        </option>
                                                        <option value="Baja">
                                                            Baja (Nuevo)
                                                        </option>
                                                        <option value="Media">
                                                            Media
                                                        </option>
                                                         <option value="Alta">
                                                            Alta
                                                        </option>
                                                    </select>
                                                    <div style="color:red" id="validExperiencia"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                           <label for="tituloPregrado">
                                                        Título de pregrado
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control " id="pregrado" name="pregrado" placeholder="Título de pregrado" type="text">
                                                      
                                            </div>
                                            <div style="color:red" id="validPregrado"></div>
                                          </div>
                                            <div class="col-12" >
                                                <div class="form-group">
                                                    <table style="width:100%">
                                                        <tr>
                                                            <td style="text-align: center">
                                                    <label for="titulos">
                                                       Titulos
                                                    </label>
                                                  <select class="custom-select form-control" id="titulos">
                                                    <option value='0'>
                                                        Seleccione...
                                                    </option>
                                                                   <?php
                                                      foreach ($this->titulos as $tit) { ?>
                                                          <option value="<?php echo $tit['id_titulo'];?>">
                                                             <?php echo $tit['nombre_titulo'];?> 
                                                          </option>
                                                     <?php }

                                                       ?>
                                                      
                                                  </select>

                                             </td>
                                    
                                      <td style="text-align: center"><br>

                                                    
                                                 <input type="button" id="boton" class="btn btn-success" value="Agregar >>">
                                    
                                         </td>
                                         <td style="text-align: center">
                                             <label for="titulosAg">
                                                 Títulos adicionales del docente
                                             </label><br>
                                                <div style="text-align: center;" id="titulosAgregados"></div>
                                         </td>
                                     </tr>
                                        </table>
                                        <div id="validTitulos" style="color:red"></div>
                                        </div>
                                    </div>

                                    </section>

                                    <div style="text-align: right;">
                                        <table>
                                            <tr>
                                                <td>
                                         <input type="button" class="btn  btn-info"  name="boton" id="botonAnterior" value="Anterior" style="display:none">
                                     </td>
                                     <td>
                                          <input type="button" class="btn  btn-info" name="boton" id="botonSiguiente" value="Siguiente">
                                      </td>
                                      <td>
                                          <input type="button" class="btn  btn-info" name="boton" id="enviar" value="Guardar" style="display:none;">
                                      </td>
                                      </tr>
                                      </table>
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
