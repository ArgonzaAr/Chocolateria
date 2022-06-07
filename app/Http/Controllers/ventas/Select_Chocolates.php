<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM chocolates");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "Número de producto: " . $row['id_chocolate'] ."<br />";
        echo "Chocolate: " . $row['nombre'] ."<br />";
        echo "Presentación: " . $row['piezas'] . " piezas" ."<br />";
        echo "Cantidad disponible: " . $row['cantidad'] ."<br />";
        
        echo "<hr />";
    }
?>
