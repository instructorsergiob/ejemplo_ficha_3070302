<?php

session_start();
if (!isset($_SESSION["aprendiz"]) && basename($_SERVER["PHP_SELF"]) != "index.php") {
    header("Location: index.php");
    exit();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hola, <?php echo $_SESSION["aprendiz"];?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="./cerrarSesion.php"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
</html>