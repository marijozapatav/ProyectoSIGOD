<?php

class Secciones extends Controlador  
{
    public function __construct() 
    {
        parent::__construct();
        $this->vista->mensaje = "";  
    }
// ==============================VISTAS=====================================

    public function Cargar_Vistas() 
    {
        $this->vista->Cargar_Vistas('secciones/registrar'); 
    }

    public function Registros() 
    { 
        $trayecto             = $this->model->Trayecto(); 
        $this->vista->trayecto = $trayecto; 
        
        $this->vista->Cargar_Vistas('secciones/registrar'); 
    }

    public function Consultas() 
    {
        $seccion             = $this->model->Secciones(); 
        $this->vista->seccion = $seccion;
        $trayecto             = $this->model->Trayecto(); 
        $this->vista->trayecto = $trayecto;

        $this->vista->Cargar_Vistas('secciones/consultar'); 
    }
// ==============================FUNCIONES=====================================
    public function Nuevo()
    {
        $id_trayecto    = ($_POST['id_trayecto']    !== "") ? $_POST['id_trayecto']    : null;
        $codigo_seccion = ($_POST['codigo_seccion'] !== "") ? $_POST['codigo_seccion'] : null;
       
        if ($this->model->Registrar(
            [
                'id_trayecto'      => $id_trayecto,
                'codigo_seccion'   => $codigo_seccion
            ]
        )) 
        {
            $this->mensaje = 'La sección '.$codigo_seccion.' ha sido registrada exitosamente!.';
        } else 
        {
            $this->mensaje = 'Ha ocurrido un error.';
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

    public function Eliminar($param)
    {

        if ($this->model->Eliminar_seccion($param[0])) {
            $this->mensaje = 'Sección eliminada exitosamente';
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


                public function DynamicSearch(){
        $clave=$_POST['clave'];
        $existente=$this->model->BusquedaDinamica($clave);
        if($existente==""||$existente==NULL){
            echo 0;
        }
        else{
      foreach ($existente as $e) {
        $mouseOv="this.style.color='#A60303'";
        $mouseOut="this.style.color='red'";
        $trayect="";
        switch ($e['id_trayecto']) {
            case '1':
                $trayect="Trayecto I";
                break;
            case '2':
            $trayect="Trayecto II";   
            break;
            case '3':
            $trayect="Trayecto III";   
            break; 
            case '4':
            $trayect="Trayecto IV";   
            break;
            default:
                $trayect='Trayecto Inicial';
                break;
        };
         $tr='<tr>
                 <td>'.$e['codigo_seccion'].'</td>
                 <td>'.$trayect.'</td>
                 <td style="text-align: center">  
                 <a title="Editar usuario" class="mdi mdi-pencil-box" type="button" href="javascript:void(0)" aria-hidden="true" style="font-size: 30px; " data-placement="bottom" data-target="#actualizar" data-toggle="modal"></a>
                                           

                <a title="Eliminar usuario" onmouseover="'.$mouseOv.'" onmouseout="'.$mouseOut.'" class="mdi mdi-delete" style="font-size: 30px; color: red; " type="button" href="'.constant('URL').'usuario/Eliminar/'.$e['codigo_seccion'].'"></a>
                                            </td> 
                                        </tr>'; 
        echo $tr;                                
       } 

    }
} 

    public function Editar($param)
    {

        $idtrayecto  = ($_POST['trayecto'] !== "") ? $_POST['trayecto'] : null;
        $nombre      = ($_POST['nombre'] !== "") ? $_POST['nombre'] : null;
        $anio        = ($_POST['anio'] !== "") ? $_POST['anio'] : null;

        $idseccion = $param[0];

        if ($this->model->Actualizar([
            'idtrayecto'      => $idtrayecto,
            'nombre'          => $nombre,
            'anio'            => $anio,
            'idseccion'       => $idseccion
        ])) {
            $this->mensaje = 'Seccion actualizado exitosamente!.';
        } else {
            $this->mensaje = 'Ha ocurrido un error.';
        }
        echo '<script type="text/javascript">swal("Exito!", "'.$this->mensaje.'", );</script>  ';
        return false;
    }

            public function BuscarExistenteAjax(){
        $seccion=$_POST['seccion'];
        $trayecto=$_POST['trayecto'];
        $existente=$this->model->BusquedaSecciones($trayecto,$seccion);
        if($existente==""||$existente==NULL){
            echo 0;
        }
        else{
       echo "Esta sección ya está registrada";
        }
    
    }


}
?>