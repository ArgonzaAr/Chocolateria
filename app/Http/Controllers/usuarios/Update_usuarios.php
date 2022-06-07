<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_trabajador = $_POST["id_trabajador"];
    $nombre = $_POST["nombre"];
    $apPaterno = $_POST["apPaterno"];
    $apMaterno = $_POST["apMaterno"];
    $puesto = $_POST["puesto"];
    $telefono = $_POST["telefono"];
    
    $sql = "UPDATE trabajador SET id_trabajador ='$id_trabajador', nombre='$nombre',  apPaterno='$apPaterno', apMaterno='$apMaterno', puesto='$puesto', telefono='$telefono' WHERE id_trabajador=$id_trabajador";

    if ($db->query($sql) == TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error actualizando registro: " . $db->error;
    }
?>
