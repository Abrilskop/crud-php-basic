<?php
// Incluimos la bd
include('db.php');

// Obtenemos el código a eliminar
$codigo = $_POST['codigo'];

// hacemos la consulta
mysqli_query($conexion, "DELETE FROM usuarios WHERE codigo='$codigo'") or die("Error al conectar");

// Una vez que ya hizo el procedimiento cerramos la conexion
mysqli_close($conexion);

// Redireccionar a mostrar
header("Location: mostrar.php");
?>