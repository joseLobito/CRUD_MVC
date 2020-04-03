<?php
include_once "../Modelos/metodosCrud.php";

$nombre    = $_POST["nombreE"];
$cedula    = $_POST['cedulaE'];
$telef     = $_POST['telefonoE'];
$fecha     = $_POST['fecha_nacimientoE'];
$genero    = $_POST['generoE'];
$cliente   = $_POST['clienteE'];
$cede      = $_POST['cedeE'];
$id        = $_POST['id'];
print_r($nombre);


$datos = array(
    $nombre,
    $cedula,
    $telef,
    $fecha,
    $genero,
    $cliente,
    $cede,
    $id,

);
if (Metodos::actualizarDatos($datos) == 1) {
    header("location:../index.php?ruta=clientes");
} else {
    echo "fallo al actualizar";
}
