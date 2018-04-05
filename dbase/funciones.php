<?php
    function getDataBase($tabla, $pdo) {
        $statement = $pdo->prepare("SELECT * FROM $tabla");
        $statement->execute();
        return $valores = $statement;
    }

    // ->Fetch(PDO::FETCH_ASSOC)