<?php

class Horario extends Controlador
{
    public function __construct()
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }
// ==============================VISTAS=====================================

    public function RHD() 
    {
        $this->vista->Cargar_Vistas('horario/docente/registrar'); 
    }
    public function CHD() 
    {
        $this->vista->Cargar_Vistas('horario/docente/consultar'); 
    }

    // ---------------------------------------------------------

    public function RHS() 
    {
        $trayecto             = $this->model->Trayecto(); 
        $this->vista->trayecto = $trayecto;
        $this->vista->Cargar_Vistas('horario/seccion/registrar'); 
    }
    public function CHS() 
    {
        $this->vista->Cargar_Vistas('horario/seccion/consultar'); 
    }


    public function Calendario() 
    {
        $this->vista->Cargar_Vistas('horario/calendario'); 
    }

    
// ==============================FUNCIONES=====================================

}
?>