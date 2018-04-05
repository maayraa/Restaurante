<?php
    require_once '../dbase/conexion.php';
    require_once '../dbase/funciones.php';
    $ings =getDataBase('platillo', $pdo);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pres = $_POST['pres'];
        $prec = $_POST['prec'];
        $descr = $_POST['descr'];
        $ing = $_POST['ing'];

        $statement = $pdo ->prepare("INSERT INTO platillo(presen, prec, descr, id_ingred, img) VALUES (:pres, :prec, descr, :ing, :img)" );
        $statement -> execute([
            ':pres' => $pres,
            ':prec' => $prec,
            ':descr' => $descr,
            'ing' => $ing
        ]);

    }

    require_once "../platillo.php";