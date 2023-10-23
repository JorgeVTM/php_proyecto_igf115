<?php

//Abrimos la conección
include("connection.php");

//Eliminanos cursos de la base de datos
if(isset($_GET['id'])) {

    //Tomamos el parametro id
    $id = $_GET['id'];

    //Consulta para eliminar un curso
    $query = "DELETE FROM cursos WHERE id = $id";
    $result = mysqli_query($conn, $query);

    //Si la consulta genera un error
    if(!$result) {
        die("Query Failed.");
    }

    //Retornamos al inicio
    $_SESSION['message'] = 'Curso eliminado';
    header('Location: index.php');
}
?>