<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

</head>

<body>
    <?php
    include_once "modulos/menu.php";
    ?>
    <section>
        <?php
        $rutas = new RutasControlador();
        $rutas->Rutas();
        ?>
    </section>
    <section>


    </section>
    <script src="Controladores/js/validar.js"></script>
</body>

</html>
