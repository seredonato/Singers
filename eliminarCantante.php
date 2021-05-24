<?php
require_once("BaseDeDatos.php");

$bdd = new BaseDeDatos();

$idCantante = $_GET["id"];

$sql = "select imagen from Cantante where id='$idCantante'";
$tabla_imagen = $bdd->ejecutarConsulta($sql);
$imagen = $tabla_imagen->fetch_assoc();
$url = $imagen["imagen"];
$sql1 = "delete from Cantante where id='$idCantante'";
$bdd->ejecutarConsulta($sql1);
unlink($url);

header("Location: index.php?eliminarCantante=true");
exit();

?>