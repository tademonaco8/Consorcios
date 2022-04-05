<?php

$conexion = mysqli_connect('localhost', 'root', '', 'consorcios')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Consorcios</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav>
            <div class="menu">
                <ul class="navigation">
                    <li><a href="index.php">Ingreso de datos</a></li>
                    <li><a href="datos.php">Ver resumen</a></li>
                    <li><a href="#">Estado de cuentas</a></li>
                    <li><a href="finanzas.php">Estado financiero</a></li>
                    <li><a href="deudores.php">Deudores</a></li>
                    <li><a href="proveedores.php">Proveedores</a></li>
                </ul>
            </div>
        </nav>
    </header>