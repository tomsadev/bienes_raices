<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-carateristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias eveniet nihil totam iusto cumque molestiae maiores a id odit in labore, ad fugit consectetur itaque, quam consequuntur obcaecati aspernatur maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis corrupti sint dolore aliquam nam, molestias eligendi fugit reiciendis voluptatibus eveniet! Veniam tempora, modi dolores pariatur perspiciatis aliquam cumque nisi debitis! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos nesciunt corrupti aliquid ducimus sed aspernatur laudantium natus enim maxime placeat saepe, rerum blanditiis quaerat cum debitis iste obcaecati tempore? Tenetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit obcaecati maxime accusamus tempora modi, quibusdam delectus error aliquid qui maiores veniam voluptatibus magnam molestiae tenetur rerum vel fugit sit temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi adipisci repellat nisi aliquid. Quasi minus perferendis esse, libero impedit dolorum consequuntur debitis quibusdam quia quos soluta ad? Ducimus, at.</p>
        </div>

    </main>

    <?php  incluirTemplate('footer');?>

    
   