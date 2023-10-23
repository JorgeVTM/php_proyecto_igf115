<?php
//Abrimos la conección
include("connection.php");

//Validamos el metodo post y capturamos la acción del boton
if (isset($_POST['btnguardarCurso'])){

    //Tomamos los datos
    $nombre = $_POST['txtnombre'];
    $creditos = $_POST['txtcreditos'];

    //Creamos la consulta
    $query = "INSERT INTO cursos (nombre, creditos) VALUES ('$nombre','$creditos')";

    //Guardamos
    $resultado = mysqli_query($conn, $query);

    if(!$resultado) {
        die("Query Failed.");
    }

    //Retornamos al inicio
    $_SESSION['message'] = 'Curso Listado';

    header('Location: index.php');
}
?>