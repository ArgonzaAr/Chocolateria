<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_venta = $_POST["id_venta"];
    $id_chocolate = $_POST["id_chocolate"];
    $cantidad = $_POST["cantidad"];
    $fecha = $_POST["fecha"];
    $vendedor = $_POST["vendedor"];

    $sql = "INSERT INTO ventas (id_venta,  id_chocolate, cantidad, fecha, vendedor)
    VALUES ('$id_venta','$id_chocolate','$cantidad', '$fecha', '$vendedor')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
