<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Proyecto Tarea exaula 2</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/styles.css">
</head>
<body class="h-100">
  <header>
    <!-- Navegación principal -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
        <h1 class="navbar-brand mb-0" href="index">Bienvenidos</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href='<?php echo constant('URL'); ?>home'>Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>curso">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>detalles">Detalles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo constant('URL'); ?>contactos">Contactos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <!-- Main principal -->
  <main class="d-flex flex-column container-fluid p-0 mb-4">


  