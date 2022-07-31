<?php 

function conectarDB() : mysqli {
    $db= mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');


   if(!$db) {
    die("No hay conexion con la base de datos.");
   }

   return $db;

}
?>

<!-- <?php
$servername = "localhost";
$database = "bienesraices_crud";
$username = "root";
$password = "root";
// Create connection
$conn = mysqli_connect("localhost", "root", "root", "bienesraices_crud");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?> -->