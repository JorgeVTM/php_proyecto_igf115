<div class="contenido">
    <!-- Navegación del contenido -->
    <nav>
        <h2>Grud para los cursos de una universidad. Proyecto HDP 115</h2>
    </nav>

    <!-- Mensaje de alerta -->
    <?php if (isset($_SESSION['message'])) { ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php session_unset(); }?>

    <!-- Sección del contenido de la pagina web -->
    <section>

        <!-- Formulario para los cursos-->
        <div class="registrar">
            <form action="crear.php" method="post" class="formulario">
                <div>
                    <h2>Registrar curso</h2>
                </div>
                <div>
                    <input type="text" name="txtnombre" id="idnombre" placeholder="Escriba el nombre del curso..." required>
                </div>
                <div>
                    <input type="number" name="txtcreditos" id="idcreditos" placeholder="Escriba los creditos..." required>
                </div>     
                <div>
                    <button class="boton"name="btnguardarCurso">Guardar Curso</button>
                </div>
            </form>
        </div>
        <!-- Fin del formulario -->

        <!-- Tabla para mostrar los cursos -->
        <div class="mostrar">
            <table class="tabla">
                <thead>
                    <th>Id Curso</th>
                    <th>Nombre Curso</th>
                    <th>Creditos</th>
                    <th>Opciones</th>
                </thead>
                <tbody>

                    <!-- Función que muestra los datos -->
                    <?php
                    $query = "SELECT * FROM cursos";
                    $cursos_listados = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($cursos_listados)){ ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['creditos'] ?></td>
                            <td>
                                <a href="modificar.php?id=<?php echo $row['id']?>" class="boton">Editar</a>
                                <a href="eliminar.php?id=<?php echo $row['id']?>" class="boton">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fin de la tabla -->
        </div>
    </section>
</div>