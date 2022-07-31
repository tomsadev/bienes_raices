<?php 

    // Validar URL de Actualizar //
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('location:/admin');
    }

    //Base de Datos //
    
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Obetener datos de la propiedad //
    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);


    // Consultar DB Vendedores //
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);



    // Array de Errores //

    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamientos = $propiedad['estacionamientos'];
    $vendedores = $propiedad['vendedores_id'];
    $imagenPropiedad = $propiedad['imagen'];


   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $titulo = mysqli_real_escape_string ($db, $_POST['titulo'] );
    $precio = mysqli_real_escape_string ($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = $_POST['wc'];
    $estacionamientos = mysqli_real_escape_string($db, $_POST['estacionamientos']);
    $vendedores = mysqli_real_escape_string($db, $_POST['vendedores']);
    $creado = date('Y/m/d');

    // Asignar Files hacia una Variable //
    $imagen = $_FILES['imagen'];
    

    if(!$titulo) {
        $errores[] = "Debes Añadir un Titulo";
    }

    if(!$precio) {
        $errores[] = "Debes Añadir un Precio";
    }

    if( strlen ($descripcion) < 10 ) {
        $errores[] = "Debes colocar una descripcion amplia de la propiedad";
    }

    if(!$habitaciones) {
        $errores[] = "El numero de habitaciones es obligatorio";
    }

    if(!$wc) {
        $errores[] = "El numero de Baños es obligatorio";
    }

    if(!$estacionamientos) {
        $errores[] = "El numero de estacionamientos es obligatorio";
    }

    if(!$vendedores) {
        $errores[] = "Seleccionar Vendedor";
    }


    // Validar tamaño de imagen //
    $medida = 1000 * 1000;
    if($imagen['size'] > $medida) {
        $errores[] = 'La imagen colocada es demasiado grande';
    }




    // // ver errores // 
    //   echo "<pre>";
    //   var_dump($_POST);
    //   echo "</pre>";

    //   echo "<pre>";
    //   var_dump($_FILES);
    //   echo "</pre>";


    //   exit;

    

    // Revisar que el array de errores este vacio //

    if(empty($errores)) {
        // Crear Carpeta //
        $carpetaImagenes = '../../imagenes/';

         if(!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }


        // ** Subida de Archivos ** //

        $nombreImagen = '';


        if($imagen ['name']) {
            // Eliminar Imagen Previa //
            unlink($carpetaImagenes . $propiedad['imagen']);

            // Generar nombre unico para imagen //
         $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";

         // Subir Imagenes //
         move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );

        }else {
            $nombreImagen = $propiedad['imagen']
;        }


        
        


    // Insertar a Base de Datos //
        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones= ${habitaciones}, wc = ${wc}, estacionamientos = ${estacionamientos}, vendedores_id =${vendedores} WHERE id = ${id} ";

        //  echo $query;
        //  exit;

        $resultado = mysqli_query($db, $query);
        
        if($resultado) {
            echo "Insetado Correctamente";
        }

        if($resultado) {
            // Redireccionar al usuario //
            header('Location:/admin?resultado=2');
        }

    }
    
    

   }


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin/" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
            
        <?php endforeach; ?>    



        <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la Propiedad" value="<?php echo $precio ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, imagen/png" name="imagen">
            <img src="/imagenes/<?php echo $imagenPropiedad; ?>" alt="Imagen de Propiedad" class="imagen-small">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea >
        </fieldset>

        <fieldset>
            <legend>Informacion de Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejmp: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ejmp: 3" min="1" max="9" value="<?php echo $wc ?>">

            <label for="estacionamientos">Estacionamientos:</label>
            <input type="number" id="estacionamientos" name="estacionamientos" placeholder="Ejmp: 3" min="1" max="9" value="<?php echo $estacionamientos ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

             <select name="vendedores">
                <option value=""> -- Selecciona --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado) ) : ?>
                    <option <?php echo $vendedores === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                <?php endwhile; ?>    
        </fieldset> 

        <input type="submit" class="boton boton-verde" value="Actualizar Propiedad">

    </form>
    </main>


    <?php  incluirTemplate('footer');?>