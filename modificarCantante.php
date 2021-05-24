<!doctype html>
<html lang="es">
<body>
<?php
include("header.php");
require_once("Funciones.php");
require_once("BaseDeDatos.php");

$bdd = new BaseDeDatos();

$idCantante = $_GET["id"];

$sql = "select * from Cantante where id='$idCantante'";
$tabla = $bdd->ejecutarConsulta($sql);

$variable = isset($_SESSION["logueado"]);
if($variable == 1) {
    foreach ($tabla as $fila) {
        $descripcion = $fila['descripcion'];
        $nombre = $fila['nombre'];
        $genero = $fila['genero'];

        echo ' <div class="container-fluid">
          <h3 class="mt-3 text-center">Modificar Cantante</h3>
          <form action="validacionModificarCantante.php" enctype="multipart/form-data" method="post">
                    <input name="id" type="hidden" value="' . $idCantante . '">
                    <div class="form-row mt-4 mb-3">
                        <div class="col">
                            <label for="nombre">Número del Cantante:</label>
                            <input type="text" class="form-control"  type=number placeholder="' . $idCantante . '" readonly>
                        </div>
                        <div class="col">
                            <label for="nombre">Nombre del Cantante:</label>
                            <input type="text" class="form-control" name="nombre" placeholder="' . $nombre . '" >
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <label for="descripcion">Ingrese Descripción:</label>
                        <textarea class="form-control" id="descripcion" rows="6" name="descripcion">
                        ' . $descripcion . '
                        </textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="genero">Ingrese Género:</label>
                        <select class="form-control" id="genero" name="genero">
                            <option value="pop">Pop</option>
                            <option value="rock">Rock</option>
                            <option value="balada romantica">Balada Romántica</option>
                            <option value="cumbia">Cumbia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Subir Foto</label>
                        <input type="file" class="form-control-file" name="imagenSubida">
                    </div>
                    <div class="botones-form">
                    <a href="index.php" class="btn btn-danger">Volver</a>
                    <button type="submit" class="btn btn-success">Modificar Cantante</button>
                    </div>
                </form>  
            </div>';
    }
}else{
    header("Location: index.php?datosIncorrectos=true");
    exit();
}
include("footer.php"); ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>