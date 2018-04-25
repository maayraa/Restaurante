
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilos/style.css">
    <title>Factura</title>
</head>
<body>
    <form action="./facturas.php" method="post">
        <table>
            <caption>Factura</caption>
            <tr>
                <td>Folio de comanda</td>
                <td>
                    <select name="fol">
                        <?php
                                foreach ($comandas as $com) {
                                    echo '<option value="'.$com['fol_coman'].'">'.$com['id_plat'].'</option>';
                                }
                        ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td>
                    <input type="date" name="fecha">
                </td>
            </tr>
            <tr>
                <td>R.F.C</td>
                <td>
                    <input type="text" maxlength="13" name="rfc"
                </td>
            </tr>
            <tr>
                <td>Codigo Postal</td>
                <td>
                    <input type="text" maxlength="5" name="cp">
                </td>
            </tr>
            <tr>
                <td>Razon social</td>
                <td>
                    <input type="text" maxlength="30" name="raz"
                </td>
            </tr>
            <tr>
                <td>Subtotal</td>
                <td>
                        <select name="sub">
                        <?php
                                $statement = $pdo->prepare('SELECT * FROM comanda');
                                $statement->execute();
                                $comandas = $statement;
                                foreach ($comandas as $com) {
                                    echo '<option value="'.$com['fol_coman'].'">'.$com['prec'].'</option>';
                                }
                        ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>IVA</td>
                <td>
                    <input type="text" name="iva">
                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td>
                    <input type="text" name="tot">
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		$(function () { 
			$('.mas').click(function(){
				$('.mas').before('<input type="text" name="array[]" class="input-mas">');
			});
		});
	</script>
</body>
</html>