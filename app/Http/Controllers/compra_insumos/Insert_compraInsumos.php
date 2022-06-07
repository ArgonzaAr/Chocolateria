<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_compra = $_POST["id_compra"];
    $id_insumo = $_POST["id_insumo"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $proveedor = $_POST["proveedor"];

    $sql = "INSERT INTO compra_insumos (id_compra, id_insumo, cantidad, precio, proveedor)
    VALUES ('$id_compra', '$id_insumo','$cantidad','$precio', '$proveedor')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
