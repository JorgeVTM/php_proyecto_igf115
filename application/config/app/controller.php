<?php
Class Controller{

    function __construct(){
        $this->view = new View();
    }

    //Función para el modelo
    function loadModel($model){
        //url
        $url = 'application/models/' . $model . 'model.php';

        //Si existe el archivo, lo llamamos y creamos el modelo
        if(file_exists($url)){
            require $url;

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }

}

?>