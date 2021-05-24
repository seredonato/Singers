<?php
require_once("funciones.php");
require_once("BaseDeDatos.php");

$bdd = new BaseDeDatos();

$destino = "Recursos/img/";
$nombreCantante = $_POST["nombre"];
$genero = $_POST["genero"];
$id = $_POST["numero"];
$descripcion = $_POST["descripcion"];

$tabla = $bdd->devolverCantantes();

foreach ($tabla as $fila) {
    $idCantante = $fila['id'];
    if ($id == $idCantante) {
        header("Location: index.php?idExistente=true");
        exit();
    }
}

if ($_FILES["imagenSubida"]["error"] > 0) {
    header("Location: index.php?archivoSubidoError=true");
    exit();
} else {
    $nombreImagenSubida = $_FILES["imagenSubida"]["name"];
    $nombreImagenCambiado = cambioNombreDeImagen($nombreImagenSubida, $nombreCantante);

    $ubicacion = $destino . $nombreImagenCambiado;

    move_uploaded_file
    ($_FILES["imagenSubida"]["tmp_name"], $ubicacion);


    $sql = "insert into Cantante(id, nombre, imagen, genero, descripcion) 
    values('" . $id . "', '" . $nombreCantante . "', '" . $ubicacion . "', '" . $genero . "', '" . $descripcion . "')";

    $bdd->ejecutarConsulta($sql);

    header("Location: index.php?crearCantante=true");
    exit();
}


?>