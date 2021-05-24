<?php
require_once("BaseDeDatos.php");

$bdd = new BaseDeDatos();

$nombreUsuario = $_POST["usuario"];
$contraseña = $_POST["password"];

$sql = "select nombre,clave from Usuario where nombre ='$nombreUsuario'";

$result = $bdd->ejecutarConsulta($sql);

$tabla = $result->fetch_assoc();

$user = $tabla["nombre"];
$pass = $tabla["clave"];

if(empty($user)){
    header("Location: index.php?datosIncorrectos=true");
    exit();
}elseif(empty($pass)){
    header("Location: index.php?datosIncorrectos=true");
    exit();
}

if ($nombreUsuario == $user and $contraseña == $pass) {
    session_start();
    $_SESSION["logueado"] = 1;
    header("Location: index.php");
    exit();
} else {
    header("Location: index.php?datosIncorrectos=true");
    exit();
}
