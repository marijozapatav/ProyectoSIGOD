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
                                        Actualizar Docente
                                    </h1>
                                </div> 
                                <form action="<?php echo constant('URL'); ?>" enctype="multipart/form-data" id="formulario" method="POST" name="formulario" class="tab-wizard wizard-circle">
                                    <!-- Step 1 -->
                                    <h6>
                                        Datos Personales
                                    </h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <center>
                                                    <div id="preview" style="margin-top: 10px;">
                                                        <img class="img-circle" src="<?php echo constant('URL')?>config/img/users/user-3.png" width="100">
                                                        </img>
                                                    </div>
                                                    <h4 class="card-title m-t-10 text-themecolor" style="margin-top: 30px;">
                                                        Foto de perfil
                                                    </h4>
                                                </center>
                                                <label for="foto">
                                                    Subir imagen
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control bg-3" id="foto" name="foto" type="file">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-t-15">
                                                <label for="cedula">
                                                    Cedula
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control input-number" id="cedula" name="cedula" placeholder="Cedula de identidad" type="text-center"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-t-15">
                                                <label for="nombre1">
                                                    Primer Nombre
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="nombre1" name="prinombre" placeholder="Nombre" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-t-15">
                                                <label for="segnombre">
                                                    Segundo Nombre
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="segnombre" name="segnombre" placeholder="Nombre" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-t-15 m-b-20">
                                                <label for="apellido1">
                                                    Primer Apellido
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="apellido1" name="priapellido" placeholder="Apellido" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 m-t-15 m-b-20">
                                                <label for="apellido2">
                                                    Segundo Apellido
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control mb-10" id="apellido2" name="segapellido" placeholder="Apellido" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>
                                        Informacion de Contacto
                                    </h6>
                                    <section>
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
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="telefono">
                                                        Nro Telefono
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control espacios input-number" id="telefono" name="telefono" placeholder="Telefono" type="text">
                                                        </input>
                                                    </div>
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
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="municipio">
                                                        Municipio
                                                    </label>
                                                    <div class="input-group">
                                                        <select class="custom-select" id="municipio" name="municipio" style="width: 100%;">
                                                        <option value="">
                                                            Seleccione...
                                                        </option>
                                                        <option>
                                                            1
                                                        </option>
                                                                
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>
                                        Informacion Laboral
                                    </h6>
                                    <section>
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
                                                        <option value="1">
                                                            Instructor
                                                        </option>
                                                        <option value="2">
                                                            Asistente
                                                        </option>
                                                        <option value="3">
                                                            Agregado
                                                        </option>
                                                        <option value="4">
                                                            Asociado
                                                        </option>
                                                        <option value="5">
                                                            Titular
                                                        </option>
                                                    </select>
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
                                                        <option value="Dedicacion Exclusiva">
                                                            D. Exc &nbsp;(Dedicacion Exclusiva)
                                                        </option>
                                                        <option value="Tiempo Completo">
                                                            TC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            (Tiempo Completo)
                                                        </option>
                                                        <option value="Medio Tiempo">
                                                            MT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            (Medio Tiempo)
                                                        </option>
                                                        <option value="Tiempo Convencional">
                                                            T. CNV &nbsp;(Tiempo Convencional)
                                                        </option>
                                                    </select>
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
                                                        <option value="1">
                                                            Fijo
                                                        </option>
                                                        <option value="2">
                                                            Contratado
                                                        </option>
                                                        <option value="3">
                                                            Necs. Serv.
                                                        </option>
                                                        <option value="4">
                                                            Suplente
                                                        </option>
                                                    </select>
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
                                                        <option value="1">
                                                            Credenciales  
                                                        </option>
                                                        <option value="2">
                                                            Oposición
                                                        </option>
                                                        
                                                    </select>
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
                                                        <option value="Informática">
                                                            Informática 
                                                        </option>
                                                        <option value="Geografía">
                                                           Geografía 
                                                        </option>
                                                        <option value="Sistemas">
                                                           Sistemas 
                                                        </option>
                                                        <option value="Computación">
                                                            Computación
                                                        </option>
                                                        <option value="Ingles">
                                                            Ingles
                                                        </option>
                                                        <option value="Matemática">
                                                            Matemática
                                                        </option>
                                                        <option value="Deporte">
                                                            Deporte
                                                        </option>
                                                        <option value="Administración">
                                                            Administración
                                                        </option>
                                                    </select>
                                                </div>
                                            </div> 

                                            
                                        </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>
                                        Ingreso
                                    </h6>
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fecha">
                                                        Fecha De Ingreso
                                                    </label>
                                                    <input class="form-control" id="fecha" name="fecha" type="date">
                                                    </input>
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
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="experiencia">
                                                       Experiencia
                                                    </label>
                                                    <select class="custom-select form-control" id="categoria" name="categoria">
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
                                                </div>
                                            </div>
                                            <div class="col-12" >
                                                <div class="form-group">
                                                    <input type="button" class="btn  btn-success m-r-10" name="boton" id="boton" value="Titulos">
                                                </div>
                                    
                                            </div>
                                            <div class="col-12" id="texto">
                                    
                                            </div>
                                        </div>
                                    </section>
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
