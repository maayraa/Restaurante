<?php

	include_once '../dbase/conexion.php';
	include_once '../dbase/funciones.php';

	$emp = getDataBase('empleados', $pdo);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $idemp = $_POST['id_emp'];
        $periodo = $_POST['periodo'];
        $descr = $_POST['descr'];
        $sal = $_POST['sal_dro'];
        $dias = $_POST['dias_trb'];
		$cmson = $_POST['cmson'];
		$horas = $_POST['hrs_extr'];
        $seg = $_POST['seg_soc'];
        $info = $_POST['infonavit'];
        $credito = $_POST['credito'];
        $totd = $_POST['total_d'];
        $totp = $_POST['total_p'];
		
        $statement = $pdo->prepare("INSERT INTO nomina(id_emp, periodo, descr, sal_dro, dias_trb, cmson, hrs_extr, seg_soc, infonavit, credito, total_d, total_p) VALUES (:idemp, :periodo, :descr, :sal_dro, :dias_trb, :cmson, :hrs_esxtr, :seg_soc, :infonavit, :credito, :total_d, :total_p)");
        $statement->execute([
            ':idemp' => $idemp,
            ':periodo' => $periodo,
            ':descr' => $descr,
            ':sal_sro'=> $sal,
            ':dias_trb' => $dias,
			':cmson' => $cmson,
			':hrs_extr' => $horas,
            ':seg_soc'=> $seg,
            ':infonavit' => $info,
			':credito' => $credito,
			':total_d'=> $totd,
            ':total_p' => $totp
			
        ]);
    
    }
    
        require_once '../nomina.php';