<?php 
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_venta = $_POST["id_venta"];

    $sql = "DELETE FROM ventas WHERE id_venta = '$id_venta'";

    if ($db->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
