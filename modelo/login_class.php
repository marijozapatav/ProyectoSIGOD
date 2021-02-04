<?php

  class Login_Class extends Modelo {
 
  	private $conex;

    public function __construct()
    {
        parent::__construct();
    }

    public function getConex() 
    {return $this->conex;}

    function Usuario_Existe ( $cedula, $contrasenia ) {

      try {
        $query = $this->conexion->prepare('SELECT * FROM usuario WHERE cedula = :cedula AND contrasenia = :contrasenia');
        $query->execute(['cedula' => $cedula, 'contrasenia' => $contrasenia]);

        return $query->rowCount();
      } catch(PDOException $e) {
        return false;
      }

    }

    public function datosUsuario() 
    {

        $tabla = "SELECT * FROM usuario";

        $respuestaArreglo = ''; 
        try {
            $datos = $this->conexion->prepare($tabla);
            $datos->execute();
            $datos->setFetchMode(PDO::FETCH_ASSOC);
            $respuestaArreglo = $datos->fetchAll(PDO::FETCH_ASSOC);
            return $respuestaArreglo;
        } catch (PDOException $e) {
            $errorReturn = ['estatus' => false];
            $errorReturn += ['info' => "error sql:{$e}"];
            return $errorReturn;
        }
    }

    public function logOut()
    {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
    }

  } 

?>