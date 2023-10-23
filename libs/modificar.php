<?php
//Abrimos la conección
include("connection.php");

$nombre = '';
$creditos= '';

//Obtenemos los datos de la base de datos
if  (isset($_GET['id'])) {

    //Capturamos el parametro id
    $id = $_GET['id'];

    //Consulta para obtener los datos
    $query = "SELECT * FROM cursos WHERE id=$id";

    //Enviamos consulta
    $result = mysqli_query($conn, $query);

    //Tomamos los resultados del arreglo para mostralos en pantalla
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $creditos = $row['creditos'];
    }
}

//Actualizamos los datos
if (isset($_POST['actualizar'])) {


    //Capturamos el parametro del formulario
    $id = $_GET['id'];
    $nombre= $_POST['txtnombre'];
    $creditos = $_POST['txtcreditos'];

    //Consulta para modificar los datos
    $query = "UPDATE cursos set nombre = '$nombre', creditos = '$creditos' WHERE id=$id";
    mysqli_query($conn, $query);

    //Retornamos al inicio
    $_SESSION['message'] = 'Curso modificado';
    header('Location: index.php');
}

?>

<?php include('Views/Layouts/header.php'); ?>
<div class="contenido">
    <section>
        <!-- Formulario para modificar los cursos -->
        <div>
            <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="POST" class="formulario">
                <div>
                    <h2>Modificar cursos</h2>
                </div>
                <div>
                    <input name="txtnombre" type="text" value="<?php echo $nombre; ?>" placeholder="Update Title"/>
                </div>
                <div>
                    <input type="number" name="txtcreditos" value="<?php echo $creditos;?>" placeholder="Update Title"/>
                </div>
                <div>
                    <button class="boton" name="actualizar">Actualizar</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php include('Views/Layouts/footer.php'); ?>