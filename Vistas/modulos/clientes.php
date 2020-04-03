<br>
<h1>Asesores</h1>

<section>
    <table id="t1" border="1">
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Fecha De Nacimiento</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Cliente</th>
            <th>Cede De trabajo</th>
            <th></th>
            <th></th>

        </tr>

        </thead>
        <?php
        include_once "Modelos/metodosCrud.php";
        foreach (Metodos::listarDatos() as $fila) {

        ?>

            <tbody>

                <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['cedula']; ?></td>
                    <td><?php echo $fila['telefono']; ?></td>
                    <td><?php echo $fila['fecha_nacimiento']; ?></td>
                    <td><?php echo $fila['edad']; ?></td>
                    <td><?php echo $fila['genero']; ?></td>
                    <td><?php echo $fila['cliente']; ?></td>
                    <td><?php echo $fila['cede']; ?></td>
                    
                     <td>
                    <a href="Vistas/editar.php?id=<?php echo $fila['id'] ?>"><button>Editar</button></a>
                </td>
                    <td><a href="Controladores/eliminar.php?id=<?php echo $fila['id'] ?>"><button>Borrar</button></a></td>
                </tr>
            <?php
        }
            ?>

            </tbody>

    </table>
</section>