<?php 

    //Base de Datos //
    
    require '../../includes/config/database.php';
    $db = conectarDB();

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamientos = $_POST['estacionamientos'];
    $vendedor = $_POST['vendedor'];



    // Insertar a Base de Datos //

    $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamientos, vendedores_id ) VALUES ( '$_POST[titulo]', '$_POST[precio]', '$_POST[descripcion]', '$_POST[habitaciones]', '$_POST[wc]', '$_POST[estacionamientos]', '$_POST[vendedor]' ) ";

    // echo $query;

    $resultado = mysqli_query($db, $query);

    if($resultado) {
        echo "Insetado Correctamente";
    }

   }


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor">
        <h1>Crear</h1>

        <a href="/admin/" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, imagen/png">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejmp: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ejmp: 3" min="1" max="9">

            <label for="estacionamientos">Estacionamientos:</label>
            <input type="number" id="estacionamientos" name="estacionamientos" placeholder="Ejmp: 3" min="1" max="9">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

             <select name="vendedor">
                <option value="1">Tomas</option>
                <option value="1">Karen</option>
            </select>
        </fieldset> 

        <input type="submit" class="boton boton-verde" value="Enviar">

    </form>
    </main>


    <?php  incluirTemplate('footer');?>