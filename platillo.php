<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
        <title>Platillos</title>
       
    </head>
    <body>
        <form action="./platillo.php" method="post">
            <table>
                <caption>Platillo</caption>
                    <td>Presentacion:</td>
                    <td>
                        <input type="text" name="pres">
                    </td>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td>
                        <input type="text" name="prec">
                    </td>
                </tr>
                <tr>
                    <td>Descripcion:</td>
                    <td>
                        <input type="text" name="descr">
                    </td>
                </tr>
                <tr>
                    <td>Id Ingrediente:</td>
                    <td>
                        <select name="ing" >
                            <option value="">Seleccionar</option>
                            <?php
                                foreach ($ings as $ing) {
                                    echo '<option value='.$ing['id_ingrend'].'>'.$ing['tipo'].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../inicio_rest.html">Regresar</a>
                    </td>
                    <td>
                        <input class=a type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>


