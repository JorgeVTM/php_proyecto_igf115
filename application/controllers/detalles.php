<?php

    class Detalles extends Controller{

        public function __construct(){
            //Llamada al controlador padre
            parent::__construct();
        }

        function render(){
            $this->view->render('detalles/index');
        }

    }

?>