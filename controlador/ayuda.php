<?php

class Ayuda extends Controlador
{
    public function __construct()
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('ayuda/index'); 
    }

}
?> 