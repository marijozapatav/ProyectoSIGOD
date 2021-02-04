<?php

class Errores{

    function __construct(){
    	
        $this->vista = new Vista();

        $this->vista->mensaje = "Hay un error al cargar el recurso";
        $this->vista->Cargar_Vistas('error/index');
    }
}
?>