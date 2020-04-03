<?php
class Conectar
{
    private $servidor  = "localhost";

    private $usuario   = "root";

    private $clave     = "";

    private $baseDat   = "prueba_semillero";

    public function conexion()
    {
        $conexion = mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->baseDat
        );
        return $conexion;
    }
}
