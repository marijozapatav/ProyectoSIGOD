<?php

require_once 'controlador/error.php';
 
class Iniciar_Sistema  
{

    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        session_start();

         //si un usuario ha iniciado sesion
        if( isset( $_SESSION['cedula'] ) ){

          //si no se ingresa ningun controlador
          if (empty($url[0])) { 

            $archivo_controlador = 'controlador/inicio.php';
            require_once $archivo_controlador; 
            $controlador = new Inicio();
            $controlador->Cargar_Modelo('inicio');
          //  $controlador->set_Usuario_Actual($_SESSION['cedula']);
            $controlador->Cargar_Vistas(); //funcion para aparecer en pantalla.

            return false;
          } 
          //convertimos el URL en un directorio para cargar controladores.
          $archivo_controlador = 'controlador/' . $url[0] . '.php';
      
          if (file_exists($archivo_controlador) ) {
  
            require_once $archivo_controlador; 

            //inicializar el controlador
            $controlador = new $url[0];
            $controlador->Cargar_Modelo($url[0]);
           // $controlador->set_Usuario_Actual($_SESSION['cedula']);

            // # elementos del array
            $N_parametors = sizeof($url);

            if ($N_parametors > 1) {
                if ($N_parametors > 2) {
                    $param = [];

                    for ($i=2; $i < $N_parametors; $i++) { 
                        array_push($param, $url[$i]);
                    }

                    $controlador->{$url[1]}($param);
                }else {
                    $controlador->{$url[1]}();
                }
            } else {
                $controlador->Cargar_Vistas();
                                          echo '<script type="text/javascript">               
                    swal({
                    title: "¡Bienvenido!",
                    text: "'.$_SESSION['nombre']." ".$_SESSION['apellido'].'",
                    type: "success",
                    showConfirmButton:false,
                    timer:2000
                });</script>  ';
            }
            
          } else { //en caso de que no encuentre el archivo...
              $controlador = new Errores(); //esto muestra un mensaje de error.
          }

        } else { //DESDE AQUI ES EL IF DE USUARIO

          $archivo_controlador = 'controlador/' . $url[0] . '.php'; 
          
          if (file_exists($archivo_controlador)) {
  
            require $archivo_controlador;

            $controlador = new $url[0];
            $controlador->Cargar_Modelo($url[0]);
            
            if ( isset($url[1]) ){
                $controlador->{$url[1]}();
            } else{
              $controlador->Cargar_Vistas();
            }
            

          } else { 

            $archivo_controlador = 'controlador/login.php';     #CAMBIA AQUI INICIO POR LOGIN CUANDO ESTE LISTO           
            require_once $archivo_controlador;      
            $controlador = new login();                         #CAMBIA AQUI INICIO POR LOGIN CUANDO ESTE LISTO
            $controlador->Cargar_Modelo('login');               #CAMBIA AQUI INICIO POR LOGIN CUANDO ESTE LISTO

            if (isset($url[1]) ){
              $controlador->{$url[1]}();
              
            } else{
              $controlador->Cargar_Vistas();
            }

          }

        }
    }

}
// class Iniciar_Sistema 
// {

//     public function __construct()
//     {
//         $url = isset($_GET['url']) ? $_GET['url'] : null;
//         $url = rtrim($url, '/');
//         $url = explode('/', $url);

//         if (empty($url[0])) {
//             $archivo_controlador = 'controlador/inicio.php';
//             require $archivo_controlador;
//             $controlador = new Inicio();
//             $controlador->Cargar_Vistas();
//             $controlador->Cargar_Modelo('inicio');
//             return false;
//         } else {
//             $archivo_controlador = 'controlador/' . $url[0] . '.php';
//         }

//         if (file_exists($archivo_controlador)) {
//             require $archivo_controlador;

//             $controlador = new $url[0];
//             $controlador->Cargar_Modelo($url[0]);

//             // Se obtienen el número de param
//             $N_parametors = sizeof($url);
//             // si se llama a un método
//             if ($N_parametors > 1) {
//                 // hay parámetros
//                 if ($N_parametors > 2) {
//                     $parametros = [];
//                     for ($i = 2; $i < $N_parametors; $i++) {
//                         array_push($parametros, $url[$i]);
//                     }
//                     $controlador->{$url[1]}($parametros);
//                 } else {
//                     // solo se llama al método
//                     $controlador->{$url[1]}();
//                 }
//             } else {
//                 // si se llama a un controlador
//                 $controlador->Cargar_Vistas();
//             }
//         } else {
//             $controlador = new Errores();
//         }
//     }

// }
?>