<?php

    // Importar Conexion
    require 'includes/config/database.php';
    $db = conectarDB();

    // Crear mail y password
    $email = "correo@correo.com";
    $password = "123456";

    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    //Query para crear el usuario
    $query = " INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";


    //agregarlo a la base de datos
    mysqli_query($db, $query);



?>