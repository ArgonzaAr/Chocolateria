<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_evento = $_POST["id_evento"];
    $chocolate = $_POST["chocolate"];
    $piezas = $_POST["piezas"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    
    $sql = "UPDATE eventos_especiales SET id_evento='$id_evento', chocolate='$chocolate',  piezas='$piezas', descripcion='$descripcion', fecha='$fecha' WHERE id_evento=$id_evento";

    if ($db->query($sql) == TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error actualizando registro: " . $db->error;
    }
?>
