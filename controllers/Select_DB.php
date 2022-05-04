<?php
    include '../model/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM productos_finales");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID del producto: " . $row['id'] ."<br />";
        echo "Tipo de chocolate: " . $row['tipo'] ."<br />";
        echo "Presentación [3, 9, 12 o 24]: " . $row['presentacion'] ."<br />";
        echo "Evento especial: " . $row['evento_especial'] ."<br />";
        
        echo "<hr />";
    }
?>