<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM insumos");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID del insumo: " . $row['id'] ."<br />";
        echo "Insumo: " . $row['insumo'] ."<br />";
        echo "Cantidad en gramos: " . $row['cantidad'] ."<br />";
        
        echo "<hr />";
    }
?>
