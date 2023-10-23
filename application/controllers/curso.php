<?php

    class Curso extends Controller{

        public function __construct(){
            //Llamada al controlador padre
            parent::__construct();
            $this->view->cursos = [];
        }

        function render(){

            //Mostramos los datos de la base de datos
            $cursos = $this->model->selectall();
            $this->view->cursos = $cursos;
            $this->view->render('curso/index');
        }

        function registrar(){
            
            //Capturar datos
            $nombre     = $_POST['nombre'];
            $creditos   = $_POST['creditos'];

            if($this->model->insert(['nombre' => $nombre, 'creditos' => $creditos])){

                $this->view->mensaje = '<div class="alert alert-success alert-dismissible fade show m-0" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Curso registrado!</div>';

            }else{

                $this->view->mensaje = '<div class="alert alert-warning alert-dismissible fade show m-0" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>El curso ya existe!</div>';

            }

            $this->render();
        }

        //Función para obtener un curso por id
        function verCurso($param = null){
            $idCurso = $param[0];
            $curso = $this->model->getById($idCurso);
    
            session_start();
            $_SESSION["id_verCurso"] = $curso->id;
    
            $this->view->curso = $curso;
            $this->render();
        }

        //Función actualizar un curso
        function actualizar($param = null){
            session_start();
            $id = $_SESSION["id_verCurso"];
            $nombre    = $_POST['nombre'];
            $creditos  = $_POST['creditos'];
    
    
            unset($_SESSION['id_verAlumno']);
    
            if($this->model->update(['id' => $id, 'nombre' => $nombre, 'creditos' => $creditos])){
                $curso = new ObjCurso();
                $curso->id = $id;
                $curso->nombre = $nombre;
                $curso->creditos = $creditos;
    
                $this->view->curso = $curso;

                $this->view->mensaje = '<div class="alert alert-success alert-dismissible fade show m-0" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>Curso Actualizado!</div>';
            }else{

                $this->view->mensaje = '<div class="alert alert-warning alert-dismissible fade show m-0" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>No se puede actualizar el curso!</div>';
            }
            $this->render();
        }
    }

?>