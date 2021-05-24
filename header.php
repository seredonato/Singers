<?php
require("Funciones.php");
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Recursos/bootstrap.css">
    <link rel="stylesheet" href="Recursos/styles.css">

    <title>Singers</title>
</head>
<header>
    <nav class="navbar" id="nav">
        <img src="Recursos/img/logo.png" width="160px" height="60px">
        <div class="cont-header">
            <?php
            session_start();
            $variable= isset($_SESSION["logueado"]);
            if ($variable == 1) {
                echo '<a href="logOut.php" class="btn btn-danger my-2 my-sm-0 ingresar" type = "button" >Cerrar Sesión</a >';
            } else {
                echo '<form class="form-inline form-header" action = "loguearUsuario.php" method = "post" >
            <input class="form-control mr-sm-2 input-header" type = "text" placeholder = "Username" aria - label = "username" name = "usuario" >
            <input class="form-control mr-sm-2 input-header" type = "password" placeholder = "Password" aria - label = "password" name = "password" >
            <button class="btn btn-outline-light my-2 my-sm-0 ingresar" type = "submit" > INGRESAR</button >
        </form>';
            }
            ?>
        </div>
    </nav>
</header>