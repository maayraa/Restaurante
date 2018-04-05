<?php
    require_once '../dbase/conexion.php';
    require_once '../dbase/funciones.php';
    $provs = getDataBase('proveedores', $pdo);
    $emps = getDataBase('empleados', $pdo);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $idprov = $_POST['prov'];
        $idemp = $_POST['emp'];
        $descr = $_POST['descr'];
        $ingred = $_POST['ing'];
        $fecha = $_POST['fecha'];
        $estatus = $_POST['estatus'];

        $statement = $pdo->prepare("INSERT INTO almacen(id_prov, id_emp, descr, ingrend, fecha, estatus) VALUES (:idprov, :idemp, :descr, :ingred, :fecha, :estatus)");
        $statement->execute([
            ':idprov' => $idprov,
            ':idemp' => $idemp,
            ':descr' => $descr,
            ':ingred'=> $ingred,
            ':fecha' => $fecha,
            ':estatus' => $estatus
        ]);
    
    }

    require_once '../almacen.php';