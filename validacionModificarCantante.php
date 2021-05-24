<?php
require_once("funciones.php");
require_once("BaseDeDatos.php");

$bdd = new BaseDeDatos();

$destino = "Recursos/img/";

$idCantante = $_POST["id"];
$nombreCantante = $_POST["nombre"];
$genero = $_POST["genero"];
$descripcion = $_POST["descripcion"];
$nombreImagenSubida = $_FILES["imagenSubida"]["name"];

if ($_FILES["imagenSubida"]["error"] > 0) {
    header("Location: index.php");
    exit();
}

$result = $bdd->devolverCantantes();

for($i = 0; $i<sizeof($result); $i++)
{
    $idCantanteSql = $result[$i]["id"];
    $urlSql = $result[$i]["imagen"];
    $nombreSql = $result[$i]["nombre"];
    $generoSql = $result[$i]["genero"];
    $descripcionSql = $result[$i]["descripcion"];

    if($idCantante == $idCantanteSql){
            $nombreImagenCambiado = cambioNombreDeImagen($nombreImagenSubida, $nombreCantante);
            $direccion= $destino . $nombreImagenCambiado;
            move_uploaded_file
            ($_FILES["imagenSubida"]["tmp_name"], $direccion);
            unlink($urlSql);

            $sql =
                "update Cantante
                 set nombre= '$nombreCantante',
                 imagen = '$direccion',
                 genero = '$genero',
                 descripcion = '$descripcion'
                 where id=$idCantante";

            $bdd->ejecutarConsulta($sql);
            header("Location: index.php?modificarCantante=true");
            exit();
    }
}


