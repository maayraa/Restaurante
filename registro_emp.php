<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
        <title>Empleados</title>
    </head>
    <body>
        <form action="./reg-empleado.php" method="post">
            <table>
                <caption>Registro de empleados</caption>
                <tr>
                    <td>Nombre Completo</td>
                    <td>
                        <input type="text" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>
                        <input type="text" name="tel" maxlength="10">
                    </td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td>
                        <input type="text" name="dir">
                    </td>
                </tr>
                <tr>
                    <td>Numero de Seguro Social</td>
                    <td>
                        <input type="text" name="ns" maxlength="11">
                    </td>
                </tr>
                <tr>
                    <td>R.F.C</td>
                    <td>
                        <input type="text" name="rfc" maxlength="13">
                    </td>
                </tr>
                <tr>
                    <td>Puesto</td>
                    <td>
                        <select name="puesto" id="">
                            <option>Seleccionar</option>
                            <?php
                                foreach ($puestos as $puesto) {
                                    echo '<option value='.$puesto['id_puesto'].'>'.$puesto['puesto'].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>CURP</td>
                    <td>
                        <input type="text" name="curp" maxlength="18">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../inicio_rest.html">Regresar</a>
                    </td>
                    <td>
                        <input type="submit" value="Enviar" class="a">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>


