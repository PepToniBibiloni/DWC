<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
require_once ("../db_connection.php");

$sql = "SELECT tipo_habitacion.id,tipo_habitacion_has_idioma.nombre FROM tipo_habitacion,tipo_habitacion_has_idioma where tipo_habitacion.id=tipo_habitacion_has_idioma.idTipo_habitacion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nombre</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>