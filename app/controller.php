<?php

class Controlador{  

    function __construct(){
        $this->vista = new Vista();
    }

    function Cargar_Modelo($model){
        $url = 'modelo/'.$model.'_class.php';

        if(file_exists($url)){
            require $url;
            
            $modelName = $model.'_Class';
            $this->model = new $modelName();
        }
    }
} 

?>