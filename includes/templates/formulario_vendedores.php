
<fieldset>
    <legend>Informacion General</legend>

        <label for="Nombre">Nombre:</label>
        <input value="<?php echo s($vendedor->nombre); ?>" type="text" id="Nombre" name="vendedor[nombre]" placeholder="Nombre del Vendedor(a)">

        <label for="apellido">Apellido:</label>
        <input value="<?php echo s($vendedor->apellido); ?>" type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido del Vendedor(a)">


</fieldset>


<fieldset>
    <legend>Informacion Extra</legend>

        <label for="telefono">teléfono:</label>
        <input value="<?php echo s($vendedor->telefono); ?>" type="text" id="telefono" name="vendedor[telefono]" placeholder="Teléfono del Vendedor(a)">

</fieldset>

