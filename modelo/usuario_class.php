<?php

class Usuario_Class extends Modelo 
{

  //  private $foto;
    private $nombre;
    private $apellido;
    private $cedula;
    private $correo;
    private $contrasenia;
 //   private $tipousuario;
    private $preguntaseguridad;
    private $estado;
    private $rol_inicio;


    public function setFormulario( $nombre, $apellido, $cedula, $correo, $contrasenia,$estado,$rol_inicio)
    {

     //   $this->foto        = $foto;
        $this->nombre      = $nombre;
        $this->apellido    = $apellido;
        $this->cedula      = $cedula;
        $this->correo      = $correo;
        $this->contrasenia = $contrasenia;
       $this->estado = $estado;
       $this->rol_inicio=$rol_inicio;

    }

    public function setFormularioS( $nombre, $apellido, $cedula, $correo, $contrasenia)
    {
     //   $this->foto              = $foto;
        $this->nombre            = $nombre;
        $this->apellido          = $apellido;
        $this->cedula            = $cedula;
        $this->correo            = $correo;
        $this->contrasenia       = $contrasenia;
    //    $this->tipousuario       = $tipousuario;
     //   $this->preguntaseguridad = $preguntaseguridad;

    }
    public function getFoto()
    {
        return $this->foto;}

    public function getNombre()
    {
        return $this->nombre;}

    public function getApellido()
    {
        return $this->apellido;}

    public function getCedula()
    {
        return $this->cedula;}

    public function getcorreo()
    {
        return $this->correo;}

    public function getContrasenia()
    {
        return $this->contrasenia;}

    public function getTipousuario()
    {
        return $this->tipousuario;}

    public function getSeguridad()
    {
        return $this->preguntaseguridad;}

        public function getEstado()
        {
            return $this->estado;}

            public function getRolInicio()
            {
                return $this-rol_inicio;}

    public function __construct()
    {
        parent::__construct();
    }

    public function Registrar($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO usuarios (cedula, nombre, apellido, fecha_n, correo, contrasenia,estado,rol_inicio) VALUES (:cedula, :nombre, :apellido, :fecha_n, :correo, :contrasenia,:estado,:rol_inicio)'); 

            $datos->execute([
                'cedula'        => $data['cedula'],
                'nombre'        => $data['nombre'],
                'apellido'      => $data['apellido'],
                'fecha_n'       => $data['fecha_n'],
                'correo'        => $data['correo'],
                'contrasenia'   => $data['contrasenia'],
                'estado'   => $data['estado'],
                'rol_inicio'        => $data['rol_inicio'],
             //   'status_usuario'=> $data['status_usuario']
             ]); 

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    function Usuarios () { 
    
        $tabla            = "SELECT * FROM usuarios ORDER BY nombre ASC";
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

    
    function UsuariosBusqueda ($ced) { 
    
        $tabla            = "SELECT * FROM usuarios WHERE cedula=$ced";
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


        function BusquedaDinamica ($clave) { 
        $tabla            = "SELECT * FROM usuarios WHERE cedula LIKE  '$clave%' OR nombre LIKE  '$clave%' OR apellido LIKE  '$clave%' ORDER BY nombre ASC ";
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

        public function Eliminar_usuario($cedula)
    {
        try { 

            $query = $this->conexion->prepare('DELETE FROM usuarios WHERE cedula = :cedula');
            $query->execute(['cedula' => $cedula]);

            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }

    public function Actualizar($data)
    {

        try {
            $query = $this->conexion->prepare("UPDATE usuarios SET 
                cedula      =   :cedula,
                nombre      =   :nombre,
                apellido    =   :apellido,
                fecha_n     =   :fecha_n,
                correo      =   :correo,
                contrasenia =   :contrasenia,
                estado =   :estado,
                rol_inicio =   :rol_inicio,
          
                WHERE cedula =:cedula"
            );

            $datos->execute([
                'cedula'        => $data['cedula'],
                'nombre'        => $data['nombre'],
                'apellido'      => $data['apellido'],
                'fecha_n'       => $data['fecha_n'],
                'correo'        => $data['correo'],
                'contrasenia'   => $data['contrasenia'],
                'estado'   => $data['contrasenia'],
                'rol_inicio'   => $data['rol_inicio'],
          //      'foto_perfil'   => $data['foto_perfil'],
         //       'id_rol'        => $data['id_rol'],
             ]);

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    } 


    //--------------PERMISOS DE USUARIO------------------//



                public function RegistrarPermisos($data)
                {
            
                    try {
                        
                        $datos = $this->conexion->prepare('INSERT INTO permisos_usuario_modulo (usuario, modulo, ver, consultar,registrar,modificar,reportar,eliminar) VALUES (:usuario, :modulo, :ver, :consultar, :registrar, :modificar, :reportar, :eliminar)'); 
            
                        switch($data['rol']){
                            case "Super Usuario":
                                for($i=1;$i<10;$i++){
                                    $datos->execute([
                                        'usuario'        => $data['usuario'],
                                        'modulo'       => $i,
                                        'ver'        => '1',
                                        'consultar'   => '1',
                                        'registrar'   => '1',
                                        'modificar'        => '1',
                                        'reportar'=> '1',
                                        'eliminar'=> '1'
                                     ]); 
                                }
                            break;
                        }
                        
                       
            
                        return true;
            
                    } catch (PDOException $e) {
                        return false;
                    }


                }

                
    function Permisos () { 
    
        $tabla            = "SELECT * FROM permisos_usuario_modulo ORDER BY id_permisos_usuario_modulo ASC";
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
    
        $tabla            = "SELECT * FROM permisos_usuario_modulo WHERE usuario=$ced";
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

            $query = $this->conexion->prepare('DELETE FROM permisos_usuario_modulo WHERE usuario = :usuario');
            $query->execute(['usuario' => $param]);

            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }

    
    public function ActualizarPermisos($data)
    {

        try {
            $query = $this->conexion->prepare("UPDATE permisos_usuario_modulo SET 
                usuario      =   :usuario,
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