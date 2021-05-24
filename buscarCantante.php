<!doctype html>
<html lang="es">
<body>
<?php
include("header.php");
require_once("Funciones.php");
?>
<form class="form-inline my-2 my-lg-0" method="get" id="form-search" action="buscarCantante.php">
    <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Ingrese nombre o género"
           aria-label="Search">
    <button class="btn btn-info my-2 my-sm-0" type="submit">Search Singer</button>
</form>
<div class="botones-tooltip">
    <div class="media">
        <img src="Recursos/img/pop.png" class="mr-3" width="60px">
        <div class="media-body">
            <h6 class="mt-4">Pop</h6>
        </div>
    </div>
    <div class="media">
        <img src="Recursos/img/balada%20romantica.png" class="mr-3" width="60px">
        <div class="media-body">
            <h6 class="mt-4">Balada Romántica</h6>
        </div>
    </div>
    <div class="media">
        <img src="Recursos/img/rock.png" class="mr-3" width="60px">
        <div class="media-body">
            <h6 class="mt-4">Rock</h6>
        </div>
    </div>

    <div class="media">
        <img src="Recursos/img/cumbia.png" class="mr-3" width="60px">
        <div class="media-body">
            <h6 class="mt-4">Cumbia</h6>
        </div>
    </div>
</div>
<section class="container">
    <article class="row">
        <?php
        $search = $_GET["search"];
        $variable = buscarCantante($search);
        if ($variable == null) {
            echo '
            <div class="container text-center">
            <h4>Oops! No se encontró ningún Cantante. Por favor, intente nuevamente</h4>
            </div>';
            mostrarTodosCantantes();
        }
        ?>
    </article>
    <?php
    $variable = isset($_SESSION["logueado"]);
    if ($variable == 1) {
        echo '<div class="boton-cantante">
                <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#exampleModal">Nuevo
                Cantante
                </button>
              </div>';
    }
    ?>
</section>

<!-- Crear Cantante -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Cantante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="validacionCrearCantante.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="nombre">Ingrese el Nombre Artístico del Cantante:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ej: Danna Paola"/>
                    </div>
                    <div class="form-group">
                        <label for="numero">Ingrese Número del Cantante:</label>
                        <input type="number" class="form-control" name="numero">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Ingrese Descripción:</label>
                        <textarea class="form-control" id="descripcion" rows="6" name="descripcion"></textarea>
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
                    <button type="submit" class="btn btn-success btn-block">Crear Cantante</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>
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