<?php
    require_once '../dbase/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['nombre'];
        $dir = $_POST['dir'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $cuenta = $_POST['num-c'];
        $rfc = $_POST['rfc'];
        $rs = $_POST['rs']; //rason social
        $conv = $_POST['conv']; //tipo de convenio
        $pago = $_POST['pago']; //tipo de pago

        $statement = $pdo->prepare("INSERT INTO proveedores(nom_com, direc_com, tel, correo, num_cuenta, rfc, raz_soc, tipo_conv, tipo_pago) VALUES(:nom, :dir, :tel, :email, :cuenta, :rfc, :raz_soc, :conv, :pago)");
        $statement->execute([
            ':nom'  =>  $name,
            ':dir'  =>  $dir,
            ':tel'  =>  $tel,
            ':email'=>  $email,
            ':cuenta'   => $cuenta,
            ':rfc'  => $rfc,
            ':raz_soc'  => $rs,
            ':conv' =>  $conv,
            ':pago' => $pago
        ]);
    }

    require_once '../registro_prov.html';