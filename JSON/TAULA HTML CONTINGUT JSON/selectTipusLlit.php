<?php
header("Content-Type: application/json; charset=UTF-8");
require_once("../db_connection.php");

$statement = "select id from tipo_cama";

$res = $conn->prepare($statement);
$res->execute();
$rows = $res->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rows);
