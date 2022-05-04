<?php
    include '../model/Conex_DB.php';
    $db = new Database();
    
    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    $presentacion = $_POST["presentacion"];
    $evento_especial = $_POST["evento_especial"];

    $sql = "INSERT INTO productos_finales (id, tipo, presentacion, evento_especial)
    VALUES ('$id','$tipo','$presentacion', '$evento_especial')";

    if ($db->query($sql) == TRUE) {
        echo "Nuevo registro insertado";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
?>
