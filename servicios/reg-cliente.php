<?php
require_once '../dbase/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['nombre'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $rfc = $_POST['rfc'];
    $razsoc = $_POST['razsoc'];
    $cod = $_POST['cod'];

    $statement = $pdo->prepare("INSERT INTO cliente(nom_comp, rfc, correo, raz_soc, tel, cp) VALUES(:nom, :rfc, :correo, :raz, :tel, :cod)");
    $statement->execute([
        ':nom' => $name,
        ':rfc' => $rfc,
        ':correo' => $correo,
        ':raz' => $razsoc,
        ':tel' => $tel,
        ':cod' => $cod
    ]);

}

require_once '../registro_clte.html';



