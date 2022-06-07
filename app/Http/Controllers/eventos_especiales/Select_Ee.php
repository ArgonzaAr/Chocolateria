<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM eventos_especiales");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID del evento: " . $row['id_evento'] ."<br />";
        echo "Tipo de chocolate: " . $row['chocolate'] ."<br />";
        echo "Presentación: " . $row['piezas'] . " piezas" ."<br />";
        echo "Descripcion: " . $row['descripcion'] ."<br />";
        echo "Fecha de entrega: " . $row['fecha'] ."<br />";
        
        echo "<hr />";
    }
?>
