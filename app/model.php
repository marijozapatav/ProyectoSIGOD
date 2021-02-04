<?php

class Modelo
{
    public function __construct()
    {
        $this->conexion = new BASE_DATOS(); 
    }

    public function Cerrar_BD()
    {
        return $this->conexion->close();
    }
}
?>