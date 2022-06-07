<?php 
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_evento = $_POST["id_evento"];

    $sql = "DELETE FROM eventos_especiales WHERE id_evento = '$id_evento'";

    if ($db->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
