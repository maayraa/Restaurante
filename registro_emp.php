<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Empleados</title>
        <style>
            body{
                background: #f8f8f8;
            }
            
            table{
                margin: auto;
                width: 80%;
                border: 2px solid rgb(0, 204, 255);
                padding: 1em; 
                background: white;
            }
            
            caption{
                padding: .5em;
                font-size: 1.5em;
                font-weight: bold;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            
            .m-t{
                margin-top: 2em;
            }

            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            
            a, .a{
                background: none;
                margin: auto;
                text-decoration: none;
                color: rgb(255, 0, 55);
                font-weight: bold;
                text-align: center;
                display: block;
                padding: .5em;
                border: 2px solid rgb(0, 204, 255);
                transition: all 400ms;
                font-family: arial;
            }
            
            .a{
                padding: .75em;
                cursor: pointer;
            }
            
            a:hover{
                border-color: orange;
            }
            input{
                width: 100%;
                padding: 1em;
                box-sizing: border-box;
            }
            
            select{
                padding: 1em;
            }

            option{
                padding: .5em;
            }
        </style>
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
                        <input type="text" name="rfc">
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


