<?php
require_once "../Modelos/conexionBd.php";
require_once "../Modelos/metodosCrud.php";

$nombre    = $_POST['nombre'];
$cedula    = $_POST['cedula'];
$telef     = $_POST['telefono'];
$fecha     = $_POST['fecha_nacimiento'];
$genero    = $_POST['genero'];
$cliente   = $_POST['cliente'];
$cede      = $_POST['cede'];



$datos = array(
    $nombre,
    $cedula,
    $telef,
    $fecha,
    $genero,
    $cliente,
    $cede,

);
print_r($datos);
if (Metodos::registrarDatos($datos) == 1) {
    header("location:../index.php?ruta=clientes");
} else {
    echo "fallo al agregar";
}
