<?php

class Seguridad extends Controlador
{
    public function __construct()
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('seguridad/index'); 
    }

    public function Roles()
    {
        $this->vista->Cargar_Vistas('seguridad/rol/index'); 
    }

    public function Permisos()
    {
        $this->vista->Cargar_Vistas('seguridad/permisos/index'); 
    }

    public function Modulos()
    {
        $this->vista->Cargar_Vistas('seguridad/modulos/index'); 
    }

}
?>