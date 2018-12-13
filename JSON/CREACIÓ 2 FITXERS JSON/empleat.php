<?php
header("Content-Type: application/json");
require_once ("../db_connection.php");
$statement = "SELECT empleado.idPersona, Persona.nombre from empleado, persona where persona.id=empleado.idPersona order by empleado.idPersona";
$res = $conn->prepare($statement);
$res->execute();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
print json_encode($rows, JSON_PRETTY_PRINT);
