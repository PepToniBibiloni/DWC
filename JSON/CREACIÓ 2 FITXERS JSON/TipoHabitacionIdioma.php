<?php
header("Content-Type: application/json");
require_once ("../db_connection.php");
$statement = "SELECT * from habiacion";
$res = $conn->prepare($statement);
$res->execute();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
print json_encode($rows, JSON_PRETTY_PRINT);
