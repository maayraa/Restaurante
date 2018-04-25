<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../estilos/style.css">
        <title>Nota de venta</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <caption>Nota de venta</caption>
                <tr>
                    <td>subtotal</td>
                    <td>
                        <input type="text" name="subtot">
                    </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>
                        <input type="text" name="total">
                    </td>
                </tr>
                <tr>
                    <td>Folio de comanda</td>
                    <td>
                    
                    <select name="folio" >
                    <option value="">Seleccionar</option>
                    <?php
                    foreach ($ings as $ing) {
                    echo '<option value='.$ing['fol_coman'].'>'.$ing['fol_coman'].'</option>';
                    }
                    ?>
                    </select>
                    </td>
                    
                </tr>
                <tr>
                    <td>Detalle de venta</td>

                    </td>
                    <td>
                        <input type="text" name="deta" maxlength="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../inicio_rest.html">Regresar</a>
                    </td>
                    <td>
                        <input type="submit" class="a" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>