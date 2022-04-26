<?php
    include '../model/Conex_DB.php';
    $db = new Database();
    
    $tipo = $_POST["tipo"];
    $presentacion = $_POST["presentacion"];
    $evento_especial = $_POST["evento_especial"];

    $sql = "INSERT INTO productos_finales (tipo, presentacion, evento_especial)
    VALUES ('$tipo','$presentacion', '$evento_especial')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
