<?php

  class Secciones_Class extends Modelo {  

  	private $trayecto;
    private $nombre;
    private $anio; 

    public function setSeccion($trayecto, $nombre, $anio)
    {
        $this->trayecto = $trayecto;
        $this->nombre   = $nombre;
        $this->anio     = $anio; 
    }
    public function getTracyecto()
    {
        return $this->trayecto;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getAnio()
    {
        return $this->anio;
    }
    function __construct() {
        parent::__construct();  
    }


    function Trayecto () { 
    
        $tabla            = "SELECT * FROM trayectos ORDER BY id_trayecto ASC";
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

    public function Registrar($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO secciones (id_trayecto, codigo_seccion) VALUES (:id_trayecto, :codigo_seccion)');

            $datos->execute([
                'id_trayecto' => $data['id_trayecto'],
                'codigo_seccion'     => $data['codigo_seccion'],
             ]);

            return true;

        } catch (PDOException $e) {
            return false;
        }
    } 

    function Secciones () { 
    
        $tabla            = "SELECT * FROM secciones ORDER BY codigo_seccion ASC";
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


    function BusquedaSecciones($trayecto,$seccion) { 
    
        $tabla            = "SELECT * FROM secciones WHERE id_trayecto=$trayecto AND codigo_seccion=$seccion";
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
        $tabla            = "SELECT * FROM secciones WHERE codigo_seccion LIKE  '$clave%' OR id_trayecto LIKE  '$clave%'  ORDER BY codigo_seccion ASC ";
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

    public function Eliminar_seccion($idseccion)
    {
        try {

            $query = $this->conexion->prepare('DELETE FROM secciones WHERE codigo_seccion = :codigo_seccion');
            $query->execute(['codigo_seccion' => $idseccion]);

            return true;

        } catch (PDOException $e) {

            echo $e->getMessage();
            return false;
        }
    } 

    public function Actualizar($data)
    {

        try {
            $query = $this->conexion->prepare("UPDATE seccion SET idtrayecto:idtrayecto, nombre=:nombre, anio=:anio WHERE idseccion =:idseccion");

            $datos->execute([
                'idtrayecto' => $data['idtrayecto'],
                'nombre'     => $data['nombre'],
                'anio'       => $data['anio'], 
                'idseccion'  => $data['idseccion'], 
             ]);

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    } 

  } 

?>