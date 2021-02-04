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
            <h3 class="text-themecolor m-b-0 m-t-0">Seguridad</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Seguridad</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   
                                <div class="vtabs ">
                                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#rol" role="tab"><span><i class="ti-home"></i></span>&nbsp;Roles</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#permisos" role="tab"><span><i class="ti-user"></i></span>&nbsp;Permisos</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#modulos" role="tab"><span><i class="ti-email"></i></span>&nbsp;Modulos</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="rol" role="tabpanel">
                                            <div class="p-20">
                                                <h3>Best Clean Tab ever</h3>
                                                <h4>you can use it with the small code</h4>
                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane  p-20" id="permisos" role="tabpanel">2</div>
                                        <div class="tab-pane p-20" id="modulos" role="tabpanel">3</div>
                                    </div>
                                </div>
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
