<?php

class Permisos_Class extends Modelo 
{

  //  private $foto;
    private $usuario;
    private $estado;
    private $rol_inicio;
    private $modulo;
    private $ver;
    private $consultar;
    private $registrar;
    private $modificar;
    private $reportar;
    private $eliminar;
 

    public function setFormulario( $usuario, $estado, $rol_inicio, $modulo, $ver,$consultar,$registrar,$modificar,$reportar,$eliminar)
    {

     //   $this->foto        = $foto;
        $this->usuario      = $usuario;
        $this->estado    = $estado;
        $this->rol_inicio      = $rol_inicio;
        $this->modulo      = $modulo;
        $this->ver = $ver;
        $this->consultar = $consultar;
        $this->registrar = $registrar;
        $this->modificar = $modificar;
        $this->reportar = $reportar;
        $this->eliminar = $eliminar;
   //     $this->tipousuario = $tipousuario;

    }



    public function getUsuario()
    {
        return $this->usuario;}

    public function getEstado()
    {
        return $this->estado;}

    public function getRol_inicio()
    {
        return $this->rol_inico;}

    public function getVer()
    {
        return $this->ver;}

    public function getConsultar()
    {
        return $this->consutar;}

    public function getRegistrar()
    {
        return $this->registrar;}

    public function getModificar()
    {
        return $this->modificar;}

        public function getReportar()
        {
            return $this->reportar;}

            public function getEliminar()
            {
                return $this->eliminar;}

    public function __construct()
    {
        parent::__construct();
    }

    public function Registrar($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO permisos_usuario_modulos (usuario, estado, rol_inicio, modulo, ver, consultar,registrar,modificar,reportar,eliminar) VALUES (:usuario, :estado, :rol_inicio, :modulo, :ver, :consultar, :registrar, :modificar, :reportar, :eliminar)'); 

            $datos->execute([
                'usuario'        => $data['usuario'],
                'estado'        => $data['estado'],
                'rol_inicio'      => $data['rol_inicio'],
                'modulo'       => $data['modulo'],
                'ver'        => $data['ver'],
                'consultar'   => $data['consultar'],
                'registrar'   => $data['registrar'],
                'modificar'        => $data['modificar'],
                'reportar'=> $data['reportar'],
                'eliminar'=> $data['eliminar']
             ]); 

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    function Permisos () { 
    
        $tabla            = "SELECT * FROM permisos_usuario_modulos ORDER BY id_permisos_usuario_modulos ASC";
        $respuestaArreglo = '';
        try { 
            $datos = $this->conexion->prepare($tabla);
            $datos->execute();
            $datos->setFetchMode(PDO::FETCH_ASSOC);
            $respuestaArreglo = $datos->fetchAll(PDO::FETCH_ASSOC);
            return $respuestaArreglo;
        } catch (PDOException $e) {

            $errorReturn = ['estatus' => false];
            $errorReturn += ['info' => "error sql:{$e}"];
            return $errorReturn;
        }
    }

    
    function PermisosBusqueda ($ced) { 
    
        $tabla            = "SELECT * FROM permisos_usuario_modulos WHERE usuario=$ced";
        $respuestaArreglo = '';
        try { 
            $datos = $this->conexion->prepare($tabla);
            $datos->execute();
            $datos->setFetchMode(PDO::FETCH_ASSOC);
            $respuestaArreglo = $datos->fetchAll(PDO::FETCH_ASSOC);
            return $respuestaArreglo;
        } catch (PDOException $e) {

            $errorReturn = ['estatus' => false];
            $errorReturn += ['info' => "error sql:{$e}"];
            return $errorReturn;
        }
    }

        public function Eliminar_permisos($usuario)
    {
        try { 

            $query = $this->conexion->prepare('DELETE FROM permisos_usuario_modulos WHERE usuario = :usuario');
            $query->execute(['usuario' => $param]);

            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }

    public function Actualizar($data)
    {

        try {
            $query = $this->conexion->prepare("UPDATE permisos_usuario_modulos SET 
                usuario      =   :usuario,
                estado      =   :estado,
                rol_inicio    =   :rol_inicio,
                modulo     =   :modulo,
                ver      =   :ver,
                consultar =   :consultar,
                registrar =   :registrar,
                modificar =   :modificar,
                reportar =   :reportar,
                eliminar =   :eliminar,
          
                WHERE usuario =:usuario"
            );

            $datos->execute([
                'usuario'        => $data['usuario'],
                'estado'        => $data['estado'],
                'rol_inicio'      => $data['rol_inicio'],
                'modulo'       => $data['modulo'],
                'ver'        => $data['ver'],
                'consultar'   => $data['consultar'],
                'registrar'   => $data['registrar'],
                'modificar'   => $data['modificar'],
                'reportar'   => $data['reportar'],
                'eliminar'   => $data['eliminar'],
          //      'foto_perfil'   => $data['foto_perfil'],
         //       'id_rol'        => $data['id_rol'],
             ]);

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    } 
}
?>