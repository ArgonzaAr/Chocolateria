<?php 
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_compra = $_POST["id_compra"];

    $sql = "DELETE FROM compra_insumos WHERE id_compra = '$id_compra'";

    if ($db->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
