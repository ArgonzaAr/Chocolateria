<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM productos_finales");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID del producto: " . $row['id'] ."<br />";
        echo "Tipo de chocolate: " . $row['tipo'] ."<br />";
        echo "Presentación: " . $row['presentacion'] . " piezas" ."<br />";
        
        echo "<hr />";
    }
?>
