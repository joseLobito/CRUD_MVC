<?php
class Modelo
{

    static public function RutasModelo($rutas)
    {

        if ($rutas == "registrar" || $rutas == "clientes") {
            $pagina = "Vistas/modulos/" . $rutas . ".php";
        } else if ($rutas == "index") {
            $pagina = "index.php";
        } else {
            $pagina = "index.php";
        }
        return $pagina;
    }
}
