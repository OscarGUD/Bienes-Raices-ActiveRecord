<?php


use App\Propiedad;
use App\Vendedores;
use Intervention\Image\ImageManagerStatic as Image;

require '../../includes/app.php';
    estaAutenticado();

    // Consulta para obtener todos los vendedores
    $vendedores = Vendedores::all();

    // Validar la URL por Id válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('location: /admin');
    };

    // Obterner los datos de la propiedad
    $propiedad = Propiedad::find($id);

    //Consulatar para obetener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Array con mensajes de errores
    $errores = Propiedad::getErrores();



    // Ejecutar el codigo despues de que el usuario envie el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        // Asignar los atributos
        $args = $_POST['propiedad'];
        
        $propiedad->sincronizar($args);

        // Validacion
        $errores = $propiedad->validar();

        //Ganerar un nombre unico
        $nombreImagen = md5(uniqid(rand(), true).".jpg");

        // Subida de archivos
        if ($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
        }
    
        
        // Revisar que el array de errores este vacio
        if (empty($errores)) {

            // Almacenar la imagen
            if ($_FILES['propiedad']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }
            
            $propiedad->guardar(); 
            
        }

    }
    incluirTemplate('header');
 ?>
    <main class="contenedor seccion">
        <h1>Actualizar Propiedades</h1>

        <a href="/admin" class="boton-verde">Volver</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>


        <form enctype="multipart/form-data" action=" " class="formulario" method="POST" >

            <?php include '../../includes/templates/formulario_propiedades.php'?>

            <input type="submit" value="Actualizar Propiedad" class="boton-verde">
        </form>
    </main>
                    

<?php

    //  Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>