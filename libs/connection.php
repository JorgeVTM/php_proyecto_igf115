<?php

//Iniciamos una nueva sesion
session_start();

//Conectamos a la base de datos
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'universidad',
) or die(mysqli_erro($mysqli));

//Una comprobación si estamos conectados
// if (isset($conn)){
//     echo 'DB is connected';
// }
?>