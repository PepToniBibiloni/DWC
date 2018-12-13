<?php
header("Content-Type: application/json");
require_once "../db_connection.php";

if (isset($_GET["idTipoHab"])){
    $idTarifa = $_GET["idTipoHab"];
    $sql = "SELECT id from tipo_habitacion WHERE id = :idTipoHab";
    $statement = $conn->prepare($sql);
    $statement->bindValue(":idTipoHab", $idTarifa);
} else {
    $sql = "SELECT * from tipo_habitacion";
    $statement = $conn->prepare($sql);
}
$statement->execute();
$res = $statement->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);