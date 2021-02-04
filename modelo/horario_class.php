<?php

  class Horario_Class extends Modelo {

    function __construct() {
        parent::__construct();
    }
    function Trayecto () { 
    
        $tabla            = "SELECT * FROM trayectos ORDER BY id_trayecto ASC";
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
  } 

?>