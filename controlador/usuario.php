<?php

class Usuario extends Controlador 
{
    public function __construct()
    {
        parent::__construct();
        $this->vista->mensaje = "";
    }
// ==============================VISTAS=====================================

    public function Cargar_Vistas()
    {
        $this->vista->Cargar_Vistas('usuario/registrar');
    }

    public function Registros()
    {
        $this->vista->Cargar_Vistas('usuario/registrar');
    }

    public function Consultas()
    {
        $usuario              = $this->model->Usuarios();
        $this->vista->usuario = $usuario;
        $this->vista->Cargar_Vistas('usuario/consultar');
    }
// ==============================FUNCIONES=====================================
    public function FOTO()
    {
        /*--------- FOTO DE PERFIL ---------*/

        if ($_FILES["foto_perfil"]["type"] == "image/jpeg" ||
            $_FILES["foto_perfil"]["type"] == "image/pjpeg" ||
            $_FILES["foto_perfil"]["type"] == "image/gif" ||
            $_FILES["foto_perfil"]["type"] == "image/png") {
            $carpetaDestino = 'config/img/users/';

            if (isset($_FILES["foto_perfil"])) {
                if (file_exists($carpetaDestino)) {
                    $origen  = $_FILES["foto_perfil"]["tmp_name"];
                    $destino = $carpetaDestino . $cedula . '-' . $nombre . "-" . $_FILES["foto_perfil"]["name"];

                    if (move_uploaded_file($origen, $destino)) {
                        $foto_perfil = $destino;
                    } else {
                        $foto_perfil = 'config/img/users/user-3.png';
                    }

                } else {
                    $this->vista->mensaje = "No se ha podido Encontrar la carpeta la carpeta: " . $carpetaDestino . "se guardara en la carpeta img";
                }
            } else {
                $this->vista->mensaje = "No se subio ningun archivo, se guardara la imagen usuario por defecto.";
                $foto_perfil          = URL . 'config/img/users/user-3.png';
            }
        } else {
            $this->vista->mensaje = "No se subio un archivo valido , se guardara la imagen usuario por defecto.";
            $foto_perfil          = URL . 'config/img/users/user-3.png';
        }
        $this->foto_perfil = $foto_perfil;
    }



    public function BuscarExistente($ced){
        $existente=$this->model->UsuariosBusqueda($ced);
        return $existente;
    }

        public function BuscarExistenteAjax(){
        $cedula=$_POST['cedula'];
        $existente=$this->model->UsuariosBusqueda($cedula);
        if($existente==""||$existente==NULL){
            echo 0;
        }
        else{
      foreach ($existente as $e) {
         $clave=$e['contrasenia'];
         $nombre=$e['nombre'];
         $apellido=$e['apellido'];
       } 
       if($clave==$_POST['clave']){
        echo 1;
        session_start();
        $_SESSION['cedula']=$cedula;
        $_SESSION['nombre']=$nombre;
        $_SESSION['apellido']=$apellido;

       }
       else{
        echo "La contraseña es incorrecta";
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
                 <td>'.$e['cedula'].'</td>
                 <td>'.$e['nombre'].' </td>
                 <td>'.$e['apellido'].'</td>
                 <td>'.$e['correo'].'</td> 
                 <td style="text-align: center">  
                 <a title="Editar usuario" class="mdi mdi-pencil-box" type="button" href="javascript:void(0)" aria-hidden="true" style="font-size: 30px; " data-placement="bottom" data-target="#actualizar" data-toggle="modal"></a>
                                           

                <a title="Eliminar usuario" onmouseover="'.$mouseOv.'" onmouseout="'.$mouseOut.'" class="mdi mdi-delete" style="font-size: 30px; color: red; " type="button" href="'.constant('URL').'usuario/Eliminar/'.$e['cedula'].'"></a>
                                            </td> 
                                        </tr>'; 
        echo $tr;                                
       } 

    }
}

    public function Nuevo() 
    {
        $cedula      = ($_POST['cedula']      !== "") ? $_POST['cedula']      : null;
        $nombre      = ($_POST['nombre']      !== "") ? $_POST['nombre']      : null;
        $apellido    = ($_POST['apellido']    !== "") ? $_POST['apellido']    : null;
        $fecha_n     = ($_POST['fecha_n']     !== "") ? $_POST['fecha_n']     : null;
        $correo      = ($_POST['correo']      !== "") ? $_POST['correo']      : null;
        $contrasenia = ($_POST['contrasenia'] !== "") ? $_POST['contrasenia'] : null;   
        $confirmar = ($_POST['confirmar'] !== "") ? $_POST['confirmar'] : null;
        $guardar = ($_POST['confirmar'] !== "") ? $_POST['confirmar'] : null;
        $confirmar = ($_POST['confirmar'] !== "") ? $_POST['confirmar'] : null;
        $rol      = ($_POST['rol']      !== "") ? $_POST['rol']      : null;

        $tcorreo     = $_POST['tcorreo'];
        $correo      = $correo.$tcorreo;

    //    $this->FOTO();

        if ($this->model->Registrar(
            [
                'cedula'          => $cedula,
                'nombre'          => $nombre,
                'apellido'        => $apellido,
                'fecha_n'         => $fecha_n,
                'correo'          => $correo,
                'contrasenia'     => $contrasenia,
                'estado'          => '1',
                'rol_inicio'      => $rol

            ]
        )) {

          
                    $this->model->RegistrarPermisos([
                        'usuario'=>$cedula,

                      

                    ]);
               
 


            $this->mensaje = '¡El usuario '.$nombre.' '.$apellido.' ha sido registrado exitosamente!';
       $this->Consultas();
                   echo '<script type="text/javascript">               
                    swal({
                    title: "¡Éxito!",
                    text: "'.$this->mensaje.'",
                    type: "success",
                    showConfirmButton:false,
                    timer:2000
                });</script>  ';
        } 

      

       
        return false;
    }

    public function Eliminar($param)  
    { 

        if ($this->model->Eliminar_usuario($param[0])) { 
            $this->mensaje = 'usuario eliminado exitosamente';
        } else {
            $this->mensaje = 'No se han encontrado Usuario con ese ID';
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



    public function Editar($param)
    {

        $cedula      = ($_POST['cedula'] !== "") ? $_POST['cedula'] : null;
        $nombre      = ($_POST['nombre'] !== "") ? $_POST['nombre'] : null;
        $apellido    = ($_POST['apellido'] !== "") ? $_POST['apellido'] : null;
        $correo      = ($_POST['correo'] !== "") ? $_POST['correo'] : null;
        $contrasenia = ($_POST['contrasenia'] !== "") ? $_POST['contrasenia'] : null;
        $tipousuario = ($_POST['tipousuario'] !== "") ? $_POST['tipousuario'] : null;

        $idusuario = $param[0];

        $this->FOTO();

        if ($this->model->Actualizar(
            [
                'foto_perfil' => $this->foto_perfil,
                'cedula'      => $cedula,
                'nombre'      => $nombre,
                'apellido'    => $apellido,
                'correo'      => $correo,
                'contrasenia' => $contrasenia,
                'tipousuario' => $tipousuario,
            ]
        )) {
            $this->mensaje = 'Usuario actualizado exitosamente!.';
        } else {
            $this->mensaje = 'Ha ocurrido un error.';
        }

        echo '<script type="text/javascript">swal("Exito!", "' . $this->mensaje . '", );</script>  ';

        return false;
    }

}
?>