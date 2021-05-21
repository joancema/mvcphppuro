<?php include("encabezado.php"); ?>

<form method="POST" action="<?php print RUTA_APP."libros/borrar/";?>">

<div class="form-group text-left">
    <input type="hidden" name="id" class="form-control" value="<?php print $data["id"] ?>">
</div>

<div class="form-group text-left">
    <label for="titulo">Título</label>
    <input type="text" name="titulo" class="form-control" value="<?php print $data["titulo"] ?>" disabled="disabled">
</div>

<div class="form-group text-left">
    <label for="autor">Autor</label>
    <input type="text" name="autor" class="form-control" value="<?php print $data["autor"] ?>" disabled="disabled"> 
</div>

<div class="form-group text-left">
    <label for="editorial">Editorial</label>
    <input type="text" name="editorial" class="form-control" value="<?php print $data["editorial"] ?>" disabled="disabled">
</div>

<div class="form-group text-left">
    <input type="submit" value="Eliminar" class="btn btn-success">
    <a href='<?php print RUTA_APP."libros/";    ?>'>Cancelar</a>
</div>

</form>

<?php include("piedepagina.php"); ?>