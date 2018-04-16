<?php
require_once '../dbase/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $unidad = $_POST['uni'];
    $tipo = $_POST['tipo'];
    $costo = $_POST['costo'];
    

    $statement = $pdo->prepare("INSERT INTO ingredientes(uni_descr, tipo, costo) VALUES(:unidescr, :tipo, :costo)");
    $statement->execute([
        ':unidescr' => $unidad,
        ':tipo' => $tipo,
        ':costo' => $costo
    ]);

}

require_once '../ingredientes.php';
