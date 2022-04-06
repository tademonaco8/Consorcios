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
                    <li><a href="#">Ver resumen</a></li>
                    <li><a href="cuentas.php">Estado de cuentas</a></li>
                    <li><a href="finanzas.php">Estado financiero</a></li>
                    <li><a href="deudores.php">Deudores</a></li>
                    <li><a href="proveedores.php">Proveedores</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="POST" action="datos.php">
        <select name="category">
            <option value="0">Servicios publicos</option>
            <option value="1">Abono de servicios</option>
            <option value="2">Seguros y servicios bancarios</option>
            <option value="3">Fondo de reserva</option>
            <option value="4">Erogaciones extraordinarias</option>
            <option value="5">Impuestos</option>
        </select>
        <input type="submit" value="Buscar" id="btnBusq">
    </form>
    <?php
    $option = ($_POST['category']);
    switch ($option) {
        case '0':
            $sql = "SELECT * from servicios_publicos";
            echo "<h1>Servicios Publicos</h1>";
            
            break;
        case '1':
            $sql = "SELECT * from abono_servicios";
            echo "<h1>Abono de servicios</h1>";
            break;
        case '2':
            $sql = "SELECT * from sysb";
            echo "<h1>Seguros y servicios bancarios</h1>";
            break;
        case '3':
            $sql = "SELECT * from fdr";
            echo "<h1>Fondo de reserva</h1>";
            break;
        case '4':
            $sql = "SELECT * from erogextr";
            echo "<h1>Erogaciones Extraordinarias</h1>";
            break;
        case '5':
            $sql = "SELECT * from impuestos";
            echo "<h1>Impuestos</h1>";
            break;
    } ?>
    <table class="tableDatos" border="1">
        <thead class="comparaciones-header">
            <tr>
                <td>ID</td>
                <td>Proveedor</td>
                <td>Motivo</td>
                <td>Comprobante</td>
                <td>Fecha de Pago</td>
                <td>Importe</td>
            </tr>
        </thead>
        <tbody class="tablebody" id="spotTable">
            <?php
            // $sql = "SELECT * from servicios_publicos";
            $result = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
                switch ($option) {
                    case '0': //serviciospublicos
            ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['proveedor'] ?></td>
                            <td><?php echo $mostrar['motivo'] ?></td>
                            <td><?php echo $mostrar['comprobante'] ?></td>
                            <td><?php echo $mostrar['fecha_de_pago'] ?></td>
                            <td><?php echo $mostrar['importe'] ?></td>
                        </tr>

                    <?php
                        break;
                    case '1': //abonoservicios
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['proveedor'] ?></td>
                            <td><?php echo $mostrar['motivo'] ?></td>
                            <td><?php echo $mostrar['comprobante'] ?></td>
                            <td><?php echo $mostrar['fecha_de_pago'] ?></td>
                            <td><?php echo $mostrar['importe'] ?></td>
                        </tr>
                    <?php
                        break;
                    case '2': //sysb
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['proveedor'] ?></td>
                            <td><?php echo $mostrar['poliza'] ?></td>
                            <td><?php echo $mostrar['comp'] ?></td>
                            <td><?php echo $mostrar['fechadepago'] ?></td>
                            <td><?php echo $mostrar['importe'] ?></td>
                        </tr>
                    <?php
                        break;
                    case '3': //fdr 
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo '-' ?></td>
                            <td><?php echo '-' ?></td>
                            <td><?php echo '-' ?></td>
                            <td><?php echo $mostrar['fechadepago'] ?></td>
                            <td><?php echo $mostrar['importe'] ?></td>
                        </tr>
                    <?php
                        break;
                    case '4': //erogextr 
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['proveedor'] ?></td>
                            <td><?php echo $mostrar['motivo'] ?></td>
                            <td><?php echo '-' ?></td>
                            <td><?php echo $mostrar['fechadepago'] ?></td>
                            <td><?php echo $mostrar['importe'] ?></td>
                        </tr>
                    <?php
                        break;
                    case '5': //impuestos
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo '-' ?></td>
                            <td><?php echo $mostrar['motivo'] ?></td>
                            <td><?php echo '-' ?></td>
                            <td><?php echo $mostrar['fechadepago'] ?></td>
                            <td><?php echo $mostrar['importe'] ?></td>
                        </tr>
            <?php
                        break;

                        $importe = intval($mostrar['importe']);
                }
            }
            $query = "SELECT importe FROM servicios_publicos;";
            $result = mysqli_query($conexion, $query);
            $num = mysqli_fetch_array($result);

            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total:</td>
                <td><?php array_sum($num); ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>