<?php
//Aquí demuestro si se inicio sesión con un usuraio en especifico
//session_start();
if (!isset($_SESSION["aprendiz"]) && basename($_SERVER["PHP_SELF"]) != "index.php") {
    header("Location: index.php");
    exit();
}

//Variables de Entorno
$Nombre_base_datos = "aprendicesFicha3070302ADSO";
$Hosting = "localhost";
$Usuario_hosting = "root";
$Password_hosting = "";

//Creamos la conexión - POO 

/*
if($conexion_base_datos){
}else{
    echo "Error en la conexión";
}
*/

try {
    //code...
    $conexion_base_datos = new mysqli($Hosting,$Usuario_hosting,$Password_hosting,$Nombre_base_datos);
    //echo "conexión exitosa";


} catch (\Throwable $th) {
    $th = "Error en la conexión a la base de datos: ".$Nombre_base_datos;
    echo $th;
}

