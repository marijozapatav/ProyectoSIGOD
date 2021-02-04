<?php

class Aula extends Controlador  
{
    public function __construct()
    {
        parent::__construct();
        $this->vista->mensaje = "";  
    }
// ==============================VISTAS=====================================

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('aula/registrar'); 
    }

    public function Registros()  
    {
                $disponibilidades            = $this->model->Disponibilidades();
        $this->vista->disponibilidades = $disponibilidades;
        $this->vista->Cargar_Vistas('aula/registrar'); 
    }

    public function Consultas()  
    {
        $aula             = $this->model->Aulas(); 
        $this->vista->aula = $aula;
        $this->vista->Cargar_Vistas('aula/consultar'); 
    }
// ==============================FUNCIONES=====================================

    public function Nuevo()
    {
        $numero      = ($_POST['numero']      !== "") ? $_POST['numero']      : null;
        $nombre_aula = ($_POST['nombre_aula'] !== "") ? $_POST['nombre_aula'] : null;
        $ubicacion   = ($_POST['ubicacion']   !== "") ? $_POST['ubicacion']   : null;
        $capacidad   = ($_POST['capacidad']   !== "") ? $_POST['capacidad']   : null;

        if ($this->model->Registrar(
            [
                'numero'       => $numero,
                'nombre_aula'  => $nombre_aula,
                'ubicacion'    => $ubicacion,
                'capacidad'    => $capacidad
            ]
        )) 
        {
            $this->mensaje = 'Aula Registrada Exitosamente!.';
        } else 
        {
            $this->mensaje = 'Ha ocurrido un error.';
        }

         $this->vista->Cargar_Vistas('aula/registrar'); 

         echo '<script type="text/javascript">swal("Exito!", "'.$this->mensaje.'", "success");</script>  ';

        return false;

    }

        public function AggDisponibilidad()
    {
        $nombre      = ($_POST['nombre_disponibilidad']      !== "") ? $_POST['nombre_disponibilidad']      : null;
        $turno = ($_POST['turno'] !== "") ? $_POST['turno'] : null;
        $dia   = ($_POST['dia']   !== "") ? $_POST['dia']   : null;


        if ($this->model->RegistrarDisponibilidad(
            [
                'nombre_disponibilidad'       => $nombre,
                'turno'  => $turno,
                'dia'    => $dia
            ]
        )) 
        {
            $id_disponibilidad=$this->model->id_disponibilidad();
            foreach ($id_disponibilidad as $id) {
                $id_dispo=$id['MAX(id_disponibilidad)'];
            }

            echo $id_dispo;
        }
        else {
            echo 0;
        }

    }

    public function Eliminar($param)
    {

        if ($this->model->Eliminar_aula($param[0])) {
            $this->mensaje = 'Aula eliminada exitosamente';
        } else {
            $this->mensaje = 'No se han encontrado aula con ese ID';
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


        public function GuardarAjax(){
        $aula=$_POST['aula'];
        $disponibilidades=$_POST['disponibilidades'];

        
        if($this->model->RegistrarAula(
            [
             'numero'=>$aula['nroAula'],
             'nombre_aula'=>$aula['nombreAula'],
             'ubicacion'=>$aula['ubicacion'],
             'asignacion'=>$aula['asignacion'],
             'capacidad'=>$aula['capacidad']
            ]
        )){
            $id_aula=$this->model->idAula();
            foreach ($id_aula as $id) {
                $id_au=$id['MAX(id_aula)'];
            }

                     $cont=0;
                       foreach ($disponibilidades as $dispo) {
                          if($this->model->RegistrarAulaDisponibilidad(
                          [
                            'id_aula'=>$id_au,
                            'id_disponibilidad'=>$dispo
                          ]
                          )){
                             $cont=1;
                          }
                       }
                       if($cont!=0){
                         echo $cont;
                       }
                       else{
                         echo $id_au;
                       }
                 
             

        }

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
         $tr='<tr>
                 <td>'.$e['nombre_aula'].'</td>
                 <td>'.$e['numero'].' </td>
                 <td>'.$e['ubicacion'].'</td>
                 <td>'.$e['capacidad'].'</td> 
                 <td style="text-align: center">  
                 <a title="Editar usuario" class="mdi mdi-pencil-box" type="button" href="javascript:void(0)" aria-hidden="true" style="font-size: 30px; " data-placement="bottom" data-target="#actualizar" data-toggle="modal"></a>
                                           

                <a title="Eliminar usuario" onmouseover="'.$mouseOv.'" onmouseout="'.$mouseOut.'" class="mdi mdi-delete" style="font-size: 30px; color: red; " type="button" href="'.constant('URL').'aula/Eliminar/'.$e['id_aula'].'"></a>
                                            </td> 
                                        </tr>'; 
        echo $tr;                                
       } 

    }
}



    public function Editar($param)
    {

        $nombre      = ($_POST['nombre'] !== "") ? $_POST['nombre'] : null;
        $tipo        = ($_POST['tipo'] !== "") ? $_POST['tipo'] : null;

        $idaula = $param[0];

        if ($this->model->Actualizar([
            'nombre'            => $nombre,
            'tipo'              => $tipo,
            'idaula'       => $idaula
        ])) {
            $this->mensaje = 'Seccion actualizado exitosamente!.';
        } else {
            $this->mensaje = 'Ha ocurrido un error.';
        }

        echo '<script type="text/javascript">swal("Exito!", "'.$this->mensaje.'", );</script>  ';

        return false;
    }

}
?>