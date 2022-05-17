<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM reportes");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row['id'] ."<br />";
        echo "Descripción de insumos utilizados: " . $row['insumos'] ."<br />";
        echo "Descripción de productos terminados: " . $row['terminados'] ."<br />";
        echo "Chef: " . $row['chef'] ."<br />";

        echo "<hr />";
    }
?>
