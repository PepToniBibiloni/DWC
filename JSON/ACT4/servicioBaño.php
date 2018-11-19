habitacion<!DOCTYPE html>
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

$sql = "SELECT servicio_baño.id, sevicio_baño_has_idioma.nombre FROM sevicio_baño,sevicio_baño_has_idioma where  sevicio_baño.id=sevicio_baño_has_idioma.idTipoBano";
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