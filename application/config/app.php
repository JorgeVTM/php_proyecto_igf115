<?php
//Inicializamos nuestra aplicación

require_once 'application/controllers/errores.php';

//Mappeo de los Controladores
class App{
    
    function __construct(){

        //Optenemos la url y eliminamos los / innecesarios y creamos un arreglo.
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        
        // cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $dirControllers = 'application/'. 'controllers/home.php';
            require_once $dirControllers;
            $controller = new Home();
            //$controller->loadModel('home');
            $controller->render();
            return false;
        }

        //Creamos la url para los controladores
        $dirControllers = 'application/'. 'controllers/' . $url[0] . '.php';

        //Buscamos los controladores
        if(file_exists($dirControllers)){
            require_once $dirControllers;

            // inicializa el controlador
            $controller = new $url[0];
            // cargamos el modelo
            $controller->loadModel($url[0]);

            // Se obtienen el número de param
            $nparam = sizeof($url);
            // si se llama a un método
            if($nparam > 1){
                // hay parámetros
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    // solo se llama al método
                    $controller->{$url[1]}();
                }
            }else{
                // si se llama a un controlador
                $controller->render();  
            }
        }else{
            $controller = new Errores();
        }

    }
}
?>