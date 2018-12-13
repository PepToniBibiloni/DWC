<?php
header("Content-Type: application/json");
require_once ("../db_connection.php");
$statement = "SELECT tipo_habitacion_has_idioma.nombre FROM tipo_habitacion_has_idioma, tipo_habitacion
where tipo_habitacion_has_idioma.idTipo_Habitacion = tipo_habitacion.id";
$res = $conn->prepare($statement);
$res->execute();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
print json_encode($rows, JSON_PRETTY_PRINT);

