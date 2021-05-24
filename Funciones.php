<?php
require_once("BaseDeDatos.php");

function mostrarTodosCantantes()
{
    $bdd = new BaseDeDatos;
    $result = $bdd->devolverCantantes();

    for ($i = 0; $i < sizeof($result); $i++) {
        $imagen = $result[$i]["imagen"];
        $nombre = $result[$i]["nombre"];
        $genero = $result[$i]["genero"];
        $id = $result[$i]["id"];

        echo '
                <div class="col-12 col-md-4 m-auto">
                    <div class="card mb-3">
                        <a href = "descripcion.php?numero=' . $id . '" class="href" ><img class="card-img-top" src = "' . $imagen . '" width="290px" height="200px"></a>
                        <div class="card-body border-top">
                            <h2 class="card-title text-black ">' . $id . ' | ' . $nombre . '</h2>
                            <hr>
                            <p class="card-text font-x-large"><img src = "Recursos/img/' . $genero . '.png" width="60px">
                            ' . $genero . '
                            </p>';

        $variable = isset($_SESSION["logueado"]);
        if ($variable == 1) {
            echo '<div class="text-center" >
                                <a href = "modificarCantante.php?id=' . $id . '" type = "button" class="btn btn-success" > Modificar</a >
                                <a href = "eliminarCantante.php?id=' . $id . '" type = "button" class="btn btn-danger" > Eliminar</a >
                  </div>';
        }
        echo '  </div >
                </div >
            </div >';
    }
}

function mostrarDatosCantante($id)
{
    $bdd = new BaseDeDatos;
    $result = $bdd->devolverCantantes();

    for ($i = 0; $i < sizeof($result); $i++) {
        $idSql = $result[$i]["id"];
        if ($id == $idSql) {
            $imagen = $result[$i]["imagen"];
            $nombre = $result[$i]["nombre"];
            $genero = $result[$i]["genero"];
            $descripcion = $result[$i]["descripcion"];

            echo '
                        <div class="nombre-descripcion mb-2 mt-2"> 
                        <h2 class="display-4 mt-3" style="color:#000">' . $nombre . '  |  ' . $id . '</h2>
                        </div>
                        <img class="rounded mx-auto d-block mb-4" src = "' . $imagen . '" width="300px" height="auto"></a>
                        <p class="text-black-50 text-center"><img src = "Recursos/img/' . $genero . '.png" width="50px" height="60px">' . $genero . '</p>
                        <div class="mr-5 ml-5 mb-1">
                        <p class="text-center">' . $descripcion . '</p>    
                        </div>
                  ';

        }
    }
}

function buscarCantante($search)
{
    $bdd = new BaseDeDatos();

    $sql = "select * from cantante where nombre like '$search%' or genero = '$search' or id='$search'";

    $result = $bdd->ejecutarConsulta($sql);
    $nombre = null;

    if ($result) {
        foreach ($result as $fila) {
            $imagen = $fila['imagen'];
            $nombre = $fila['nombre'];
            $genero = $fila['genero'];
            $id = $fila['id'];

            echo '
                    <div class="col-12 col-md-4 m-auto">
                    <div class="card mb-3">
                        <a href = "descripcion.php?numero=' . $id . '" class="href" ><img class="card-img-top" src = "' . $imagen . '" width="290px" height="200px"></a>
                        <div class="card-body border-top">
                            <h2 class="card-title text-black ">' . $id . ' | ' . $nombre . '</h2>
                            <hr>
                            <p class="card-text font-x-large"><img src = "Recursos/img/' . $genero . '.png" width="60px">
                            ' . $genero . '
                            </p>';

            $variable = isset($_SESSION["logueado"]);
            if ($variable == 1) {
                echo '<div class="text-center" >
                                <a href = "modificarCantante.php?id=' . $id . '" type = "button" class="btn btn-success" > Modificar</a >
                                <a href = "eliminarCantante.php?id=' . $id . '" type = "button" class="btn btn-danger" > Eliminar</a >
                  </div>';
            }
            echo '  </div >
                </div >
            </div >';
        }
    return $nombre;
    }
}

function cambioNombreDeImagen($nombreImagenSubida, $nombreCantante)
{
    $extension = pathinfo($nombreImagenSubida, PATHINFO_EXTENSION);
    switch ($extension) {
        case "jpg":
            return $nombreImagenDefinitivo = $nombreCantante . ".jpg";
            break;
        case "png":
            return $nombreImagenDefinitivo = $nombreCantante . ".png";
            break;
        case "jpeg":
            return $nombreImagenDefinitivo = $nombreCantante . ".jpeg";
            break;
        default:
            header("Location: index.php");
            exit();
    }

}


