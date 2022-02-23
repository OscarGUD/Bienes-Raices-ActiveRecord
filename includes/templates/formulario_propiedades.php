
<fieldset>
    <legend>Informacion General</legend>

        <label for="titulo">Titulo</label>
        <input value="<?php echo s($propiedad->titulo); ?>" type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad">

        <label for="precio">Precio</label>
        <input value="<?php echo s($propiedad->precio); ?>" type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad">

        <label for="imagen">Imagene</label>
        <input type="file" id="imagen" accept="image/jpeg , image/png" name="propiedad[imagen]">

        <?php if($propiedad->imagen): ?>
            <img src="/imagenes/<?php echo $propiedad->imagen;?>" class="imagen-small">
        <?php endif?>        

        <label for="descripccion">Descripccion</label>
        <textarea name="propiedad[descripccion]" id="descripccion" cols="30" rows="10" placeholder="Descripccion Propiedad"><?php echo s($propiedad->descripccion); ?></textarea>
                
    </fieldset>

    <fieldset>
        <legend>Informacion Propiedad</legend>

        <label for="habitaciones">Habitaciones:</label>
        <input value="<?php echo s($propiedad->habitaciones); ?>" type="number" id="habitacones" name="propiedad[habitaciones]" placeholder="EJ: 3" min="1">

        <label for="wc">Baños:</label>
        <input value="<?php echo s($propiedad->wc); ?>" type="number" id="wc" name="propiedad[wc]" placeholder="EJ: 3" min="1">

        <label for="estacionamiento">Estacionamiento:</label>
        <input value="<?php echo s($propiedad->estacionamiento); ?>" type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="EJ: 3" min="0">


    </fieldset>

    <fieldset>
        <legend>Vendedor</legend>
        
        <label for="vendedor">Vendedor</label>
        <select name="propiedad[vendedorId]" id="vendedor">
            <option disabled selected> -- Seleccione Vendedor -- </option>
            <?php foreach ($vendedores as $vendedor) { ?>
                <option <?php echo $propiedad->vendedorId === $vendedor->id ? 'selected' : '';?> 
                value="<?php echo s($vendedor->id);?>"> <?php echo s($vendedor->nombre) . " " . s($vendedor->apellido) ;?> 
                </option>
            <?php } ?>
        </select>        
    </fieldset>