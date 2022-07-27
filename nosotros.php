<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, eligendi est laboriosam dolor fugiat veniam asperiores omnis nobis neque doloremque! Odio, error nam voluptate laborum sint aliquid ut quibusdam tenetur? Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nobis debitis cum aliquam inventore impedit ab voluptas? Eligendi, aliquid? Sequi expedita fugit sed dolore voluptas ex quidem harum perferendis accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium incidunt animi hic mollitia itaque cumque nemo natus illum ut, cupiditate ratione numquam similique! Impedit itaque pariatur adipisci quae, possimus dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed numquam rerum reiciendis pariatur rem minima! Provident fugiat cum aliquam delectus amet porro </p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Quaerat sapiente similique temporibus labore dicta tempore perspiciatis quo facilis officia, vero quas quis provident error iste fuga? Hic earum fuga ratione?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Quaerat sapiente similique temporibus labore dicta tempore perspiciatis quo facilis officia, vero quas quis provident error iste fuga? Hic earum fuga ratione?</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Quaerat sapiente similique temporibus labore dicta tempore perspiciatis quo facilis officia, vero quas quis provident error iste fuga? Hic earum fuga ratione?</p>
            </div>
        </div>
    </section>



    <?php  incluirTemplate('footer');?>

   