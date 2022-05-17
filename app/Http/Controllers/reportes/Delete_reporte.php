<?php 
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id = $_POST["id"];

    $sql = "DELETE FROM reportes WHERE id = $id";

    if ($db->query($sql) == TRUE) {
        echo "Reporte eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
