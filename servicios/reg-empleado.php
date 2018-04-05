<?php
    require_once '../dbase/conexion.php';
    require_once '../dbase/funciones.php';
    $puestos = getDataBase('puestos', $pdo);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $dir = $_POST['dir'];
        $ns = $_POST['ns'];
        $rfc = $_POST['rfc'];
        $puesto = $_POST['puesto'];
        $curp = $_POST['curp'];

        $statement = $pdo->prepare("INSERT INTO empleados(id_puesto, nom_emp, tel_emp, correo_emp, nss_emp, rfc_emp, dom_emp, curp_emp) VALUES (:puesto, :nombre, :tel, :email, :nss, :rfc, :dom, :curp)");
        $statement->execute([
            ':puesto'   =>  $puesto,
            ':nombre'   =>  $nombre,
            ':tel'      =>  $tel,
            ':email'    =>  $email,
            ':nss'      =>  $ns,
            ':rfc'      =>  $rfc,
            ':dom'      =>  $dir,
            ':curp'     =>  $curp
        ]);
    }

    require_once '../registro_emp.php';