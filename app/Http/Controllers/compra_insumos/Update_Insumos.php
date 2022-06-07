<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_insumo = $_POST["id_insumo"];
    $cantidad = $_POST["cantidad"];
    
    $sql = "UPDATE insumos SET cantidad = cantidad - '$cantidad' WHERE id = $id_insumo ";
    //$sql = "UPDATE compra_insumos SET id_compra='$id_compra', id_insumo='$id_insumo' , cantidad='$cantidad',  precio='$precio', proveedor='$proveedor' WHERE id_compra=$id_compra";

    if ($db->query($sql) == TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error actualizando registro: " . $db->error;
    }
?>
