<?php
    require 'includes/app.php';
    incluirTemplate('header',);
 ?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading='lazy'>
                </picture>
            </div>
    
            <div class="texto-nosotros">
                <blockquote>25 Años Sobre Nosotros</blockquote>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia nihil est similique non deserunt architecto placeat id dolor numquam quos magni laboriosam in minima, quam molestias, praesentium porro nisi magnam quae nam animi ipsum mollitia! Nam cumque tempora odio iste rem dolorum ab, enim totam? Perferendis corporis inventore aperiam nam.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque neque explicabo animi ea autem, doloribus, officia, qui vero natus amet illum reprehenderit. Eos enim dignissimos veritatis quod a natus ducimus sint nostrum voluptatibus, perferendis soluta, quas libero voluptatum pariatur quibusdam dicta, possimus blanditiis. Blanditiis earum id explicabo mollitia inventore. Neque.q</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
            <h2>Mas Sobre Nosotros</h2>

        <div class="iconos-nostros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguidad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit dicta dignissimos quod, praesentium odit amet quos eaque, libero non soluta hic, eius excepturi autem repellendus tempore! Quasi deleniti expedita perferendis.</p>
            </div> <!--Termina el icono-->
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit dicta dignissimos quod, praesentium odit amet quos eaque, libero non soluta hic, eius excepturi autem repellendus tempore! Quasi deleniti expedita perferendis.</p>
            </div> <!--Termina el icono-->
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit dicta dignissimos quod, praesentium odit amet quos eaque, libero non soluta hic, eius excepturi autem repellendus tempore! Quasi deleniti expedita perferendis.</p>
            </div> <!--Termina el icono-->
    </section>


<?php
    incluirTemplate('footer');
?>