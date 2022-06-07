<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    $presentacion = $_POST["presentacion"];
    
    $sql = "UPDATE productos_finales SET id='$id', tipo='$tipo',  presentacion='$presentacion' WHERE id=$id";

    if ($db->query($sql) == TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error actualizando registro: " . $db->error;
    }
?>
