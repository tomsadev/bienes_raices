<?php 

    //Base de Datos //
    
    require '../../includes/config/database.php';
    $db = conectarDB();


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor">
        <h1>Crear</h1>

        <a href="/admin/" class="boton boton-verde">Volver</a>

        <form class="formulario">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Precio de la Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, imagen/png">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Ejmp: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder="Ejmp: 3" min="1" max="9">

            <label for="estacionamiento">Estacionamientos:</label>
            <input type="number" id="estacionamiento" placeholder="Ejmp: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select>
                <option value="1">Tomas</option>
                <option value="1">Karen</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>
    </main>


    <?php  incluirTemplate('footer');?>