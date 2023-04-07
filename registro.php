
<?php
//Autoayuda
// ejecucion de etiquetas php en caso de que el serivdor falle.
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

// Inclucion de bd con 
    include('db.php');

// creacion de variables
    $nombre=$_POST['nombre'];
    $contrasena=$_POST['contrasena'];

// creacion de variable consulta para insertar datos.
// Pegamos la consulta de nuestra bd al insertar los valores de la tabla usuarios.
    $consulta="INSERT INTO `usuarios` (`Nombres`, `Contrasena`) VALUES ('$nombre', '$contrasena');";

// Craamos la variable resultado que almacena todo lo que hicimos(variable conexion)
    $resultado=mysqli_query($conexion, $consulta) or die('Error de Registro');

    echo "registro exitoso";
// cerramos la conexion a bd
    mysqli_close($conexion);

?>