<?php

class Database{


    //Variables para la conexión a la base de datos
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        //Inicializamos las variables
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    //Función que realiza la conexión
    function connect(){
        try{

            //Driver MYSQL
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

            // //Opciones
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            // //Creamos la conexión
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

}

?>