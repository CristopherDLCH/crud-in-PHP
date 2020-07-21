<?php
    include '../connection/conexion.php';

    if (isset($_POST['btnRegistrar'])) {

        if (strlen($_POST['txtMarca'])>=1 && strlen($_POST['txtModelo'])>=1 && strlen($_POST['txtPrecio'])>=1) {
            $marca=trim($_POST['txtMarca']);
            $modelo=trim($_POST['txtModelo']);
            $precio=trim($_POST['txtPrecio']);
            $consulta="insert into smartphone(marca, modelo, precio) values('$marca', '$modelo', '$precio')";
            $resultado=mysqli_query($conexion, $consulta);

            if ($resultado) {
                ?>
                <script>alert("Registro Exitoso");
                location.href ="../index.php";
                </script>
                <?php
            } else{
                ?>
                <script>alert("Fallo registro");
                location.href ="nuevoLibro.php";
                </script>
                <?php
            }
        } else{
            ?>
            <script>alert("Campos Incompletos");
            location.href ="nuevoLibro.php";
            </script>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Nuevo</title>
</head>
<body>
    <div class="container">
        <h1>Nuevo Producto</h1>
        <form  method="POST" action="nuevo.php">
            <label>MARCA:</label>
            <input class="form-control" type="text" name="txtMarca" id="txtMarca"><br>
            <label>MODELO:</label>
            <input class="form-control" type="text" name="txtModelo" id="txtModelo"><br>
            <label>PRECIO:</label>
            <input class="form-control" type="text" name="txtPrecio" id=""><br>
            <input class="btn btn-primary btn-lg" type="submit" name="btnRegistrar" value="Registrar">
            <input class="btn btn-danger btn-lg" type="button" value="Cancelar" OnClick="location.href='../index.php'">
        </form>     
    </div>
</body>
</html>