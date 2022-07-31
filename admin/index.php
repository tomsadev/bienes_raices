<?php 

    $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor">
        <h1>Administrador de Bienes Raices</h1>
        <?php if(intval( $resultado) === 1) : ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php endif; ?>    

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

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
        </table>
    </main>

    

    <?php  incluirTemplate('footer');?>