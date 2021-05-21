<?php include("encabezado.php"); ?>

<h1>Listado de Libros</h1>
<table class="table table-striped" width="100%">
    <thead>
        <th>Id</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Modificar</th>
        <th>ELiminar</th>
    </thead>
    <tbody>
        <?php
            for ($i=0; $i < count($data); $i++ )
            {
                print "<tr>";
                    print "<td>". $data[$i]["id"] ."</td>";
                    print "<td>". $data[$i]["titulo"] ."</td>";
                    print "<td>". $data[$i]["autor"] ."</td>";
                    print "<td>". $data[$i]["editorial"] ."</td>";
                    print "<td><a href='". RUTA_APP ."libros/modificar/". $data[$i]["id"] ."'>Modificar</a></td>";
                    print "<td><a href='". RUTA_APP ."libros/borrar/". $data[$i]["id"] ."'>Eliminar</a></td>";
                print "</tr>";
            }
        ?>
    </tbody>
</table>

<a href='<?php print RUTA_APP."libros/alta/";?>' class='btn btn-info'>Crear un libro</a>


<?php include("piedepagina.php"); ?>