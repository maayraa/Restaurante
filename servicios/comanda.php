<?php

	include_once '../dbase/conexion.php';
	include_once '../dbase/funciones.php';

	$clte = getDataBase('cliente', $pdo);
    $plat = getDataBase('platillo', $pdo);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $idclte = $_POST['id_clte'];
        $idplat = $_POST['id_plat'];
        $bebida = $_POST['bebida'];
        $descr = $_POST['descr'];
        $cant = $_POST['cant'];
		$prec = $_POST['prec'];
		$mesa = $_POST['num_mesa'];
        $fecha = $_POST['fecha'];
        $emp = $_POST['nom_emp'];
		$nota = $_POST['nota_venta'];
		
        $statement = $pdo->prepare("INSERT INTO comanda(id_clte, id_plat, bebida, descr, cant, prec, num_mesa, fecha, nom_emp, nota_venta) VALUES (:idclte, :idplat, :bebida, :descr, :cant, :prec, :num_mesa, :fecha, :nom_emp, :nota_venta)");
        $statement->execute([
            ':idclte' => $idclte,
            ':idplat' => $idplat,
            ':bebida' => $bebida,
            ':descr'=> $descr,
            ':cant' => $cant,
			':prec' => $prec,
			':num_mesa' => $mesa,
            ':fecha'=> $fecha,
            ':nom_emp' => $emp,
			':nota_venta' => $nota
			
        ]);
    
    }
	

	$statement = $pdo->prepare('SELECT * FROM cliente');
	$statement->execute();
	$clientes = $statement;

	$statement = $pdo->prepare('SELECT * FROM platillo');
	$statement->execute();
	$platillos = $statement;

	$statement = $pdo->prepare('SELECT * FROM empleados');
	$statement->execute();
	$empleado = $statement;

	require_once '../comanda.php';