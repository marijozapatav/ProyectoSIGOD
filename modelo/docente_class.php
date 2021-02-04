<?php

class Docente_Class extends Modelo
{

    private $foto;
    private $cedula;

    private $prinombre;
    private $segnombre;

    private $priapellido;
    private $segapellido;

    private $telefono;
    private $correo;

    private $fecha;
    private $categoria;
    private $dedicacion;
    private $relacion;
    private $colaboracion;

    private $tiempo;

    public function setFormulario($foto, $cedula, $prinombre, $segnombre, $priapellido, $segapellido, $telefono, $correo, $fecha, $dedicacion, $relacion, $colaboracion, $tiempo)
    {

        $this->foto   = $foto;
        $this->cedula = $cedula;

        $this->prinombre = $prinombre;
        $this->segnombre = $segnombre;

        $this->priapellido = $priapellido;
        $this->segapellido = $segapellido;

        $this->telefono = $telefono;
        $this->correo   = $correo;

        $this->fecha        = $fecha;
        $this->categoria    = $categoria;
        $this->dedicacion   = $dedicacion;
        $this->relacion     = $relacion;
        $this->colaboracion = $colaboracion;

        $this->tiempo = $tiempo;

    }

    public function getFoto()
    {
        return $this->foto;}

    public function getCedula()
    {
        return $this->cedula;}

    public function getPrinombre()
    {
        return $this->prinombre;
    }
    public function getSegnombre()
    {
        return $this->segnombre;
    }

    public function getPriapellido()
    {
        return $this->priapellido;}

    public function getSegpellido()
    {
        return $this->segapellido;}

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCorreo()
    {
        return $this->correo;

    }

    public function getFecha()
    {
        return $this->fecha;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getDedicacion()
    {
        return $this->dedicacion;
    }
    public function getRelacion()
    {
        return $this->relacion;
    }

    public function getColaboracion()
    {
        return $this->colaboracion;
    }
    public function getTiempo()
    {
        return $this->tiempo;
    }


        public function RegistrarIngreso($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO ingresos (anio_ingreso, post_traslado, experiencia) VALUES (:anio_ingreso, :post_traslado, :experiencia)'); 

            $datos->execute([
                'anio_ingreso'        => $data['anio_ingreso'],
                'post_traslado'        => $data['post_traslado'],
                'experiencia'      => $data['experiencia'],

             ]); 

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }


        public function RegistrarTitulos($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO docentes_titulos (cedula, id_titulo) VALUES (:cedula, :id_titulo)'); 

            $datos->execute([
                'cedula'        => $data['cedula'],
                'id_titulo'        => $data['id_titulo']

             ]); 

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

            public function RegistrarDocente($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO docentes (cedula, primer_nombre, segundo_nombre,primer_apellido,segundo_apellido,correo,direccion,telefono,id_municipio,id_ingreso,id_categoria,id_relacion_laboral,id_dedicacion,id_area,id_concurso) VALUES (:cedula,:primer_nombre,:segundo_nombre,:primer_apellido,:segundo_apellido,:correo,:direccion,:telefono,:id_municipio,:id_ingreso,:id_categoria,:id_relacion_laboral,:id_dedicacion,:id_area,:id_concurso)'); 

            $datos->execute([
                'cedula'        => $data['cedula'],
                'primer_nombre'        => $data['primer_nombre'],
                'segundo_nombre'      => $data['segundo_nombre'],
                'primer_apellido'      => $data['primer_apellido'],
                'segundo_apellido'      => $data['segundo_apellido'],
                'correo'      => $data['correo'],
                'direccion'      => $data['direccion'],
                'telefono'      => $data['telefono'],
                'id_municipio'      => $data['id_municipio'],
                'id_ingreso'      => $data['id_ingreso'],
                'id_categoria'      => $data['id_categoria'],
                'id_relacion_laboral'      => $data['id_relacion_laboral'],
                'id_dedicacion'      => $data['id_dedicacion'],
                'id_area'      => $data['id_area'],
                'id_concurso'      => $data['id_concurso'],
             ]); 

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

   public function idIngreso(){
        $tabla            = "SELECT MAX(id_ingreso) FROM ingresos ";
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


    public    function DocentesBusqueda ($ced) { 
    
        $tabla            = "SELECT * FROM docentes WHERE cedula=$ced";
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


     public   function Docentes () { 
    
        $tabla            = "SELECT * FROM docentes D,categorias C,areas A WHERE D.id_categoria=C.id_categoria AND D.id_area=A.id_area  ORDER BY D.primer_nombre ASC";
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
        $tabla            = "SELECT * FROM docentes D, categorias C, areas A WHERE D.cedula LIKE '$clave%' AND D.id_categoria=C.id_categoria AND D.id_area=A.id_area OR D.primer_nombre LIKE  '$clave%' AND D.id_categoria=C.id_categoria AND D.id_area=A.id_area OR D.primer_apellido LIKE  '$clave%' AND D.id_categoria=C.id_categoria AND D.id_area=A.id_area OR A.nombre_area LIKE '$clave%' AND D.id_categoria=C.id_categoria AND D.id_area=A.id_area OR C.nombre_categoria LIKE '$clave%' AND D.id_categoria=C.id_categoria AND D.id_area=A.id_area  ORDER BY D.primer_nombre ASC ";
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




        function Municipios () { 
    
        $tabla            = "SELECT * FROM municipios ORDER BY nombre ASC";
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

        function Categorias () { 
    
        $tabla            = "SELECT * FROM categorias ORDER BY nombre_categoria ASC";
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

        function Dedicacion () { 
    
        $tabla            = "SELECT * FROM dedicaciones ORDER BY nombre_dedicacion ASC";
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

        function RelacionL () { 
    
        $tabla            = "SELECT * FROM relaciones_laborales ORDER BY nombre_relacion ASC";
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

        function Concurso () { 
    
        $tabla            = "SELECT * FROM concursos ORDER BY tipo_concurso ASC";
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


        function Areas () { 
    
        $tabla            = "SELECT * FROM areas ORDER BY nombre_area ASC";
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

            function Titulos () { 
    
        $tabla            = "SELECT * FROM titulos ORDER BY nombre_titulo ASC";
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

            public function Eliminar_docente($cedula)
    {
        try { 

            $query = $this->conexion->prepare('DELETE FROM docentes WHERE cedula = :cedula');
            $query->execute(['cedula' => $cedula]);

            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }

    public function __construct()
    {
        parent::__construct();
    }

}
?>