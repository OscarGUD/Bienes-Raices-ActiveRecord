<?php
    require '../../includes/app.php';
    
    
    use App\Propiedad;
    use App\Vendedores;
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();
    
    // Consulta para obtener todos los vendedores
    $vendedores = Vendedores::all();
    

    // Array con mensajes de errores
    $errores = Propiedad::getErrores();

    $propiedad = new Propiedad();

    // Ejecutar el codigo despues de que el usuario envie el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        /**Crea una nueva instancia */
        $propiedad = new Propiedad($_POST['propiedad']);

        /*SUBIDA DE ARCHIVOS*/

        // Crear carpeta
        $carpetaImagenes = '../../imagenes';


        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        };

        //Ganerar un nombre unico
        $nombreImagen = md5(uniqid(rand(), true).".jpg");

        // Setear la imagen
        // Realiza un resize a la imagen con intervention
        if ($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
        }
        
        // Validar    
        $errores = $propiedad->validar();    
        
        // Revisar que el array de errores este vacio
        if (empty($errores)) { 
            
            // Crear la carpeta para subir imagenes
            if (!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }

            // Guarda la imagen en el servidor
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            // Guarda en la base de datos
            $propiedad->guardar();   
            
        }
    }


    incluirTemplate('header');
 ?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton-verde">Volver</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>


        <form enctype="multipart/form-data" action=" " class="formulario" method="POST" action="/admin/propiedades/crear.php">

            <?php include '../../includes/templates/formulario_propiedades.php'?>

            <input type="submit" value="Crear Propiedad" class="boton-verde">
        </form>
    </main>
                    

<?php

    //  Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>