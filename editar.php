<?php
//    incluimos la bd 
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Contrasena</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php
    // Post envia datos a pag web
    // get es una secuencia la cual recibe datos
    $codigo = $_GET['codigo'];
    // seleccionar a la tabla usuarios
    $sql="SELECT * FROM usuarios where codigo='$codigo'";
    // Almacenamos la conexion(db) y el sql
    $result = mysqli_query($conexion, $sql);

    // Creamos una variable mostrar 
    while($mostrar = mysqli_fetch_array($result)){

?>
        <form action="modificar.php" method="post">
            <input type="text" value="<?php echo $mostrar['codigo']?>"name="codigo">
            <p>Nombre</p>
            <input type="text" value="<?php echo $mostrar['nombre']?>"name="Nombres">
            <p>Contrasena</p>
            <input type="text" value="<?php echo $mostrar['contrasena']?>"name="Contrasena">
        </form>
        <?php
}
        ?>
    </tbody>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>