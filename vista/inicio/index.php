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
                            Pnf Informatica
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Pnf Informatica
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="text-center m-t-10 m-b-10">
                                <h1 class="text-themecolor">
                                    Bienvenido al Sistema de Organizacion Docente
                                </h1>
                            </div>
                            <div class="carousel slide" data-ride="carousel" id="slider">
                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#slider">
                                    </li>
                                    <li data-slide-to="1" data-target="#slider">
                                    </li>
                                    <li data-slide-to="2" data-target="#slider">
                                    </li>
                                </ol>
                                <div class="carousel-inner flex-row">
                                    <div class="carousel-item flex-column active">
                                        <img alt="slide#1" class="d-block img-fluid" src="<?php echo constant('URL').web; ?>slide1.jpg">
                                            <div class="carousel-caption">
                                                <h2>
                                                    <span class="badge badge-pill badge-default">  Administracion De Horarios
                                                    </span>
                                                </h2>
                                            </div>
                                        </img>
                                    </div>
                                    <div class="carousel-item flex-column">
                                        <img alt="slide#2" class="d-block img-fluid" src="<?php echo constant('URL').web; ?>slide2.jpg">
                                            <div class="carousel-caption">
                                                <h2>
                                                    <span class="badge badge-pill badge-default">  Administracion de Informacion
                                                    </span>
                                                </h2>
                                            </div>
                                        </img>
                                    </div>
                                    <div class="carousel-item flex-column">
                                        <img alt="slide#3" class="d-block img-fluid" src="<?php echo constant('URL').web; ?>slide3.jpg">
                                            <div class="carousel-caption">
                                                <h2>
                                                    <span class="badge badge-pill badge-default"> Administracion de Docentes
                                                    </span>
                                                </h2>
                                            </div>
                                        </img>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" data-slide="prev" href="#slider">
                                    <span aria-hidden="true" class="carousel-control-prev-icon">
                                    </span>
                                    <span class="sr-only">
                                        Anterior
                                    </span>
                                </a>
                                <a class="carousel-control-next" data-slide="next" href="#slider">
                                    <span aria-hidden="true" class="carousel-control-next-icon">
                                    </span>
                                    <span class="sr-only">
                                        Sigiente
                                    </span>
                                </a>
                            </div>
                            <div class="card-block">
                                
                                    <div class="card">
                                        <div class="card-block p-b-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs customtab" role="tablist"s>
                                                <li class="nav-item" style="width: 33.33%;">
                                                    <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                                        <span class="hidden-sm-up">
                                                            <i class="ti-home">
                                                            </i>
                                                        </span>
                                                        <span class="hidden-xs-down">
                                                            Introduccion
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" style="width: 33.33%;">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                                        <span class="hidden-sm-up">
                                                            <i class="ti-user">
                                                            </i>
                                                        </span>
                                                        <span class="hidden-xs-down">
                                                            Ayuda
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" style="width: 33.33%;">
                                                    <a class="nav-link" data-toggle="tab" href="#messages2" role="tab">
                                                        <span class="hidden-sm-up">
                                                            <i class="ti-email">
                                                            </i>
                                                        </span>
                                                        <span class="hidden-xs-down">
                                                            Contactos
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home2" role="tabpanel">
                                                    <div class="p-20">
                                                        <h3>
                                                            Sistema de Informacion
                                                        </h3>
                                                        <h4>
                                                            Horarios y Organizacion Docente
                                                        </h4>
                                                        <p>
                                                            Sistema para el manejo de la informacion de horarios y organizacion del personal docente en el PNF de Informatica
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-20" id="profile2" role="tabpanel">
                                                    <div class="p-20">
                                                        <h3>
                                                            En Construccion
                                                        </h3>
                                                        
                                                        <p>
                                                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-20" id="messages2" role="tabpanel">
                                                    <div class="p-20">
                                                        <h3>
                                                            Informacion de Contacto
                                                        </h3>
                                                        
                                                       <p class="m-t-10">
                                                        <i class="mdi mdi-google-maps"></i> 
                                                        Av. La Salle con Av. Los Horcones. Barquisimeto - Lara.
                                                        </p>

                                                        <p>
                                                            <i class="mdi mdi-phone-in-talk"></i> 
                                                        Tlf: ####-###-####
                                                        </p>

                                                        <p>
                                                            <i class="mdi mdi-email-outline"></i> 
                                                            Email: <a href="#">ejemplo.com</a>
                                                        </p>
                                                        <p>
                                                            <i class="mdi mdi-facebook-box"></i> 
                                                            Facebook: <a href="https://es-la.facebook.com/pages/biz/Universidad-Politecnica-Territorial-Andres-Eloy-Blanco-UPTAEB-1649730975240087/" target="_blank">Facebook.com/UptdeLara</a>
                                                        </p>

                                                        <p>
                                                            <i class="mdi mdi-instagram"></i> 
                                                            Instagram: <a href="" target="_blank">Facebook.com</a>
                                                        </p>

                                                        <p>
                                                            <i class="mdi mdi-twitter"></i> 
                                                            Twitter: <a href="" target="_blank">Facebook.com</a>
                                                        </p>
                                                    </div>
                                                </div>
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
        </div>
    </body>
</html>
