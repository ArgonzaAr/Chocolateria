<?php 
    include '../model/Conex_DB.php';
    $db = new Database();
    
    $tipo = $_POST["tipo"];

    $sql = "DELETE FROM productos_finales WHERE tipo = '$tipo'";

    if ($db->query($sql) == TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error eliminando registro: " . $db->error;
    }
?>
