<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_venta = $_POST["id_venta"];
    $id_chocolate = $_POST["id_chocolate"];
    $cantidad = $_POST["cantidad"];
    $fecha = $_POST["fecha"];
    $vendedor = $_POST["vendedor"];
    
    $sql = "UPDATE ventas SET id_venta='$id_venta', id_chocolate='$id_chocolate',  cantidad='$cantidad',  fecha='$fecha',  vendedor='$vendedor' WHERE id_venta=$id_venta";

    if ($db->query($sql) == TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error actualizando registro: " . $db->error;
    }
?>
