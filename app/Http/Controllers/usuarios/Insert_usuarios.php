<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id_trabajador = $_POST["id_trabajador"];
    $nombre = $_POST["nombre"];
    $apPaterno = $_POST["apPaterno"];
    $apMaterno = $_POST["apMaterno"];
    $puesto = $_POST["puesto"];
    $telefono= $_POST ["telefono"];


    $sql = "INSERT INTO trabajador (id_trabajador, nombre, apPaterno, apMaterno, puesto, telefono)
    VALUES ('$id_trabajador','$nombre','$apPaterno', '$apMaterno', '$puesto', '$telefono')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
