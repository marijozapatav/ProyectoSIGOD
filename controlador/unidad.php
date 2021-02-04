<?php

class Unidad extends Controlador
{
    public function __construct()  
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }
// ==============================VISTAS=====================================

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('unidad/registrar'); 
    }

    public function Registros() 
    {
        $trayecto             = $this->model->Trayecto(); 
        $this->vista->trayecto = $trayecto;

        $eje           = $this->model->Ejes(); 
        $this->vista->eje = $eje;

        $this->vista->Cargar_Vistas('unidad/registrar'); 
    }

    public function Consultas() 
    {
        $unidad             = $this->model->Unidades(); 
        $this->vista->unidad = $unidad;
        $trayecto             = $this->model->Trayecto(); 
        $this->vista->trayecto = $trayecto;
        $this->vista->Cargar_Vistas('unidad/consultar');  
    }
// ==============================FUNCIONES=====================================

    public function Nuevo()
    {
        $nombre_unidad      = ($_POST['nombre_unidad']    !== "") ? $_POST['nombre_unidad']     : null;
        $trayecto           = ($_POST['trayecto']         !== "") ? $_POST['trayecto']          : null;
        $fase               = ($_POST['fase']             !== "") ? $_POST['fase']              : null;
        $hora_unidad        = ($_POST['hora_unidad']      !== "") ? $_POST['hora_unidad']       : null;
        $id_eje_formacion   = ($_POST['id_eje_formacion'] !== "") ? $_POST['id_eje_formacion']  : null;
        
        if ($this->model->Registrar(
            [
                'nombre_unidad'     => $nombre_unidad,
                'trayecto'          => $trayecto,
                'fase'              => $fase,
                'hora_unidad'       => $hora_unidad,
                'id_eje_formacion'  => $id_eje_formacion
            ]
        )) 
        {
            $this->mensaje = 'La unidad curricular '.$nombre_unidad.' ha sido registrada exitosamente.';
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

    public function Eliminar($param)
    {

        if ($this->model->Eliminar_unidad($param[0])) {
            $this->mensaje = 'Unidad Curricular eliminada exitosamente';
        } else {
            $this->mensaje = 'No se han encontrado Seccion con ese ID';
        }


        $this->Consultas() ;
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

    public function Editar($param)
    {

        $idtrayecto  = ($_POST['trayecto'] !== "") ? $_POST['trayecto'] : null;
        $nombre      = ($_POST['nombre'] !== "") ? $_POST['nombre'] : null;

        $idseccion = $param[0];

        if ($this->model->Actualizar(
            [
                'nombre'          => $nombre,
                'idtrayecto'      => $idtrayecto,
            ]
        )) {
            $this->mensaje = 'Unidad Curricular actualizada exitosamente!.';
        } else {
            $this->mensaje = 'Ha ocurrido un error.';
        }
        echo '<script type="text/javascript">swal("Exito!", "'.$this->mensaje.'", );</script>  ';
        return false;
    }
}
?>