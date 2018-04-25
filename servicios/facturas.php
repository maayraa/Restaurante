<?php
include_once '../dbase/conexion.php';
include_once '../dbase/funciones.php';

$comandas = getDataBase('comanda', $pdo);
    

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $folio = $_POST['fol'];
    $fecha = $_POST['fecha'];
    $rfc = $_POST['rfc'];
    $cp = $_POST['cp'];
    $razon = $_POST['raz'];
    $subtotal = $_POST['sub'];
    $iva = $_POST['iva'];
    $total = $_POST['tot'];
    

    $statement = $pdo->prepare("INSERT INTO factura(fol_coman, fecha, rfc, cp, raz_soc, subtot, iva, total) VALUES(:id_fact, :fol, :fecha, :rfc, :cp, :raz_soc, :subtot, :iva, :total )");
    $statement->execute([
        ':fol' => $folio,
        ':fecha' => $fecha,
        ':rfc' => $rfc,
        ':cp' => $cp,
        ':raz_soc' => $razon,
        ':subtot' => $subtotal,
        ':iva' => $iva,
        ':total' => $total
    ]);

}

    $statement = $pdo->prepare('SELECT * FROM comanda');
	$statement->execute();
    $comandas = $statement;
    
    require_once '../factura.php';
