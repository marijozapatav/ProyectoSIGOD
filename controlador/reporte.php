<?php

class Reporte extends Controlador
{
    public function __construct() 
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }

    public function Cargar_Vistas()
    {
        #$this->vista->Cargar_Vistas('reporte/PDF/aulario'); 
    }

    public function Reporte_Horario_Seccion()
    {
        $this->vista->Cargar_Vistas('reporte/Hseccion'); 
    }

    public function FOD()
    {
        $this->vista->Cargar_Vistas('reporte/FOD'); 
    }

    public function Declaracion_Jurada()
    {
        $this->vista->Cargar_Vistas('reporte/Djurada'); 
    }

    public function Reporte_Horario_Docente()
    {
        $this->vista->Cargar_Vistas('reporte/Hdocente'); 
    }

    public function Reporte_Listado_Docente() 
    {
        $this->vista->Cargar_Vistas('reporte/Ldocente'); 
    }
    public function Reporte_Listado_Seccion() 
    {
        $trayecto             = $this->model->Trayecto(); 
        $this->vista->trayecto = $trayecto;
        $this->vista->Cargar_Vistas('reporte/Lseccion'); 
    }

    public function Reporte_ListadoD() 
    {
        $this->vista->Cargar_Vistas('reporte/PDF/listadoDocente'); 
    }

    public function Reporte_ListadoS() 
    {
        $this->vista->Cargar_Vistas('reporte/PDF/listadoSeccion'); 
    }

     public function Aulario()
    {
        $this->vista->Cargar_Vistas('reporte/aulario'); 
    }

    public function Reporte_Aulario()
    {
        $this->vista->Cargar_Vistas('reporte/PDF/aulario'); 
    }

    public function Reporte_HorarioD()
    {
        $this->vista->Cargar_Vistas('reporte/PDF/horarioDocente'); 
    }
}
?>