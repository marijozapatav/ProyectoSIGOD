<?php

class Cohorte_Class extends Modelo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Registrar($data)
    {

        try {

            $datos = $this->conexion->prepare('INSERT INTO cohortes (numero_cohorte, fecha_cohorte, descripcion_cohorte) VALUES (:numero_cohorte, :fecha_cohorte, :descripcion_cohorte)');

            $datos->execute([
                'numero_cohorte'      => $data['numero_cohorte'],
                'fecha_cohorte'       => $data['fecha_cohorte'],
                'descripcion_cohorte' => $data['descripcion_cohorte'],
            ]);

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }


            function Cohortes () { 
    
        $tabla            = "SELECT * FROM cohortes ORDER BY numero_cohorte ASC";
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

}
?> 