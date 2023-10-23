<?php

    class Home extends Controller{


        public function __construct(){
            //Llamada al controlador padre
            parent::__construct();
            $this->view->mensaje = "Bienvenido al Início";
        }

        function render(){
            $this->view->render('home/index');
        }

    }

?>