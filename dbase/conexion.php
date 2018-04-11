<?php
    $host = '192.168.13.22';
	$dbname = 'restaurante';
	$user = 'ingenieros';
	$pass = 'Temporal';

	try{
		// MYSQL CON PDO
		$pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $user, $pass);
		// APLICAR ATRIBUTOS                        PDO::ERRMODE_SILENT
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
	}