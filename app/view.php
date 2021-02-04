<?php

class Vista{ 
 
    function __construct(){
        //echo "<p>Vista principal</p>";
    }

    function Cargar_Vistas($nombre){
        require 'vista/' . $nombre . '.php';
    }
}

?>