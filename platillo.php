<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style.css">
        <title>Platillos</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
            }
            table{
                margin: auto;
                width: 80%;
                border: 2px solid rgb(0, 204, 255);
                padding: 1em; 
                background: white;
            }
            input{
                width: 100%;
                padding: 1em;
                box-sizing: border-box;
            }
            textarea{
                width: 100%;
                box-sizing: border-box;
            }
    
            select{
                padding: 1em;
            }
        </style>
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
                    <td>id Ingrediente:</td>
                    <td>
                        <select name="ing" >
                            <option value="">Seleccionar</option>
                            <?php
                                foreach ($ings as $ing) {
                                    echo '<option value='.$ing['id_ing'].'></option>';
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


