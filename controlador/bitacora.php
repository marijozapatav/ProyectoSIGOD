<?php

class Bitacora extends Controlador
{
    public function __construct()
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('seguridad/bitacora/index'); 
    }
}
?>