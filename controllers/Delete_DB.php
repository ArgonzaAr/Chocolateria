<?php 
    include '../model/Conex_DB.php';
    $db = new Database();
    
    $id = $_POST["id"];

    $sql = "DELETE FROM productos_finales WHERE id = '$id'";

    if ($db->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
