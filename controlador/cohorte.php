<?php

class Cohorte extends Controlador
{
    public function __construct()  
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }
// ==============================VISTAS=====================================

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('cohorte/registrar'); 
    }

    public function Registros() 
    {
        $this->vista->Cargar_Vistas('cohorte/registrar'); 
    }

    public function Consultas() 
    {
                $cohorte             = $this->model->Cohortes();
        $this->vista->cohorte = $cohorte;
        $this->vista->Cargar_Vistas('cohorte/consultar');  
    }

     public function Nuevo()
    {
        $numero_cohorte       = ($_POST['cohorte']       !== "") ? $_POST['cohorte']    : null;
        $fecha_cohorte        = ($_POST['fecha']        !== "") ? $_POST['fecha']    : null;
        $descripcion_cohorte  = ($_POST['descripcion']  !== "") ? $_POST['descripcion']    : null;  
       
        if ($this->model->Registrar(
            [
                'numero_cohorte'      => $numero_cohorte,
                'fecha_cohorte'       => $fecha_cohorte,
                'descripcion_cohorte' => $descripcion_cohorte
            ]
        )) 
        {
            $this->mensaje = 'El cohorte '.$numero_cohorte.' ha sido registrado exitosamente.';
        } else 
        {
            $this->mensaje = 'Ha ocurrido un error.';
        }


         $this->Consultas();
                 echo '<script type="text/javascript">               
                    swal({
                    title: "¡Éxito!",
                    text: "'.$this->mensaje.'",
                    type: "success",
                    showConfirmButton:false,
                    timer:2000
                });</script>  ';

        return false;

    }



}
?> 