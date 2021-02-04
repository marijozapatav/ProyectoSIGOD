<?php

  class Aula_Class extends Modelo { 
 
  	private $nombre; 
    private $tipo;

    public function setaula($nombre, $tipo)
    { 
       
        $this->nombre   = $nombre;
        $this->tipo     = $tipo;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function gettipo() 
    {
        return $this->tipo;
    }

    function __construct() {
        parent::__construct();
    }

    public function RegistrarAula($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO aulas (numero, nombre_aula, ubicacion, asignacion,capacidad) VALUES (:numero, :nombre_aula, :ubicacion, :asignacion, :capacidad)');

            $datos->execute([
                'numero'        => $data['numero'],
                'nombre_aula'   => $data['nombre_aula'],
                'ubicacion'     => $data['ubicacion'],
                'asignacion'     => $data['asignacion'],
                'capacidad'     => $data['capacidad']
             ]);

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

        public function RegistrarDisponibilidad($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO disponibilidades (nombre_disponibilidad, turno, dia_disponibilidad) VALUES (:nombre_disponiblidad, :turno, :dia)');

            $datos->execute([
                'nombre_disponiblidad'        => $data['nombre_disponibilidad'],
                'turno'   => $data['turno'],
                'dia'     => $data['dia']
             ]);

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

            public function RegistrarAulaDisponibilidad($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO aulas_disponibilidades (id_aulas,id_disponibilidades) VALUES (:id_aula,:id_disponibilidad)');

            $datos->execute([
                  'id_aula'=>$data['id_aula'],
                  'id_disponibilidad'=>$data['id_disponibilidad']
             ]);

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

       public function id_disponibilidad(){
        $tabla            = "SELECT MAX(id_disponibilidad) FROM disponibilidades ";
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

          public function idAula(){
        $tabla            = "SELECT MAX(id_aula) FROM aulas ";
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

    function Disponibilidades () { 
    
        $tabla            = "SELECT * FROM disponibilidades ORDER BY id_disponibilidad ASC";
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

        function Aulas () { 
    
        $tabla            = "SELECT * FROM aulas ORDER BY nombre_aula ASC";
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
        $tabla            = "SELECT * FROM aulas WHERE nombre_aula LIKE  '$clave%' OR numero LIKE  '$clave%' OR ubicacion LIKE  '$clave%' OR capacidad LIKE '$clave%'  ORDER BY nombre_aula ASC ";
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


        public function Eliminar_aula($idaula)
    {
        try {

            $query = $this->conexion->prepare('DELETE FROM aulas WHERE id_aula = :id_aula');
            $query->execute(['id_aula' => $idaula]);

            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    }

    public function Actualizar($data)
    {

        try {
            $query = $this->conexion->prepare("UPDATE aulas SET nombre=:nombre, tipo=:tipo WHERE idaula =:idaula");

            $datos->execute([
                'nombre' => $data['nombre'],
                'tipo'   => $data['tipo'],
                'idaula' => $data['idaula'],
             ]);

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    } 


  } 

?>