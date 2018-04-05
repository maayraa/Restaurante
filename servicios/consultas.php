<?php
    include_once '../dbase/conexion.php';
    include_once '../dbase/funciones.php';

    $con = $_GET['con'];

    switch ($con) {
        case 'empleados':
            $statement = $pdo->prepare("SELECT * FROM empleados");
            $statement->execute();
            $empleados = $statement;
        break;
        case 'clientes':
            $statement = $pdo->prepare("SELECT * FROM cliente");
            $statement->execute();
            $clientes = $statement;
        break;
        case 'puestos':
            $statement = $pdo->prepare("SELECT * FROM puestos");
            $statement->execute();
            $puestos = $statement;

        break;
        default:
    }

    require_once '../consultas.php';