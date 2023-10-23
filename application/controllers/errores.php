<?php

Class Errores extends Controller{

    public function __construct(){
        //Llamada al controlador padre
        parent::__construct();
        $this->view->mensaje = "Error 404";
        $this->view->render('error/index');
    }
}
?>