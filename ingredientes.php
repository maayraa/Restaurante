<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilos/style.css">
    <title>Ingredientes</title>
    
</head>
<body>
    <form action="./ingred.php" method="post">
        <table>
            <caption>Ingredientes</caption>
            <tr>
                <td>Descripcion</td>
                <td>
                    <input type="text" name=uni>
                </td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td>
                    <input type="text" name=tipo>
                </td>
            </tr>
            <tr>
                <td>Costo</td>
                <td>
                    <input type="text" name=costo>
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