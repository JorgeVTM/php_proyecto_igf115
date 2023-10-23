<?php

    include_once 'application/models/objcurso.php';

    //Modelo para los cursos
    class CursoModel extends Model{

        //Contructor
        public function __construct(){
            parent::__construct();
        }

        //Función para insertar datos en la base de datos
        public function insert($datos){
            // insertar datos en la db

            //llamamos el objeto conexión a la db
            $query = $this->db->connect()->prepare('INSERT INTO cursos (nombre,creditos) VALUES (:nombre, :creditos)');

            //mappeo de datos
            try{
                $query->execute([
                    'nombre' => $datos['nombre'], 
                    'creditos' => $datos['creditos']
                ]);
                return true;

            }catch(PDOException $e){
                //echo $e->getMessage();
                return false;
            }
        }

        //Función para insertar datos en la base de datos
        public function selectall(){
            // mostrar datos
            $items = [];

            
            try{
                //Creamos la consulta y la ejecutamos
                $query = $this->db->connect()->query('SELECT * FROM cursos');
                
                //Encapsulamos los datos
                while($row = $query->fetch()){
                    $item = new ObjCurso();
                    $item->id = $row['id'];
                    $item->nombre = $row['nombre'];
                    $item->creditos = $row['creditos'];
    
                    array_push($items, $item);
                }
                return $items;

            }catch(PDOException $e){

                return [];
            }
        }

        //Obtener por id
        public function getById($id){
            $item = new ObjCurso();
            try{
                $query = $this->db->connect()->prepare('SELECT * FROM cursos WHERE id = :id');
    
                $query->execute(['id' => $id]);
                
                while($row = $query->fetch()){
                    
                    $item->id = $row['id'];
                    $item->nombre    = $row['nombre'];
                    $item->creditos  = $row['creditos'];
                }
                return $item;
            }catch(PDOException $e){
                return null;
            }
        }

        //Actualizar datos
        public function update($item){
            $query = $this->db->connect()->prepare('UPDATE cursos SET nombre = :nombre, creditos = :creditos WHERE id = :id');
            try{
                $query->execute([
                    'id' => $item['id'],
                    'nombre' => $item['nombre'],
                    'creditos' => $item['creditos']
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }
    }
?>