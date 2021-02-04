<?php

class Bitacora_Class extends Modelo
{

    private $idusuario;
    private $fecha_inicio;
    private $hora_inicio;
    private $actividades;
    private $fecha_salida;
    private $hora_salida;
    private $dia;

    public function __construct()
    {
        parent::__construct();
    }
    public function setInicioSesion($idusuario, $fecha_inicio, $hora_inicio, $dia)
    {

        $this->idusuario    = $idusuario;
        $this->fecha_inicio = $fecha_inicio;
        $this->hora_inicio  = $hora_inicio;
        $this->dia          = $dia;
    }

    public function datosUsuario()
    {

        $tabla = "SELECT * FROM bitacora";

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