<?php

//llamo a la base de datos
include('./conexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="./index.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del aprendiz</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Digita tu nombre" required>
        </div>
        <div class="mb-3">
            <label for="passwordAprendiz" class="form-label">Contraseña del Aprendiz</label>
            <input type="password" id="passwordAprendiz" name="passwordAprendiz" class="form-control"
                placeholder="Digita tu password" required>
        </div>
        <button type="submit" class="btn btn-primary" name="Enviar">Enviar</button>
        <button type="reset" class="btn btn-danger" name="Resetear">Borrar Datos</button>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>

<?php


if(isset($_POST['Enviar'])){

    //Aquí capturo las variables de mi formulario
    $nombre = $_POST['nombre'];
    $passwordAprendiz = $_POST['passwordAprendiz'];

    //Creamos la consulta
    $consulta = $conexion_base_datos->query("SELECT * FROM aprendices WHERE nombre_aprendiz = '$nombre' AND password_aprendiz  = '$passwordAprendiz'");
    
    if($consulta->num_rows > 0){
        session_start();
        $_SESSION['aprendiz'] = $nombre;
        header('Location:dashBoard_Principal.php');
    }else{
        echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos!</div>';
    }
}

/*
if(isset($_GET['id'])){
        echo "SE PASARON LOS DATOS POR GET: ".$_GET['id'];
}else{
    echo "SE PASARON LOS DATOS POR POST";
}
*/