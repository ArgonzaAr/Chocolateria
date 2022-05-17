<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id = $_POST["id"];
    $insumos = $_POST["insumos"];
    $terminados = $_POST["terminados"];
    $chef = $_POST["chef"];

    $sql = "INSERT INTO reportes (id, insumos, terminados, chef)
    VALUES ($id,'$insumos', '$terminados','$chef')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo reporte insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
