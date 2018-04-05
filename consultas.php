<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title><?php echo ucwords($con) ?></title>
    <style>
        td{
            padding: .5em;
        }
    </style>
</head>
<body>
    <table>
        <caption>Empleados</caption>
        <!-- IMPRIMIR DATOS DE LOS EMPLEADOS -->
        <?php
            if (!empty($empleados)) {
                echo '
                <tr>
                <td><b>Id del empleado</b></td>
                <td><b>Nombre</b></td>
                <td><b>Telefono</b></td>
                <td><b>Correo</b></td>
                <td><b>Numero de seguro social</b></td>
                <td><b>R.F.C</b></td>
                <td><b>Domicilio</b></td>
                <td><b>Curp</b></td>
                </tr>';
            }
        ?>
        <?php
            if (!empty($empleados)) {
                foreach ($empleados as $emp) {
                    echo '<tr>';
                    echo '<td>';
                    echo $emp['id_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['nom_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['tel_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['correo_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['nss_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['rfc_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['dom_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $emp['curp_emp'];
                    echo '</td>';
                    echo '</tr>';
                }
            }
            // IMPRIME TODOS LOS DATOS DEL CLIENTE
            if(!empty($clientes)){
                echo '
                <tr>
                <td><b>Id del cliente</b></td>
                <td><b>Nombre del cliente</b></td>
                <td><b>R.F.C</b></td>
                <td><b>Correo</b></td>
                <td><b>Razon social</b></td>
                <td><b>telefono</b></td>
                <td><b>Codigo Postal</b></td>
                </tr>';
                foreach ($clientes as $cte) {
                    echo '<tr>';
                    echo '<td>';
                    echo $cte['id_clte'];
                    echo '</td>';
                    echo '<td>';
                    echo $cte['nom_comp'];
                    echo '</td>';
                    echo '<td>';
                    echo $cte['rfc'];
                    echo '</td>';
                    echo '<td>';
                    echo $cte['correo'];
                    echo '</td>';
                    echo '<td>';
                    echo $cte['raz_soc'];
                    echo '</td>';
                    echo '<td>';
                    echo $cte['tel'];
                    echo '</td>';
                    echo '<td>';
                    echo $cte['cp'];
                    echo '</td>';
                    echo '</tr>';
                }
            }
            // IMPRIME TODOS LOS PUESTOS
            if(!empty($puestos)){
                echo '
                <tr>
                <td><b>Id de puesto</b></td>
                <td><b>Puesto</b></td>
                </tr>';
                
                foreach ($puestos as $puesto) {
                    echo '<tr>';
                    echo '<td>';
                    echo $puesto['id_puesto'];
                    echo '</td>';
                    echo '<td>';
                    echo $puesto['puesto'];
                    echo '</td>';
                    echo '</tr>';
                }
            }
            
        ?>
    </table>
</body>
</html>