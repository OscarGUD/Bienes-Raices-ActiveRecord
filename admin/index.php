<?php
    require '../includes/app.php';
    estaAutenticado();
    use App\Propiedad;
    use App\Vendedores;

    // Implementar un metodo para obtenet todas las propiedades
    $propiedades = Propiedad::all();
    $vendedores = Vendedores::all();

    //Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if ($id) {
            $tipo = $_POST['tipo'];

            if(validatTipoContenido($tipo)){
            
                // Compara lo que vamos a elimnar
                if($tipo === 'vendedor'){
                    $vendedor = Vendedores::find($id);
                    $vendedor->Eliminar();
                } else if($tipo === 'propiedad') {
                    $propiedad = Propiedad::find($id);
                    $propiedad->Eliminar();
                }
            } 
        }
    }


    

    // Incluye un template
    incluirTemplate('header');
 ?>


<main class="contenedor seccion">
    <h1>Administrador</h1>
        <?php
            $mensaje = mostrarNotificasion(intval($resultado));
            if($mensaje){?>
                <p class="alerta exito"><?php echo s($mensaje);?></p>
            <?php }?>  

        <a href="/admin/propiedades/crear.php" class="boton-verde">Nueva Propiedad</a>
        <a href="/admin/Vendedores/crear.php" class="boton-amarillo">Nuevo(a) Vendedor(a)</a>
        <h2>Propiedades</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!--Mostrar Resultados -->
                <?php foreach($propiedades as $propiedad): ?>
            <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->titulo; ?></</td>
                    <td><img 
                    src="/imagenes/<?php echo$propiedad->imagen;?>" 
                    class="imagen-tabla"></td>
                <td><?php echo $propiedad->precio; ?></</td>
                <td>
                    <form method="POST" class="w-100">                       
                        <input type="hidden" name="id" value=" <?php echo $propiedad->id;?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <h2>Vendedores</h2>

    <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!--Mostrar Resultados -->
                <?php foreach($vendedores as $vendedor): ?>
            <tr>
                    <td><?php echo $vendedor->id; ?></td>
                    <td><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></</td>
                    <td><?php echo $vendedor->telefono; ?></</td>
                <td>
                    <form method="POST" class="w-100">
                        <input type="hidden" name="id" value=" <?php echo $vendedor->id;?>" >
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    <a href="/admin/vendedores/actualizar.php?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</main>



<?php
    incluirTemplate('footer');
?>