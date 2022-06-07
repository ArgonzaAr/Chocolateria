<?php 
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_trabajador = $_POST["id_trabajador"];

    $sql = "DELETE FROM trabajador WHERE id_trabajador = '$id_trabajador'";

    if ($db->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
