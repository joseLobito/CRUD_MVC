<?php

include_once "../Modelos/metodosCrud.php";

$datos = Metodos::buscarPorId($_GET['id']);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crud</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>

<body>
    <div class="header">
        <p>Actualice los datos</p>
    </div>
    <section>
        <br>
        <h1>Acutalizar Asesor</h1>

        <form method="post" name="myform" action="../Controladores/actualizar.php">

            <input type="hidden" value="<?php echo $datos[0] ?>" name="id">

            <input type="text"  name="nombreE" value="<?php echo $datos[1]  ?>">

            <input type="text" placeholder="Numero De CC" name="cedulaE" value="<?php echo $datos[2]  ?>">

            <input type="text" placeholder="Numero De Telefono" name="telefonoE" value="<?php echo $datos[3]  ?>">

            <input type="text" placeholder="Fecha De Nacimiento" name="fecha_nacimientoE"value="<?php echo $datos[4]  ?>" >

            <input type="text" placeholder="Masculino , Femenino" name="generoE" value="<?php echo $datos[5]  ?>">

            <input type="text" placeholder="Cliente para el que trabaja" name="clienteE" value="<?php echo $datos[6]  ?>">

            <input type="text" placeholder="Cede Donde Trabaja" name="cedeE" value="<?php echo $datos[7]  ?>">

            <input type="submit" value="actualizar">



        </form>
    </section>

</body>

</html>