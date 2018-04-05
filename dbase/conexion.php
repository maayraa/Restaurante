<?php
    $host = 'localhost';
	$dbname = 'restaurante';
	$user = 'root';
	$pass = '';

	try{
		// MYSQL CON PDO
		$pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $user, $pass);
		// APLICAR ATRIBUTOS                        PDO::ERRMODE_SILENT
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
	}