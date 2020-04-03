<br>
<h1>REGISTRAR UN ASESOR</h1>

<form method="post" name="myform" onsubmit="return(validarFomulario());" action="Controladores/registrar.php">

    <input type="text" placeholder="Nombre" name="nombre">

    <input type="text" placeholder="Numero De CC" name="cedula" id="ced">

    <input type="text" placeholder="Numero De Telefono" name="telefono" id="tel">

    <input type="date" name="fecha_nacimiento" id="fecha">

    <input type="text" placeholder="Masculino , Femenino" name="genero" id="genero">

    <input type="text" placeholder="Cliente para el que trabaja" name="cliente">

    <input type="text" placeholder="Cede Donde Trabaja" name="cede" id="cede">

    <input type="submit" value="Registrar">

</form>