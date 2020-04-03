<?php
include_once "../Modelos/metodosCrud.php";
$id = $_GET['id'];
if (Metodos::eliminarDatos($id) == 1) {
    header("location:../index.php?ruta=clientes");
} else {
    echo "fallo al agregar";
}
