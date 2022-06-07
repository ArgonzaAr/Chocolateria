<?php
    include '../../../../config/Conex_DB.php';
    $db = new Database();

    $result = $db->query("SELECT * FROM trabajador");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID del trabajador: " . $row['id_trabajador'] ."<br />";
        echo "Nombre del trabajador: " . $row['nombre'] ."<br />";
        echo "Apellido paterno: " . $row['apPaterno'] ."<br />";
	echo "Apellido materno: " . $row['apMaterno'] ."<br />";
	echo "Puesto: " . $row['puesto'] ."<br />";
	echo "Teléfono: " . $row['telefono'] ."<br />";
        
        echo "<hr />";
    }
?>
