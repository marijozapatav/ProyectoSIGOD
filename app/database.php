<?php

ini_set("max_execution_time", "0");
error_reporting(E_ERROR);

use PDO as pdo;

class BASE_DATOS extends PDO 
{

    private $servidor = SERVIDOR;

    private $host    = HOST;
    private $port    = PORT;
    private $bd      = BD;

    private $user_mysql     = USER1;
    private $password_mysql = PASSWORD1;

    private $user_pgsql     = USER2;
    private $password_pgsql = PASSWORD2;

    private $repetir_conexion;
    private $error_conexion;

    public function __construct()
    {

        switch ($this->servidor) {
            case 'mysql':
                $this->Conexion_Mysql();
                break;

            case 'pgsql':
                $this->Conexion_Pgsql();
                break;

            default:
                echo "ERROR! El Gestor De Base De Datos No Es Reconocido";
                break;
        }
    }

    public function Conexion_Mysql()
    {
        $DNS = "{$this->servidor}:host={$this->host};dbname={$this->bd};";

        $opciones = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            #Reporte de errores (Lanza exceptions)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            #Establece el modo de recuperación predeterminado
            PDO::ATTR_PERSISTENT         => true,
            #utiliza conexiones persistentes
            PDO::ATTR_EMULATE_PREPARES   => false,
            #Habilita o deshabilita la emulación de declaraciones preparadas.
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\'',
            #Comando a ejecutar cuando se conecta al servidor MySQL
        );

        try
        {
            $conexion = parent::__construct($DNS, $this->user_mysql, $this->password_mysql, $opciones);

            $this->repetir_conexion = true;
            $this->error_conexion   = "";
            $this->comprobar        = "Conexion Exitosa";

            return $conexion;

        } catch (PDOException $e) 
        {
            $this->error_conexion = 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            $this->comprobar      = "Conexion Fallida !";
            return false;
        }
    }

    public function Conexion_Pgsql()
    {
        $opciones = [
            PDO::ATTR_PERSISTENT         => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try
        {
            $conexion = parent::__construct(
                "$this->servidor:
                    host       =   $this->host     ;
                    port       =   $this->port     ;
                    dbname     =   $this->bd       ;
                    user       =   $this->user_pgsql     ;
                    password   =   $this->password_pgsql ;
                "
            );
            parent::setAttribute($opciones);
            $this->repetir_conexion = true;
            $this->error_conexion   = "";
            $this->comprobar        = "Conexion Exitosa";

            return $conexion;

        } catch (PDOException $e) 
        {
            $this->error_conexion = 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            $this->comprobar      = "Conexion Fallida !";
            return false;
        }
    }

    public function Probar_Conexion()
    {return $this->comprobar;}

    public function getRepetir_Conexion()
    {return $this->repetir_conexion;}

    public function getError_Conexion()
    {return $this->error_conexion;}

}
?>