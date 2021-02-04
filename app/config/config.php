<?php
 
//--------------Base de Datos--------------------

define('SERVIDOR', 	'mysql'); 

// DATOS ONLINE

// define('URL', 'http://uptaebsigod.byethost31.com/HOD/');

// define('HOST', 		'sql204.byethost31.com');
// define('BD', 		'b31_26889567_HOD');
// define('USER1', 		'b31_26889567');
// define('PASSWORD1',  'Cheche482010@');  

// DATOS LOCALES

define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/dashboard/www/System%20HOD%20V2/');

define('HOST', 		'localhost'); 
define('BD', 		'bdsigod');
define('PORT', 		'5432');
// MYSQL contraseña
define('USER1', 		'root');
define('PASSWORD1', 	'');
// POSTGRES contraseña
define('USER2', 		'postgres');
define('PASSWORD2', 	'26142326');

//--------------Direcciones--------------------

define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]);

define('call', 'vista/public/'); 
define('private', 'vista/private/');

define('privado', 'vista/private/'); 
define('modal', 'vista/public/modal/');
define('PDF', 'config/plugins/pdf/');

define('web', 'config/img/web/');
define('ayuda', 'config/img/ayuda/');
define('X', 'config/img/web/x.html');

//--------------TIEMPO--------------------

$hora = date('h:i A');

$dias = [ "Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado" ];

$meses = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ];

$fecha_corta = date('d-m-Y');

$fecha_media = date('d') . " de " . $meses[ date('n')-1 ] . " del " . date('Y');

$fecha_larga = $dias[ date('w') ] . " , " . date('d') . " de " . $meses[ date('n')-1 ] . " del " . date('Y');

$fecha = $fecha_corta;
$fecha_sql = explode("-", $fecha);
$fecha = $fecha_sql[0] . "/" . $fecha_sql[1] . "/" . $fecha_sql[2];

$fecha_inicio=date("Y")."-".date("m")."-".date("d");

// ==========================================PERMISOS==================================

$permisos_superUsuario = array(
	// USUARIOS
    1 => "1", // registrar usuarios
    2 => "2", // modificar usuarios
    3 => "3", // eliminar usuarios
    // AULAS
    4 => "4", // registrar aulas
    5 => "5", // modificar aulas
    6 => "6", // eliminar aulas
    // DOCENTES
    7 => "7", // registrar docentes
    8 => "8", // modificar docentes
    9 => "9", // eliminar docentes
    // HORARIOS
    10 => "10", // registrar horarios
    11 => "11", // modificar horarios
    12 => "12", // eliminar horarios
    // SECCIONES
    13 => "13", // registrar secciones
    14 => "14", // modificar secciones
    15 => "15", // eliminar secciones
    // UNIDADES CURRICULARES
    16 => "16", // registrar unidades curriculares
    17 => "17", // modificar unidades curriculares
    18 => "18", // eliminar unidades curriculares
    // REPORTES
    19 => "19", // generar reportes
    // SEGURIDAD
    	// BITACORA
    20 => "20", //consultar bitacora
    	// MODULOS
    21 => "21", //consultar modulos
    	// PERMISOS
    22 => "22", //consultar permisos
    	// ROLES
    23 => "23", //consultar roles
);

$permisos_Administrador = array(
    
);

$permisos_Operador = array(
    
);

?>