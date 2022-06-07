<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM compra_insumos");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID de la compra: " . $row['id_compra'] ."<br />";
        echo "ID de insumo: " . $row['id_insumo'] ."<br />";
        echo "Cantidad: " . $row['cantidad'] ."<br />";
        echo "Precio: $" . $row['precio'] ."<br />";
        echo "Proveedor: " . $row['proveedor'] ."<br />";
        
        echo "<hr />";
    }
?>
