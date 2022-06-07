<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();
    
    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    $presentacion = $_POST["presentacion"];

    $sql = "INSERT INTO productos_finales (id, tipo, presentacion)
    VALUES ('$id','$tipo','$presentacion')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
