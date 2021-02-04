 <!-- ============================================================== -->
    <!-- Circulo mientras carga la pagina -->
    <!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewbox="25 25 50 50">
        <circle class="path" cx="50" cy="50" fill="none" r="20" stroke-miterlimit="10" stroke-width="2">
        </circle>
    </svg> 
</div>  
    
<div id="main-wrapper"> 
        
<header class="topbar" style="height: 50px;">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <li class="nav-item" style="margin-top: -15px;">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-menu">
                        </i>
                    </a> 
                </li>
                <li class="nav-item" style="margin-top: -15px;">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-arrow-left-circle">
                        </i>
                    </a>
                </li>
                <li class="nav-item dropdown" style="margin-top: -15px;">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" style="margin-top: -15px;">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Aula Actualizada</h5> <span class="mail-desc">el aula esta disponible</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Actualizacion de Horario</h5> <span class="mail-desc">el horario fue actualizado</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Seguridad</h5> <span class="mail-desc">Su contraseña ha expirado</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Ver Notificasiones </strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                </li>
            </ul>  
            <!-- ============================================================== -->
            <!-- Perfil y buscar  -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0" >
                
                <li class="nav-item dropdown">
                    <!-- <a href="" class="nav-link dropdown-toggle text-muted waves-effect waves-dark">
                        <i class="ti-settings" style="width: 40px; height: 40px">
                        </i>
                    </a> -->
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle   " data-toggle="dropdown" href="" style="width: 40px; margin-top: -15px;">
                        <i class="ti-settings">
                        </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY" style="margin-top: -15px;">
                        <ul class="dropdown-user">
                            
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>login/Salir">
                                <i class="fa fa-power-off">
                                </i>
                                Cerrar Sesión
                            </a>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>

     

<aside class="left-sidebar">
    <div class="scroll-sidebar" style="margin-top: -15px;">
        <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo constant('URL')?>config/img/users/user-3.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Usuario<span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> Mi Perfil</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Notificariones</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i>Configuracion</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Salir</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Inicio
                </li>
                <li>
                    <a href="<?php echo constant('URL');?>inicio/" style="color: #BBC5CE;">
                        <i class="mdi mdi-home">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Inicio
                        </span>
                    </a>
                </li>
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Usuarios
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#" style="color: #BBC5CE;">
                        <i class="mdi mdi-account-settings-variant">
                        </i>
                        
                        <span class="hide-menu m-l-20 white">
                            Usuarios
                        </span> 
                       
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>usuario/Registros/" style="color: #BBC5CE;" >
                                Registrar  
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>usuario/Consultas/" style="color: #BBC5CE;">
                                Consultar  
                            </a>
                        </li>
                    </ul>
                </li>
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Secciones
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-view-dashboard">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Secciones
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>secciones/Registros/" style="color: #BBC5CE;">
                                Crear
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>secciones/Consultas/" style="color: #BBC5CE;">
                                Consultar
                            </a>
                        </li>
                    </ul>
                </li>
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Docentes
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-account-multiple">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Docentes
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>docente/Registros/" style="color: #BBC5CE;" >
                                Registrar  
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>docente/Consultas/" style="color: #BBC5CE;">
                                Consultar  
                            </a>
                        </li>
                    </ul>
                </li>
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Aulas
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-school">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Aulas
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>aula/Registros/" style="color: #BBC5CE;">
                                Registrar
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>aula/Consultas/" style="color: #BBC5CE;">
                                Consultar
                            </a>
                        </li>
                    </ul>
                </li>
<!-- ================================================================================ -->
                <!-- <li class="nav-small-cap">
                    Unidad Curricular
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-book-open-page-variant">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Unidad Curricular
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php #echo constant('URL'); ?>unidad/Registros/" style="color: #BBC5CE;">
                                Registrar
                            </a>
                        </li>
                        <li>
                            <a href="<?php #echo constant('URL'); ?>unidad/Consultas/" style="color: #BBC5CE;">
                                Consultar
                            </a>
                        </li>
                    </ul>
                </li> -->
 <!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Cohorte
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-book-open-page-variant">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Cohorte
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>cohorte/Registros/" style="color: #BBC5CE;">
                                Crear
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>cohorte/Consultas/" style="color: #BBC5CE;">
                                Consultar
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false" style="color: #BBC5CE;">Unidad Curricular</a>
                            <ul aria-expanded="false" class="collapse">
                               <li>
                            <a href="<?php echo constant('URL'); ?>unidad/Registros/" style="color: #BBC5CE;">
                                Registrar
                            </a>
                        	</li>
                        	<li>
                            <a href="<?php echo constant('URL'); ?>unidad/Consultas/" style="color: #BBC5CE;">
                                Consultar
                            </a>
                        	</li>
                                        
                            </ul>
                        </li>
                    </ul>
                </li>                         
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Horarios
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-calendar-multiple">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Horarios
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false" style="color: #BBC5CE;">Horario de Seccion</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?php echo constant('URL'); ?>horario/RHS" style="color: #BBC5CE;">Crear</a>
                                </li>
                                <li>
                                    <a href="<?php echo constant('URL'); ?>horario/CHS" style="color: #BBC5CE;">Consultar</a>  
                                </li>         
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false" style="color: #BBC5CE;">Horario de Docente</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?php echo constant('URL'); ?>horario/RHD" style="color: #BBC5CE;">Crear</a>
                                </li>
                                <li>
                                    <a href="<?php echo constant('URL'); ?>horario/CHD" style="color: #BBC5CE;">Consultar</a>
                                </li>
                                        
                            </ul>
                        </li>
                    </ul>
                </li>
<!-- ================================================================================ -->
                <li class="nav-small-cap ">
                    Seguridad
                </li>
                <li >
                    <a aria-expanded="false" class="has-arrow" href="#" style="color: #BBC5CE;" >
                        <i class="mdi mdi-security">
                        </i>
                        
                        <span class="hide-menu m-l-20 white">
                            Seguridad
                        </span> 
                       
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>seguridad/Roles/" style="color: #BBC5CE;" >
                                Roles  
                            </a>
                        </li>
                       <li>
                            <a href="<?php echo constant('URL'); ?>seguridad/Permisos/" style="color: #BBC5CE;" >
                                Permisos  
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>seguridad/Modulos" style="color: #BBC5CE;" >
                                Modulos  
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>bitacora/" style="color: #BBC5CE;" >
                                Bitacora  
                            </a>
                        </li>
                    </ul>
                </li>
                
<!-- ================================================================================ -->
                <li class="nav-small-cap">
                    Reportes
                </li>
                <li style="">
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-file-pdf">
                        </i>
                        <span class="hide-menu m-l-20 white">
                            Reportes
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse" style="margin-bottom: -60px;">
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/Reporte_Listado_Seccion"  style="color: #BBC5CE;">
                                Listado de Seccion
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/Reporte_Listado_Docente"  style="color: #BBC5CE;">
                                Listado de Docentes
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/Reporte_Horario_Seccion"  style="color: #BBC5CE;">
                                Horario de Seccion
                            </a> 
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/Reporte_Horario_Docente"  style="color: #BBC5CE;">
                                Horario de Docente
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/Aulario"  style="color: #BBC5CE;">
                                Reporte de Aulario 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/FOD"  style="color: #BBC5CE;">
                                Formato de Org Docente
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>reporte/Declaracion_Jurada"  style="color: #BBC5CE;">
                                Declaracion Jurada
                            </a>
                        </li>
                        <li class="nav-devider"></li>
                    </ul>
                </li>
           
<!-- ================================================================================ -->
            </ul>
        </nav>
    </div>
    
    <div class="sidebar-footer" >
        <!-- item-->
        <a class="link" data-toggle="tooltip"  href="" title="Ajustes">
            <i class="ti-settings">
            </i>
        </a>

        <!-- item-->
        <a class="link" data-toggle="tooltip" href="<?php echo constant('URL'); ?>ayuda/" title="Ayuda">
            <i class="mdi mdi-help-circle">
            </i>
        </a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" href="" title="Cerrar Sesión">
            <i class="mdi mdi-power"> 
            </i>
        </a>
    </div>
</aside>
        <!-- ============================================================== -->
        <!-- Final de la barra navegadora  -->
        <!-- ============================================================== -->
    