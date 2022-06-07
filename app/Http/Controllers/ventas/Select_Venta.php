<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM ventas, chocolates WHERE ventas.id_chocolate = chocolates.id_chocolate");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID de la venta: " . $row['id_venta'] ."<br />";
        echo "Nombre del chocolate: " . $row['nombre'] ."<br />";
        echo "Cantidad comprada: " . $row['cantidad']." piezas" ."<br />";
        echo "Costo por caja: $" . $row['precio'] ."<br />";
        echo "Fecha de compra: " . $row['fecha'] ."<br />";
        echo "Vendedor: " . $row['vendedor'] ."<br />";
        
        echo "<hr />";
    }

?>
