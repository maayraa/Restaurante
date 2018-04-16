<?php
    require_once '../dbase/conexion.php';
    require_once '../dbase/funciones.php';
    $ings =getDataBase('comanda', $pdo);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sub = $_POST['subtot'];
        $total = $_POST['total'];
        $folio = $_POST['folio'];
        $detalle = $_POST['deta'];

        $statement = $pdo ->prepare("INSERT INTO nota_venta(subtot, total, fol_coman, deta_venta) VALUES (:subtot, :total, :folio, :deta)" );
        $statement -> execute([
            ':subtot' => $sub,
            ':total' => $total,
            ':folio' => $folio,
            ':deta' => $detalle
        ]);

    }

    require_once "../nota_venta.php";