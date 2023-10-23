<?php include "application/views/templates/header.php"; ?>

<h1 class="text-center my-4">Gestión de los cursos</h1>

<div class="d-flex justify-content-center">
    <!-- Button trigger modal -->

    <div>
        <div class="row align-items-center" style="height: 80px">
            <div class="col-sm-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearCurso">
                    Nuevo
                </button>
            </div>
            <div class="col-sm-10">
                <?php echo $this->mensaje; ?>
            </div>
        </div>


        <div class="card py-4" style="width: 1000px">
            <table class="table table-responsive-xxl table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Creditos</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                        include_once 'application/models/objcurso.php';
                        foreach ($this->cursos as $row) {
                        $curso = new ObjCurso();
                        $curso = $row;
                    ?>
                    <tr>
                        <td><?php echo $curso->id; ?></td>
                        <td><?php echo $curso->nombre; ?></td>
                        <td><?php echo $curso->creditos; ?></td>
                        <td>
                            <!-- <a class="btn btn-dark"  href="<?php echo constant('URL') . 'curso/verCurso/' . $curso->id; ?>">Actualizar</a> -->
                            <button class="btn btn-warning" data-curso="<?php echo $curso->id; ?>">Eliminar</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actualizarCurso">
                            Actualizar
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    

    <!-- Modal Crear Curso -->
    <div class="modal fade" id="crearCurso" tabindex="-1">
      <form action="<?php echo constant('URL'); ?>curso/registrar" method="POST" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Registar curso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="creditos" class="form-label">Creditos</label>
                    <input type="number" class="form-control" id="creditos" name="creditos" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
      </form>
    </div>

        <!-- Modal Actualizar curso -->
        <div class="modal fade" id="actualizarCurso" tabindex="-1">
      <form action="<?php echo constant('URL'); ?>curso/actualizar" method="POST" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Actualizar curso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="creditos" class="form-label">Creditos</label>
                    <input type="number" class="form-control" id="creditos" name="creditos" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
      </form>
    </div>
</div>

<?php include "application/views/templates/footer.php"; ?>