<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include (call."Meta.php"); ?>
        <?php include (call."Link.php"); ?>
        <?php include (call."Title.php"); ?>
        <div class="preloader">
            <svg class="circular" viewbox="25 25 50 50">
                <circle class="path" cx="50" cy="50" fill="none" r="20" stroke-miterlimit="10" stroke-width="2">
                </circle>
            </svg> 
        </div> 
    </head>
    <body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Inicio contenido de pagina -->
<!-- ============================================================== -->
 <div id="main-wrapper" style="background-image: url(<?php echo constant('URL')?>config/img/background/fond.jpg);background-size: cover; height: 600px;"> 

<header class="topbar" style="height: 50px;">
    
</header>

    <div class="container-fluid" >

    
    <div class="row">
        <div class="col-6">
            <div class="card" style="border: 2px solid gray;">
                <div class="card-block" >
                    <div class="panel-heading text-center" style="background: transparent;">
            <img src="<?php echo constant('URL')?>config/img/web/uptaeb.jpg" width="80"> 
        </div>
                </div>

                <form action="<?php echo constant('URL'); ?>inicio" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                    <input type="hidden" id="modulo" name="modulo" value="login">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                
                                <div class="col-md-12 ">
                                    <label for="cedula">
                                        Cedula
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-account-star">
                                            </i>
                                        </div>
                                        <input type="text"  class="form-control input-number" id="cedula" name="cedula" placeholder="Cedula">
                                    </div>
                                        <div id="mensajeCedula" style="color:red;">
                                    </div>
                                </div>
                                <div class="col-md-12 m-t-10">
                                    <label for="password">
                                        Contraseña
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <a href="javascript:void(0);" type="button" class="btn" style="margin: 0px;padding: 0px;" id="mostrar">
                                                <img id="candado" src="<?php echo constant('URL').web; ?>mostrar.png" style="width: 15px; height: 15px;">
                                            </a>
                                        </div>
                                        <input type="password" class="form-control espacios" name="password" id="password" placeholder="Contraseña">
                                    </div> 
                                        <div id="mensajeClave" style="color:red;">
                                    
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-12 text-center">
                                <a href="#myModal" role="button" class="btn" data-toggle="modal">
                                    <label class="text-themecolor">He olvidado mi contraseña</label>
                                </a>

                                <?php include privado."recuperar_contraseña.php"; ?>
                            </div>
                  
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">

                                <input type="button" class="btn  btn-success m-r-10" name="guardar" id="guardar" value="Entrar">

                                <input type="button" class="btn btn-danger" id="limpiar" name="limpiar" value="Limpiar">

                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>

    </div>

    </div>

<!-- ============================================================== -->
<!-- Final contenido de pagina -->
<!-- ============================================================== -->
       <!-- footer -->
<!-- ============================================================== -->
    <footer class="footer" style="margin-left: -7%;">
        <a href="<?php echo X ?>" style="margin-left: 25px;">&copy;</a> 2020-2021 Sistema de Organizacion Docente
    </footer>
<!-- ============================================================== -->
<!-- final footer -->
<!-- ============================================================== -->

</div>
       <?php include (call."Script.php"); ?>
    </body>
</html>
