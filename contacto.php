<?php
    require 'includes/app.php';
    incluirTemplate('header');
 ?>
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Imagen Formulario" loading='lazy'>
        </picture>

        <h2>LLene el formulario de contacto</h2>

        <form class="formulario" action="">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="" id="" cols="30" rows="10" id='mensaje' placeholder="Tu Mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>

                <label for="opcciones">Vende o Compra</label>
                <select name="" id="opcciones">
                    <option value="" disabled selected>-- Selecciona --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefeno" id="contactar-telefono">

                    <label for="contactar-E-mail">E-mail</label>
                    <input name="contacto" type="radio" value="E-mail" id="contactar-E-mail">
                </div>

                <p>Si eligio telefono, elija la fecha y la hora </p>

                <label for="fecha">Fecha:</label>
                <input type="date"  id="fecha">

                <label for="hora">Hora:</label>
                <input type="time"  id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>


<?php
    incluirTemplate('footer');
?>