<?php

require '../../includes/app.php';
use App\Vendedores;
estaAutenticado();

// Validar que sea un ID valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('location: /admin');
}

// Obtener el arreglo dle vendedor
$vendedor = Vendedores::find($id);

// Array con mensajes de errores
$errores = Vendedores::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Asignar los valores
    $args = $_POST['vendedor'];

    // Sincronizar objeto en memoria
    $vendedor->sincronizar($args);

    // Validacion
    $errores = $vendedor->validar();

    if(empty($errores)){
        $vendedor->guardar();
    }

}

incluirTemplate('header');

?>

<main class="contenedor seccion">
        <h1>Actualizar Vendedor(a)</h1>

        <a href="/admin" class="boton-verde">Volver</a>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>


        <form action=" " class="formulario" method="POST" action="/admin/vendedores/actualizar.php">
            <?php include '../../includes/templates/formulario_vendedores.php'?>
            <input type="submit" value="Guardar cambios" class="boton-verde">
        </form>
    </main>
                    

<?php
    incluirTemplate('footer');
?>

