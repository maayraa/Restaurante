<?php

	include_once '../dbase/conexion.php';
	include_once '../dbase/funciones.php';

	$statement = $pdo->prepare('SELECT * FROM cliente');
	$statement->execute();
	$clientes = $statement;

	$statement = $pdo->prepare('SELECT * FROM platillo');
	$statement->execute();
	$platillos = $statement;

	require_once '../comanda.php';