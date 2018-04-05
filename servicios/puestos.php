<?php
    include_once '../dbase/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $puesto = $_POST['puesto'];
        $statement = $pdo->prepare("INSERT INTO puestos(puesto) VALUES (:puesto)");
        $statement->execute([
            ':puesto'=>$puesto
        ]);
    }

    require_once '../puestos.html';