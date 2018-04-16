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
        case 'proveedor':
            $statement = $pdo->prepare("SELECT * FROM proveedores");
            $statement->execute();
            $proveedor = $statement;

        break;
        case 'platillo':
            $statement =$pdo->prepare("SELECT * FROM platillo");
            $statement->execute();
            $platillo = $statement;
        break;
        case 'nomina';
            $statement =$pdo->prepare("SELECT * FROM nomina" );
            $statement->execute();
            $nomina = $statement;
        break;
        case 'factura';
            $statement =$pdo->prepare("SELECT * FROM factura" );
            $statement->execute();
            $factura = $statement;
        break;
        case 'comanda';
        $statement =$pdo->prepare("SELECT * FROM comanda" );
        $statement->execute();
        $comanda = $statement;
        break;
        case 'ingredientes';
        $statement =$pdo->prepare("SELECT * FROM ingredientes" );
        $statement->execute();
        $ingrediente = $statement;
        break;
        case 'nota_venta';
        $statement =$pdo->prepare("SELECT * FROM nota_venta" );
        $statement->execute();
        $nota = $statement;
        break;

        default:
    }

    require_once '../consultas.php';