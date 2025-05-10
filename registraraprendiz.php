<?php

session_start();
if (!isset($_SESSION["aprendiz"]) && basename($_SERVER["PHP_SELF"]) != "index.php") {
    header("Location: index.php");
    exit();

}

include("./conexion.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos.css">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hola, <?php echo $_SESSION["aprendiz"];?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./poo.php"><i class="bi bi-bar-chart-line"></i> POO en PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./variables.php"><i class="bi bi-person"></i> Variables en PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./estadisticas.php"><i class="bi bi-gear"></i> Estadisticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registraraprendiz.php"><i class="bi bi-gear"></i> Registrar Aprendiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cerrarSesion.php"><i class="bi bi-box-arrow-right"></i> Cerrar
                            sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <h3>Registrar aprendices</h3>
    <form action="./registraraprendiz.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del aprendiz</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Digita tu nombre">
        </div>
        <div class="mb-3">
            <label for="passwordAprendiz" class="form-label">Contraseña del Aprendiz</label>
            <input type="text" id="passwordAprendiz" name="passwordAprendiz" class="form-control"
                placeholder="Digita tu password">
        </div>
        <button type="submit" class="btn btn-primary" name="Registrar">Registar Aprendiz</button>
        <button type="reset" class="btn btn-danger" name="Resetear">Borrar Datos</button>


    </form>
    <br>
    <?php

if(isset($_POST['Registrar'])){
    $nombreAprendiz = $_POST['nombre'];
    $passwordAprendiz = $_POST['passwordAprendiz'];

    if($nombreAprendiz == "" || $passwordAprendiz == "" ){
        echo '<div class="alert alert-danger" role="alert">Los campos no puedene estar vacios!</div>';
        die();
    }else{

    $consulta = $conexion_base_datos->query("INSERT INTO aprendices(nombre_aprendiz,password_aprendiz)VALUES('$nombreAprendiz','$passwordAprendiz')");
    
    if($consulta){
        echo '<div class="alert alert-danger" role="alert">Los datos se guardaron correctamente!</div>';
        
    }else{
        echo '<div class="alert alert-danger" role="alert">Error al conectarme a la base de datos!</div>';
    }
}
}
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>

