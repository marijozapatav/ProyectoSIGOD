<?php

class Login extends Controlador 
{
    public function __construct() 
    {
        parent::__construct();
        $this->vista->mensaje = "";

         if ( isset( $_POST['cedula'] ) && $_POST['password'] !== ""){

          $cedula = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
          $contrasenia = ($_POST['password'] !== "") ? $_POST['password'] : NULL;

          $this->Cargar_Modelo('login'); 

          

          if($this->Verificar_Usuario($cedula, $contrasenia )) {
            session_start();
            header('location:'. constant('URL')."inicio/");
            echo constant('URL'); 
          }
        } 
    }

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('login/index'); 
    }

    public function Verificar_Usuario( $cedula, $contrasenia ) {
      
      if ( $this->model->Usuario_Existe($cedula, $contrasenia) ) {
        echo 'correcto';
        $this->set_Usuario_Actual($_POST['cedula'] );
        return true;
      } else {
         $this->mensaje = 'Datos incorrectos.';
         header('location:'. constant('URL')."login/");
        return false; 
      }
    }

    public function set_Usuario_Actual($cedula) 
    {
        $_SESSION['cedula'] = $cedula;

    } 

    public function Salir(){
      session_unset();
      session_start();
      session_destroy();
      session_regenerate_id(true);
      $this->vista->Cargar_Vistas('login/index');
    }



}
?>