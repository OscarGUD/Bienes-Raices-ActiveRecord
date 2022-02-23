<?php

    
    require 'includes/app.php';
    incluirTemplate('header',$inicio = true);
 ?>

    <main class="contenedor seccion">
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

        </div> <!--Bloque iconos nosotros-->
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>
        
        <?php 
            include 'includes/templates/anuncios.php'
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, accusamus!</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image.webp"> 
                        <source srcset="build/img/blog1.jpg" type="image.jpg"> 
                        <img src="build/img/blog1.jpg" alt="Entrada Blog" loading='lazy'>
                    </picture>
                </div>    

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>Crea tu propia terraza en el techo con los mejores materiales y el mejor precio</p>
                    </a>
                </div>    
                
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image.webp"> 
                        <source srcset="build/img/blog2.jpg" type="image.jpg"> 
                        <img src="build/img/blog2.jpg" alt="Entrada Blog" loading='lazy'>
                    </picture>
                </div>    

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>Maximisa el pacio de tu hogar con esta guia, aprende a combinar colores para darle espacio a tu vida</p>
                    </a>
                </div>        
            </article>

        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumplre con todas mis expectativas.
                </blockquote>
                <p>- Oscar Gabriel</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>
    