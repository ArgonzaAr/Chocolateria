<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_evento = $_POST["id_evento"];
    $chocolate = $_POST["chocolate"];
    $piezas = $_POST["piezas"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];

    $sql = "INSERT INTO eventos_especiales (id_evento, chocolate, piezas, descripcion, fecha)
    VALUES ('$id_evento','$chocolate','$piezas', '$descripcion', '$fecha')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
