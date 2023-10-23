<?php
Class View{


    //Constructor
    function __construct(){
    }

    //Cargamos las vistas.
    function render($nombre){
        require 'application/'. 'views/' . $nombre . '.php';
    }

}

?>