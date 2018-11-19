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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT tipo_cama.id,tipo_cama_has_idioma.nombre FROM tipo_cama,tipo_cama_has_idioma where tipo_cama.id=tipo_cama_has_idioma.idTipo_cama";
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