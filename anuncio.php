<?php 

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /');
    }


    require 'includes/config/database.php';
    $db = conectarDB();

    $query = "SELECT * FROM propiedades WHERE id = ${'id'};";

    $resultado = mysqli_query($db, $query);


   $info = mysqli_fetch_assoc($resultado);

   if(!$resultado -> num_rows) {
    header('Location: /');
   }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>




    <main class="contenedor seccion contenido-centrado">

        

        <h1><?php echo $info['titulo']; ?></h1>

            <img loading="lazy" src="/imagenes/<?php echo $info['imagen']; ?>" alt="Imagend e la Propiedad">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $info['precio']; ?></p>

            <ul class="iconos-carateristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $info['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono icono estacionamiento">
                    <p><?php echo $info['estacionamientos']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono icono dormitorio">
                    <p><?php echo $info['habitaciones']; ?></p>
                </li>
            </ul>

            <p><?php echo $info['descripcion']; ?></p>
        </div>

    </main>

    <?php  

    mysqli_close($db);
    
    incluirTemplate('footer');

    ?>

    
   