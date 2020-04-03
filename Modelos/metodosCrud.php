<?php
include_once "conexionBd.php";
class Metodos
{
    public static function listarDatos()
    {
        $conectar = new Conectar();
        $conexion = $conectar->conexion();
        $sql = "SELECT id, nombre, cedula, telefono, fecha_nacimiento, edad, genero, cliente, cede
            FROM asesores";
        $resultado = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
    public static function registrarDatos($datos)
    {
        $conectar = new Conectar();
        $conexion = $conectar->conexion();
        $sql = "INSERT INTO asesores ( nombre,cedula,telefono,fecha_nacimiento,edad,genero,cliente,cede)
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]',(TIMESTAMPDIFF(year,fecha_nacimiento,now())),'$datos[4]','$datos[5]','$datos[6]')";
        return $resultado = mysqli_query($conexion, $sql);
    }
    public static function buscarPorId($id)
    {
        $conectar = new Conectar();
        $conexion = $conectar->conexion();
        $sql = "SELECT id, nombre,cedula,telefono,fecha_nacimiento,genero,cliente,cede 
                    from asesores where id='$id'";
        $result = mysqli_query($conexion, $sql);
        $ver = mysqli_fetch_all($result);
        return $ver[0];
    }
    public static function actualizarDatos($datos)
    {
        $conectar = new Conectar();
        $conexion = $conectar->conexion();
        $sql =  "UPDATE asesores set  nombre= '$datos[0]',
                                    cedula='$datos[1]',
                                    telefono = '$datos[2]',
                                    fecha_nacimiento = '$datos[3]',
                                    genero = '$datos[4]',
                                    cliente = '$datos[5]',
                                    cede = '$datos[6]'


                                    where id='$datos[7]'";
        return $resultado = mysqli_query($conexion, $sql);
    }
    public static function eliminarDatos($id)
    {
        $conectar = new Conectar();
        $conexion = $conectar->conexion();
        $sql = "DELETE FROM asesores WHERE id='$id'";
        return $resultado = mysqli_query($conexion, $sql);
    }
}
