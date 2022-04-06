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
                    <li><a href="#">Ingreso de datos</a></li>
                    <li><a href="datos.php">Ver resumen</a></li>
                    <li><a href="cuentas.php">Estado de cuentas</a></li>
                    <li><a href="finanzas.php">Estado financiero</a></li>
                    <li><a href="deudores.php">Deudores</a></li>
                    <li><a href="proveedores.php">Proveedores</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <p>Elija la categoría a ingresar datos:</p>
    <form method="POST" action="index.php">
        <select name="category" required>
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
            echo "<h2>Servicios publicos</h2>
                    <form class='formulario' method='POST' action='index.php'>
                        <ul>
                            <li>Proveedor:<input type='text' name='prv-SP'></li>
                            <li>Motivo:<input type='text' name='mtv-SP'></li>
                            <li>Comprobante:<input type='text' name='cmp-SP'></li>
                            <li>Fecha de pago:<input type='date' name='fdp-SP'></li>
                            <li>Importe:<input type='number' step='0.01' name='imp-SP'></li>
                            <li><input type='submit' value='Enviar' name='btnFormSP'></li>
                        </ul>
                 </form>";
            break;
        case '1':
            echo "<h2>Abono de servicios</h2>
                    <form class='formulario' method='POST' action='index.php'>
                        <ul>
                            <li>Proveedor:<input type='text' name='prv-AS'></li>
                            <li>Motivo:<input type='text' name='mtv-AS'></li>
                            <li>Comprobante:<input type='text' name='cmp-AS'></li>
                            <li>Fecha de pago:<input type='date' name='fdp-AS'></li>
                            <li>Importe:<input type='number' step='0.01' name='imp-AS'></li>
                            <li><input type='submit' value='Enviar' name='btnFormAS'></li>
                        </ul>
                 </form>";
            break;
        case '2':
            echo "<h2>Servicios y seguros bancarios</h2>
                    <form class='formulario' method='POST' action='index.php'>
                        <ul>
                            <li>Proveedor:<input type='text' name='prv-SB'></li>
                            <li>Poliza:<input type='text' name='mtv-SB'></li>
                            <li>Comprobante:<input type='text' name='cmp-SB'></li>
                            <li>Fecha de pago:<input type='date' name='fdp-SB'></li>
                            <li>Importe:<input type='number' step='0.01' name='imp-SB'></li>
                            <li><input type='submit' value='Enviar' name='btnFormSB'></li>
                        </ul>
                 </form>";
            break;
        case '3':
            echo "<h2>Fondo de reserva</h2>
                    <form class='formulario' method='POST' action='index.php'>
                        <ul>
                            <li>Fecha de pago:<input type='date' name='fdp-FDR'></li>
                            <li>Importe:<input type='number' step='0.01' name='imp-FDR'></li>
                            <li><input type='submit' value='Enviar' name='btnFormFDR'></li>
                        </ul>
                    </form>";
            break;
        case '4':
            echo "<h2>Erogaciones Extraordinarias</h2>
                    <form class='formulario' method='POST' action='index.php'>
                        <ul>
                            <li>Proveedor:<input type='text' name='prv-EE'></li>
                            <li>Motivo:<input type='text' name='mtv-EE'></li>
                            <li>Fecha de pago:<input type='date' name='fdp-EE'></li>
                            <li>Importe:<input type='number' step='0.01' name='imp-EE'></li>
                            <li><input type='submit' value='Enviar' name='btnFormEE'></li>
                        </ul>
                 </form>";
            break;
        case '5':
            echo "<h2>Impuestos</h2>
                    <form class='formulario' method='POST' action='index.php'>
                        <ul>
                            <li>Proveedor:<input type='text' name='prv-IM'></li>
                            <li>Motivo:<input type='text' name='mtv-IM'></li>
                            <li>Comprobante:<input type='text' name='cmp-IM'></li>
                            <li>Fecha de pago:<input type='date' name='fdp-IM'></li>
                            <li>Importe:<input type='number' step='0.01' name='imp-IM'></li>
                            <li><input type='submit' value='Enviar' name='btnFormIM'></li>
                        </ul>
                 </form>";
            break;
    }

    if (isset($_POST['prv-SP'])) {
        $prvSP = $_POST['prv-SP'];
        $mtvSP = $_POST['mtv-SP'];
        $cmpSP = $_POST['cmp-SP'];
        $fdpSP = $_POST['fdp-SP'];
        $impSP = $_POST['imp-SP'];
        $sql = "INSERT INTO servicios_publicos (proveedor, motivo, comprobante, fecha_de_pago, importe) VALUES ('$prvSP', '$mtvSP', '$cmpSP', '$fdpSP', '$impSP');";
        if ($conexion->query($sql) === TRUE) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>Failed</h1>";
        }
    }

    if (isset($_POST['prv-AS'])) {
        $prvSP = $_POST['prv-AS'];
        $mtvSP = $_POST['mtv-AS'];
        $cmpSP = $_POST['cmp-AS'];
        $fdpSP = $_POST['fdp-AS'];
        $impSP = $_POST['imp-AS'];
        $sql = "INSERT INTO abono_servicios (proveedor, motivo, comprobante, fecha_de_pago, importe) VALUES ('$prvSP', '$mtvSP', '$cmpSP', '$fdpSP', '$impSP');";
        if ($conexion->query($sql) === TRUE) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>Failed</h1>";
        }
    }

    if (isset($_POST['prv-SB'])) {
        $prvSP = $_POST['prv-SB'];
        $mtvSP = $_POST['mtv-SB'];
        $cmpSP = $_POST['cmp-SB'];
        $fdpSP = $_POST['fdp-SB'];
        $impSP = $_POST['imp-SB'];
        $sql = "INSERT INTO sysb (proveedor, poliza, comp, fechadepago, importe) VALUES ('$prvSP', '$mtvSP', '$cmpSP', '$fdpSP', '$impSP');";
        if ($conexion->query($sql) === TRUE) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>Failed</h1>";
        }
    }

    if (isset($_POST['imp-FDR'])) {
        $fdpSP = $_POST['fdp-FDR'];
        $impSP = $_POST['imp-FDR'];
        $sql = "INSERT INTO fdr (fechadepago, importe) VALUES ('$fdpSP', '$impSP');";
        if ($conexion->query($sql) === TRUE) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>Failed</h1>";
        }
    }

    if (isset($_POST['imp-EE'])) {
        $fdpSP = $_POST['fdp-EE'];
        $prvSP = $_POST['prv-EE'];
        $mtvSP = $_POST['mtv-EE'];
        $impSP = $_POST['imp-EE'];
        $sql = "INSERT INTO erogextr (proveedor, motivo, fechadepago, importe) VALUES ('$prvSP', '$mtvSP', '$fdpSP', '$impSP');";
        if ($conexion->query($sql) === TRUE) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>Failed</h1>";
        }
    }

    if (isset($_POST['imp-IM'])) {
        $mtvSP = $_POST['mtv-IM'];
        $fdpSP = $_POST['fdp-IM'];
        $impSP = $_POST['imp-IM'];
        $sql = "INSERT INTO impuestos (motivo, fechadepago, importe) VALUES ('$mtvSP', '$fdpSP', '$impSP');";
        if ($conexion->query($sql) === TRUE) {
            echo "<h1>Success</h1>";
        } else {
            echo "<h1>Failed</h1>";
        }
        
    }

    ?>
    <!-- Totales -->

</body>

</html>