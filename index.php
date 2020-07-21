 <?php
    include 'connection/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Smartphone</title>
</head>
<body>
    <?php
        $consulta=mysqli_query($conexion, "select * from smartphone");
    ?>
    <div class="container">
        <h1>Lista de Smartphone</h1>
        <table class="table table-bordered">
            <tr>
                <th class="text-center">MARCA</th>
                <th class="text-center">MODELO</th>
                <th class="text-center">PRECIO</th>
                <th class="text-center">ACCIONES</th>
            </tr>

            <?php
                $sql="select * from smartphone";
                $result=mysqli_query($conexion, $sql);

                while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <th class="text-center"><?php echo $mostrar['marca'] ?></th>
                <th class="text-center"><?php echo $mostrar['modelo'] ?></th>
                <th class="text-center"><?php echo $mostrar['precio'] ?></th>
                <th class="text-center">
                    <a class="btn btn-success" href="">Editar</a>
                    <a class="btn btn-danger" href="">Eliminar</a>
                </th>
            </tr>
            <?php
                }
            ?>
        </table>
        <input class="btn btn-primary btn-lg" type="button" value="Agregar">
    </div>
</body>
</html>