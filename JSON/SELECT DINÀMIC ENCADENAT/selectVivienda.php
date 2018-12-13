<?php
header("Content-Type: application/json");
require_once "../db_connection.php";

$sql = "SELECT id, nombre FROM vivienda";
$statement = $conn->prepare($sql);
$statement->execute();
$res = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($res, JSON_PRETTY_PRINT);