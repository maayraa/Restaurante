<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilos/style.css">
    <title><?php echo ucwords($con) ?></title>
    <style>
        td{
            padding: .5em;
        }
        a{
                /* position: relative; */
    width: 120px;
    height: 20px;
    background: #fff;
    padding-top: 6px;
    /* margin-top: 10px; */
    -webkit-border-radius: 38px;
    -moz-border-radius: 38px;
    border-radius: 28px;
    -webkit-box-shadow: inset 0 1px 2px #000, 0px 1px 1px rgba(255,255,225,0.2);
    -moz-box-shadow: inset 0 1px 2px #000, 0px 1px 1px rgba(255,255,225,0.2);
    box-shadow: inset 0 1px 2px #000, 0px 1px 0px rgba(255,255,225,0.3);
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
    transition: .5s all;
    padding: .5em;
    margin-top: em;
        }
    </style>
</head>
<body>
    <table>
        <caption></caption>
        <!-- IMPRIMIR DATOS DE LOS EMPLEADOS -->
        <?php
            if (!empty($empleados)){
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
                <td><b>Accion</b></td>
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
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=empleados&id=".$emp['id_emp']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
            ?>

            <caption></caption>
            <?php
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
                <td><b>Accion</b></td>
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
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=cliente&id=".$cte['id_clte']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
            ?>

            <?php
            // IMPRIME TODOS LOS PUESTOS
            if(!empty($puestos)){
                echo '
                <tr>
                <td><b>Id de puesto</b></td>
                <td><b>Puesto</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($puestos as $puesto) {
                    echo '<tr>';
                    echo '<td>';
                    echo $puesto['id_puesto'];
                    echo '</td>';
                    echo '<td>';
                    echo $puesto['puesto'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=puestos&id=".$puesto['id_puesto']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
            ?>

            <?php
            //IMPRIME TODOS LOS PROVEEDORES
            if(!empty($proveedor)){
                echo '
                <tr>
                <td><b>Id de proveedor</b></td>
                <td><b>Nombre completo</b></td>
                <td><b>Direccion</b></td>
                <td><b>Telefono</b></td>
                <td><b>Correo</b></td>
                <td><b>Numero de cuenta</b></td>
                <td><b>RFC</b></td>
                <td><b>Razon social</b></td>
                <td><b>Tipo de convenio</b></td>
                <td><b>Tipo de pago</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($proveedor as $pro) {
                    echo '<tr>';
                    echo '<td>';
                    echo $pro['id_prov'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['nom_com'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['direc_com'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['tel'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['correo'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['num_cuenta'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['rfc'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['raz_soc'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['tipo_conv'];
                    echo '</td>';
                    echo '<td>';
                    echo $pro['tipo_pago'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=proveedores&id=".$pro['id_prov']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
            ?>

            <?php
            //IMPRIME TODOS LOS PLATILLOS
            if(!empty($platillo)){
                echo '
                <tr>
                <td><b>Id de platillo</b></td>
                <td><b>Presentacion</b></td>
                <td><b>Precio</b></td>
                <td><b>Descripcion</b></td>
                <td><b>Id de ingrediente</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($platillo as $plat) {
                    echo '<tr>';
                    echo '<td>';
                    echo $plat['id_plat'];
                    echo '</td>';
                    echo '<td>';
                    echo $plat['presen'];
                    echo '</td>';
                    echo '<td>';
                    echo $plat['prec'];
                    echo '</td>';
                    echo '<td>';
                    echo $plat['descr'];
                    echo '</td>';
                    echo '<td>';
                    echo $plat['id_ingred'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=platillo&id=".$plat['id_plat']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }



        ?>

        <?php
            //IMPRIME TODAS LAS NOMINAS
            if(!empty($nomina)){
                echo '
                <tr>
                <td><b>Id de nomina</b></td>
                <td><b>Id del empleado</b></td>
                <td><b>Ddeduccion</b></td>
                <td><b>Percepcion</b></td>
                <td><b>Horas extras</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($nomina as $nomi) {
                    echo '<tr>';
                    echo '<td>';
                    echo $nomi['id_nomi'];
                    echo '</td>';
                    echo '<td>';
                    echo $nomi['id_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $nomi['deduccion'];
                    echo '</td>';
                    echo '<td>';
                    echo $nomi['percepciom'];
                    echo '</td>';
                    echo '<td>';
                    echo $nomi['horas_ext'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=nomina&id=".$emp['id_nomi']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
                    
            }
        ?>
             <?php
            //IMPRIME TODAS LAS NOMINAS
            if(!empty($almacen)){
                echo '
                <tr>
                <td><b>Numero de entrada</b></td>
                <td><b>Id de proveedor</b></td>
                <td><b>Id de empleado</b></td>
                <td><b>Descripcion</b></td>
                <td><b>Ingrediente</b></td>
                <td><b>Fecha</b></td>
                <td><b>Estatus</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($almacen as $alm) {
                    echo '<tr>';
                    echo '<td>';
                    echo $alm['num_entr'];
                    echo '</td>';
                    echo '<td>';
                    echo $alm['id_prov'];
                    echo '</td>';
                    echo '<td>';
                    echo $alm['id_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $alm['descr'];
                    echo '</td>';
                    echo '<td>';
                    echo $alm['ingrend'];
                    echo '</td>';
                    echo '<td>';
                    echo $alm['fecha'];
                    echo '</td>';
                    echo '<td>';
                    echo $alm['estatus'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=almacen&id=".$alm['num_entr']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
        ?>

            <?php
            //IMPRIME TODAS LAS Facturas
            if(!empty($factura)){
                echo '
                <tr>
                <td><b>Id de factura</b></td>
                <td><b>Folio de comanda</b></td>
                <td><b>Fecha</b></td>
                <td><b>RFC</b></td>
                <td><b>Codigo postal</b></td>
                <td><b>Razon social</b></td>
                <td><b>Subtotal</b></td>
                <td><b>IVA</b></td>
                <td><b>Total</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($factura as $fac) {
                    echo '<tr>';
                    echo '<td>';
                    echo $fac['id_fact'];
                    echo '</td>';
                    echo '<td>';
                    echo $fac['fol_coman'];
                    echo '</td>';
                    echo '<td>';
                    echo $fac['fecha'];
                    echo '</td>';
                    echo '<td>';
                    echo $fac['rfc'];
                    echo '</td>';
                    echo '<td>';
                    echo $fac['c.p'];
                    echo '</td>';
                    echo '</tr>';
                    echo $fac['raz_soc'];
                    echo '</td>';
                    echo '</tr>';
                    echo $fac['subtot'];
                    echo '</td>';
                    echo '</tr>';
                    echo $fac['iva'];
                    echo '</td>';
                    echo '</tr>';
                    echo $fac['total'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=factura&id=".$fac['id_fact']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
        ?>
         
         <?php
            //IMPRIME TODAS LAS COMANDAS
            if(!empty($comanda)){
                echo '
                <tr>
                <td><b>Folio de comanda</b></td>
                <td><b>Id de cliente</b></td>
                <td><b>Id de platillo</b></td>
                <td><b>Bebida</b></td>
                <td><b>Descripcion</b></td>
                <td><b>Cantidad</b></td>
                <td><b>Precio</b></td>
                <td><b>Numero de mesa</b></td>
                <td><b>Fecha</b></td>
                <td><b>Nombre de empleado</b></td>
                <td><b>Nota de venta</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($comanda as $com) {
                    echo '<tr>';
                    echo '<td>';
                    echo $com['fol_coman'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['id_clte'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['id_plat'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['bebida'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['descr'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['cant'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['prec'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['num_mesa'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['fecha'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['nom_emp'];
                    echo '</td>';
                    echo '<td>';
                    echo $com['nota_venta'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=comanda&id=".$com['fol_coman']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
        ?>
            <?php
            //IMPRIME TODAS LOS INGREDIENTES
            if(!empty($ingrediente)){
                echo '
                <tr>
                <td><b>Id de ingrediente</b></td>
                <td><b>Descripcion</b></td>
                <td><b>Tipo</b></td>
                <td><b>Costo</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($ingrediente as $ing) {
                    echo '<tr>';
                    echo '<td>';
                    echo $ing['id_ingrend'];
                    echo '</td>';
                    echo '<td>';
                    echo $ing['uni_descr'];
                    echo '</td>';
                    echo '<td>';
                    echo $ing['tipo'];
                    echo '</td>';
                    echo '<td>';
                    echo $ing['costo'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=ingredientes&id=".$ing['id_ingrend']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
        ?>
           
           <?php
            //IMPRIME TODAS LAS NOTAS DE VENTA
            if(!empty($nota)){
                echo '
                <tr>
                <td><b>Subtotal</b></td>
                <td><b>Total</b></td>
                <td><b>Folio de comanda</b></td>
                <td><b>Detalle de venta</b></td>
                <td><b>Accion</b></td>
                </tr>';
                
                foreach ($nota as $not) {
                    echo '<tr>';
                    echo '<td>';
                    echo $not['subtot'];
                    echo '</td>';
                    echo '<td>';
                    echo $not['total'];
                    echo '</td>';
                    echo '<td>';
                    echo $not['fol_coman'];
                    echo '</td>';
                    echo '<td>';
                    echo $not['deta_venta'];
                    echo '</td>';
                    echo "<td><a href='".RUTA."servicios/eliminar.php?tabla=nota_venta&id=".$not['fol_coman']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
            }
        ?>

    </table>
    <a href="../consultas.html"><img src="">Regresar</a>
</body>
</html>