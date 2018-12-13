<?php
header("Content-Type: application/json; charset=UTF-8");
require_once("../db_connection.php");
$statement = "SELECT tipo_habitacion.id, tipo_habitacion_has_idioma.nombre 
from tipo_habitacion, tipo_habitacion_has_idioma 
where tipo_habitacion_has_idioma.idTipo_Habitacion = tipo_habitacion.id";
$res = $conn->prepare($statement);
$res->execute();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rows);